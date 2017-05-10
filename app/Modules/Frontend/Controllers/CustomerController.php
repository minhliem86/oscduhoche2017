<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Tour;
use App\Models\Album;
use App\Models\Photo;


class CustomerController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public $album;
	public $tour;
	public $photo;


	public function __construct(Tour $tour, Album $album, Photo $photo){
		$this->tour = $tour;
		$this->album = $album;
		$this->photo = $photo;
    $this->auth = Auth::client();
    // $this->middleware('customer_login_not_yet');
	}

	public function getAlbum()
  {
    $tour_id = $this->auth->get()->tour_id;
		$img_banner = $this->tour->find($tour_id)->country()->first()->images()->where('type', 'banner_country')->first()->img_url;
		$country_name = $this->tour->find($tour_id)->country()->first()->name;
		$banner_desk =  $this->tour->find($tour_id)->banner_desktop;
		$banner_mobile =  $this->tour->find($tour_id)->banner_mobile;
		try {
				$tour_album = $this->tour->select('id', 'title')->with('albums')->find($tour_id);
        $lastest_album = $tour_album->albums()->orderBy('id', 'DESC')->take(2)->get();
        $all_album = $tour_album->albums()->orderBy('id', 'ASC')->take(6)->get();
		} catch (Exception $e) {
			return redirect()->back();
		}
    return view('Frontend::users.course.album', compact('lastest_album', 'all_album', 'img_banner', 'country_name', 'banner_desk', 'banner_mobile'));
  }

	public function ajaxLoadAlbum(Request $request)
	{
		if(!$request->ajax()){
			abort(404);
		}else{
			  $tour_id = $this->auth->get()->tour_id;
				try {
					$tour_album = $this->tour->select('id', 'title')->with('albums')->find($tour_id);
					$all_album = $tour_album->albums()->orderBy('id', 'DESC')->get();
				} catch (Exception $e) {
					return response()->json(['error'=>true, 'msg' => 'Not Found Album'],500);
				}
				$view = view('Frontend::ajax.loadFullAlbum', compact('all_album'))->render();
				return response()->json( ['error'=>false, 'msg' =>$view],200);
		}
	}

  public function getPhotoByAlbum(Request $request, $slug_album)
  {
    try {
        $title_album = $this->album->where('slug', $slug_album)->first()->title;
				$tour_id = $this->auth->get()->tour_id;
				$img_banner = $this->tour->find($tour_id)->country()->first()->images()->where('type', 'banner_country')->first()->img_url;
				$country_name = $this->tour->find($tour_id)->country()->first()->name;

				$banner_desk =  $this->tour->find($tour_id)->banner_desktop;
				$banner_mobile =  $this->tour->find($tour_id)->banner_mobile;
    } catch (Exception $e) {
      return redirect()->back();
    }
    $image = $this->album->where('slug', $slug_album)->first()->photos()->get();
    if($request->ajax()){
      return view('Frontend::ajax.paginatePhoto', compact('image'))->render();
    }
      return view('Frontend::users.course.photo', compact('title_album', 'image', 'img_banner', 'country_name', 'banner_mobile', 'banner_desk'));

  }

}
