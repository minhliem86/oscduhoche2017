<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;


class CountryController extends Controller {

	protected $country;

    protected $upload_folder = 'country';

	public function __construct(Country $country){
		$this->country = $country;
	}
	
	public function index()
    {
        $country = $this->country->select('id','name','status','order','img_avatar')->get();
        return view('Admin::pages.country.index')->with(compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest, Country $country)
    {
        $order = $this->country->orderBy('order','DESC')->first();
        count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;

        if($imgrequest->hasFile('img')){
            $file = $imgrequest->file('img');
            $destinationPath = public_path().'/upload'.'/'.$this->upload_folder;
            $name = preg_replace('/\s+/', '', $file->getClientOriginalName());
            $filename = time().'_'.$name;

            $file->move($destinationPath,$filename);

            // $size = getimagesize($file);
            // if($size[0] > 620){
            //     \Image::make($file->getRealPath())->resize(620,null,function($constraint){$constraint->aspectRatio();})->save($destinationPath.'/'.$filename);
            // }else{
            //     $file->move($destinationPath,$filename);
            // }

            $img_url = asset('public/upload').'/'.$this->upload_folder.'/'.$filename;
            // $img_alt = \GetNameImage::make('\/',$filename);
        }else{
            $img_url = asset('public/assets/backend/img/image_thumbnail.gif');
            // $img_alt = \GetNameImage::make('\/',$img_url);
        }


        $data = [
            'name'=>$request->name,
            'slug' => \Unicode::make($request->name),
            'description' => $request->description,
            'status'=> $request->status,
            'img_avatar'=> $img_url,
            'order'=>$current
        ];
        $this->country->create($data);
        Notification::success('Created');
        return  redirect()->route('admin.country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = $this->country->find($id);
        return view('Admin::pages.country.view')->with(compact('country'));
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
            $file = $imgrequest->file('img');
            $destinationPath = public_path().'/upload'.'/'.$this->upload_folder;
            $name = preg_replace('/\s+/', '', $file->getClientOriginalName());
            $filename = time().'_'.$name;

            $file->move($destinationPath,$filename);

            // $size = getimagesize($file);
            // if($size[0] > 620){
            //     \Image::make($file->getRealPath())->resize(620,null,function($constraint){$constraint->aspectRatio();})->save($destinationPath.'/'.$filename);
            // }else{
            //     $file->move($destinationPath,$filename);
            // }

            $img_url = asset('public/upload').'/'.$this->upload_folder.'/'.$filename;
        }else{
            $img_url = $request->input('img-bk');
        }

        $country = $this->country->find($id);
        $country->name = $request->name;
        $country->slug = \Unicode::make($request->name);
        $country->description = $request->description;
        $country->img_avatar = $img_url;
        $country->status = $request->status;
        $country->order = $request->order;
        $country->save();

        Notification::success('Updated');
        return  redirect()->route('admin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->country->destroy($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.country.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->country->destroy($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        $country = $this->country->find($request->dataid);
        $count = $country->image()->get()->count();
        if($count > 0){
            return response()->json(['msg'=>'yes']);
        }else{
            $country->delete();
            return response()->json(['msg'=>'done']);
        }
    }
	
}