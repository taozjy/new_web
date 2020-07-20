<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Ly extends BaseController
{
    public function index()
    {
			$ht = new ht(); 
			$user_se = $ht->sel_session();
			
			$nr = Db::table('about_user')->select();
			
			
			$this->assign('nr',$nr);
			$this->assign('se',$user_se);
			return $this->fetch();
    }
	
	
	
	public function del(){
		
		$id = $_GET['id'];
		$ht = new ht();
		$user_se = $ht->sel_session();
		$ht_text = $ht->text();
		
			$type = Db::execute("DELETE FROM `about_user` WHERE id = ".$id);
		
		
		if($type){
		
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/ly/index");
		}else{
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/ly/index");
		}
		
		
	}
	
	
	
	
	
	
	
}
