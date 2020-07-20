<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class Ss extends Gg
{
    public function index()
    {
		
		$nr = $_POST;
		if(!empty($nr['names'])){
			
			$text_names =Db::query("select * from index_text where index_text_name LIKE '%".$nr['names']."%'");
			$cp_name =Db::query("select * from index_product where product_name LIKE '".$nr['names']."%'");
			$this->assign('names',$text_names);
			$this->assign('cp',$cp_name);
			
		}
		
		if(!empty($nr['sj'])){
			$text_names =Db::query("select * from index_text where index_text_time = '".$nr['sj']."'");
			$cp_name =Db::query("select * from index_product where time = '".$nr['sj']."'");
			$this->assign('names',$text_names);
			$this->assign('cp',$cp_name);
		}
		
		$this->assign('wenben','没有查询到任何信息');
		
		return $this->fetch();
	}
	
	
	
	public function select_nr(){
		
		
		
	}
	
	
	
}