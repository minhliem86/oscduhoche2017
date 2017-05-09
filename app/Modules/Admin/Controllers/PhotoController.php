<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;

use App\Models\Photo;
use App\Http\Requests\ImageRequest;
use App\Repositories\UploadRepository;
use App\Repositories\CommonRepository;


class PhotoController extends Controller {

  protected $photo;
  protected $_upload_folder = 'public/upload/image';
  protected $_upload_folder_thumb = 'public/upload/image/thumbs';

  public function __construct(UploadRepository $image){
      $this->image = $image;
  }

  public function index()
  {
      $photo = $this->image->getAll();
      return view('Admin::pages.photo.index')->with(compact('photo'));
  }

  public function create()
  {
      $list_album = $this->image->getListAlbum();
      return view('Admin::pages.photo.create',compact('list_album'));
  }

public function postUpload(Request $request)
{
  $input = $request->all();
  $response = $this->image->upload($input);
  return $response;
}
  public function edit($id)
  {
      $image = $this->image->getFindID($id);
      $list_album = $this->image->getListAlbum();
      return view('Admin::pages.photo.view')->with(compact('image','list_album'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request,ImageRequest $imgrequest, $id)
  {
    if($imgrequest->hasFile('img')){
      $common = new CommonRepository;
      $img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,1200,630);
      $thumbnail_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder_thumb,$resize=true,400,210);

    }else{
      $img_url = $request->input('img-bk');
      $thumbnail_url = $request->input('img-thumb-bk');
    }
    $arr_filename = explode('/',$img_url);
    $filename = end($arr_filename);

    $data = [
      'title'=>$request->title,
      'img_url' => $img_url,
      'thumbnail_url' => $thumbnail_url,
      'status'=> $request->status,
      'order'=>$request->order,
      'album_id' => $request->album_id,
      'filename' => $filename,
    ];
    $this->image->postUpdate($id,$data);
    Notification::success('Updated');
    return  redirect()->route('admin.photo.index');
  }

  public function postDelete(Request $request)
  {
      $response = $this->image->delete($request->input('id'));
      return $response;
  }
 public function destroy($id){
     $response = $this->image->delete($id);
     \Notification::success('Remove Successful');
     return redirect()->route('admin.photo.index');
 }

 public function deleteAll(Request $request){
     if(!$request->ajax()){
         abort(404);
     }else{
          $data = $request->arr;
          $response = $this->image->deleteAll($data);
          return response()->json(['msg' => 'ok']);
    }
  }

}
