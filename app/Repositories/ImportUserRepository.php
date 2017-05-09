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
    Excel::selectSheets('Sheet1')->load($file, function($reader){
      $reader->each(function($sheet) {
        $username = 'duhoche2017_'.\Unicode::make($sheet->name);
        $password = \Common::randomPasword(6);
        $email = $sheet->email ? $sheet->email : '' ;
        $name = $sheet->name;
        $tour_id = round($sheet->code);
        LogCreateUser::create([
          'username'=> $username,
          'init_password' => $password,
          'email' => $email,
          'name' => $name,
        ]);

        Customer::create([
          'username'=> $username,
          'password' => \Hash::make($password),
          'email' => $email,
          'name' => $name,
          'tour_id' => $tour_id
        ]);

      });
    });
  }
}
