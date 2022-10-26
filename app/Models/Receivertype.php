<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class receivertype extends Sximo  {
	
	protected $table = 'receiver_types';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT receiver_types.* FROM receiver_types  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE receiver_types.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
