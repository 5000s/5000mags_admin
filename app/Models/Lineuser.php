<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lineuser extends Sximo  {
	
	protected $table = 'line_user';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT line_user.* FROM line_user  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE line_user.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
