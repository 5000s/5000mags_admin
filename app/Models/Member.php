<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class member extends Sximo  {

	protected $table = 'members';
	protected $primaryKey = 'id';
    protected $dates = ["start_date"];

	public function __construct() {
		parent::__construct();

	}

	public static function querySelect(  ){

		return " SELECT members.* FROM members ";
	}

	public static function queryWhere(  ){

		return " WHERE members.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}


}
