<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class magazineissue extends Sximo  {
	
	protected $table = 'issue';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT issue.* FROM issue  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE issue.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
