<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ImportUserRepository;

class ImportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $import;
	public function __construct(ImportUserRepository $import)
	{
		$this->import = $import;
	}
	public function index()
	{
		return view('Frontend::pages.import.data');
	}

	public function postImportUser(Request $request)
	{
		$file = $request->file('file');
		try {
			$data = $this->import->importUser($file);
		} catch (Exception $e) {
			return $e->getMessage();
		}
		return "done";
	}


}
