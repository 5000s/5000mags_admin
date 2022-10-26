<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Receivermember extends Sximo  {

	protected $table = 'member_giver';
	protected $primaryKey = 'id';

    protected $dates = ['start_date','end_date'];


    public function __construct() {
		parent::__construct();

	}

	public static function querySelect(  ){

		return "  SELECT member_giver.* FROM member_giver  ";
	}

	public static function queryWhere(  ){

		return "  WHERE member_giver.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}


}
