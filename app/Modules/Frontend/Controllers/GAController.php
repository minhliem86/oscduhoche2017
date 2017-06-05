<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\LaravelAnalytics\LaravelAnalytics;

class GAController extends Controller {

    protected $ga;

    public function __construct(LaravelAnalytics $ga){
        $this->ga = $ga;
    }

    public function index()
    {
        $rs = $this->ga->getVisitorsAndPageViews();
        dd($rs);
    }


}
