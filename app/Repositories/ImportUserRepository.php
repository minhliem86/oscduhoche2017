<?php
namespace App\Repositories;

use Excel;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\LogCreateUser;

class ImportUserRepository{

  protected $customer;
  protected $log;

  public function __construst(Customer $customer, LogCreateUser $log)
  {
    $this->customer = $customer;
    $this->log = $log;
  }

  public function importUser($file)
  {
    $excel = Excel::selectSheets('Sheet1')->load($file, function($reader){
      $reader->each(function($sheet) {
        $username = 'duhoche2017_'.\Unicode::make($sheet->name);
        $password = \Common::randomPasword(6);
        $email = $sheet->email ? $sheet->email : '' ;
        $name = $sheet->name;
        $tour_id = round($sheet->code);

      });
    })->get();
    $data_log = [];
    $data = [];
    if(!$excel->isEmpty() && $excel->count()){
      $chu_excel = $excel->chunk(2);
      foreach($chu_excel as $item){
        foreach($item as $data_item){
          $username = 'duhoche2017_'.\Unicode::make($data_item->name);
          $password = \Common::randomPasword(6);
          $email = $data_item->email ? $data_item->email : '' ;
          $name = $data_item->name;
          $tour_id = round($data_item->code);

          $obj_log = [
            'username' => $username,
            'init_password' => $password,
            'email' => $email,
            'name' => $name,
          ];
          array_push($data_log, $obj_log);

          $data []= [
            'username'=> $username,
            'password' => bcrypt($password),
            'email' => $email,
            'name' => $name,
            'tour_id' => $tour_id
          ];

        }
      }
    }
    for($i = 0 ; $i<count($data); $i++){
      LogCreateUser::create($data_log[$i]);
      Customer::create($data[$i]);
    }
  }
}
