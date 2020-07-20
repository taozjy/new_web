<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class Gg extends controller
{
	public function __construct (){
		parent::__construct();
		header("Access-Control-Allow-Origin:*");
		$xm = new xm();
		$head = $xm->head();
		$food =$xm->food();
		$this->assign("head",$head);
		$this->assign("food",$food);
	}
	
	
    
	
	
	
	
	
	
}
