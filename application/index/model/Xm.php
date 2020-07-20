<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Xm extends Model{
	
	
	
	
	public function head(){
		
		$see_text =	Db::query("select * from head_title where type = 1");
		return $see_text;
		
	}
	
	
	public function food(){
		$food = Db::query("select * from index_bottom");
		return $food[0];
	}
	
	
}






