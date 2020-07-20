<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Select extends BaseController
{
    public function index()
    {
		$ht = new ht();
		$user_se = $ht->sel_session();
		
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
		
		
		
		
		
		$this->assign('se',$user_se);
		
		return $this->fetch();
    }
	
	
	
	
	
	
}
