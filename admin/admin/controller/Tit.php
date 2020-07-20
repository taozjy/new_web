<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Tit extends BaseController
{
    public function index()
    {
		$ht = new ht();
		$user_se = $ht->sel_session();
		
		
		
		$head_text = Db::query("select * from head_title");
		
			$this->assign('head_text',$head_text);
			$this->assign('se',$user_se);
			return $this->fetch();
    }
	
	
	public function tou_update(){
		
		$ht = new ht();
		$user_se = $ht->sel_session();
		$ht_text = $ht->text();
		
		$nr = $_POST;
		
		
		$canshu = Db::execute("update `head_title` set hrefs='".$nr['url']."' where id = ".$nr['id']);
		
		
		$this->assign('se',$user_se);
		
		$this->success("成功",$ht_text['yuming']."/admin.php?s=admin/tit/index");
	}
	
	public function tit_add(){
		$ht = new ht();
		$user_se = $ht->sel_session();
		
		
		
		
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	public function tit_add_js(){
		$ht = new ht();
		$user_se = $ht->sel_session();
		$ht_text = $ht->text();
		$cs = $_POST;
		
		$type = Db::execute("insert into head_title values('".$cs['id']."','".$cs['name']."','".$cs['types']."','".$cs['url']."','".$cs['controller']."')");
		
		
		if($type){
			$this->success("成功",$ht_text['yuming']."/admin.php?s=admin/tit/index");
		}else{
			$this->error("失败",$ht_text['yuming']."/admin.php?s=admin/tit/index");
		}
		
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	
	
	
	public function tit_sc(){
		$ht = new ht();
		$user_se = $ht->sel_session();
		$ht_text = $ht->text();
		$id = $_GET['id'];
		
		$type = Db::execute("DELETE FROM `head_title` WHERE id = ".$id);
		
		if($type){
			$this->success("成功",$ht_text['yuming']."/admin.php?s=admin/tit/index");
		}else{
			$this->error("失败",$ht_text['yuming']."/admin.php?s=admin/tit/index");
		}
		
		$this->assign('se',$user_se);
		return $this->fetch();
		
	}
	
	
	
	
	
}
