<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Atkorders;
use App\Models\Covidcases;
use App\Models\Membermag;
use App\Models\Pcrorders;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();

        $this->data = array(
            'pageTitle' =>  $this->config['cnf_appname'],
            'pageNote'  =>  'Welcome to Dashboard',

        );
	}

	public function index( Request $request )
	{

	    $this->data["active"] = 0;
	    $this->data["new_month"] = 0;
	    $this->data["expire"] = 0;
	    $this->data["expire_month"] = 0;


        $start = new Carbon('first day of last month');
        $end = new Carbon('last day of last month');

        $member_active = membermag::where("new_status","Active")->get();
        $this->data["active"] = count($member_active);

        $member_new_month = membermag::where("start_date",">",$start)->get();
        $this->data["new_month"] = count($member_new_month);

        $expire = membermag::where("new_status","!=","Active")->get();
        $this->data["expire"] = count($expire);

        $expire_month = membermag::where("end_date","<=",$end)->where("end_date",">=",$start)->get();
        $this->data["expire_month"] = count($expire_month);


		return view('dashboard.index',$this->data);
	}





}
