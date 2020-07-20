<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class Wz extends Gg
{
    public function index()
    {
		
		$xm = new xm();
		$head = $xm->head();
		
		
		$cs = $_POST;
		
		
		
		if(!empty($cs['wb'])){
			$wenb = Db::query("select * from index_text where index_text_name LIKE '%".$cs['wb']."%'");
		}else if(!empty($cs['sj'])){
			$wenb = Db::query("select * from index_text where index_text_time = '".$cs['sj']."'");
		}else{
			$wenb = Db::query("select * from index_text limit 0,12");
		}
		
		
		//$this->assign("head",$head);
		$this->assign("wenb",$wenb); 
		return $this->fetch();
	}
	
	
	
	public function index_wenzhang(){
		
		$xm = new xm();
		$head = $xm->head();
		
		$id = $_GET['id'];
		$xinxi = Db::query("select * from index_text where id =".$id);
		
		$this->assign("head",$head);
		$this->assign("xinxi",$xinxi);
		
		return $this->fetch();
		
	}
	
	
	
}