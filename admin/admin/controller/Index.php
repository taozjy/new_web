<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
class Index extends controller
{
    public function index()
    {
		
			return $this->fetch();
    }
	
	
	
	public function index_yz(){
		
		
		$user = $_POST['user'];
		$password = $_POST['password'];
		//$captcha = $_POST['captcha'];
		$ht = new ht();
		$ht_text = $ht->text();
		
		$sel_text = DB::table("admin_user")->where('user',$user)->find();
// 		
		if( empty($sel_text) || md5($password) != $sel_text['password'] ){
				 $this->error('用户名或密码错误',$ht_text['yuming']."/admin.php");
		}
		
	
				
				if($sel_text&&md5($password) == $sel_text['password']){

					Session::set('user_name',$user);
					//$this->success("成功");
					$this->redirect($ht_text['yuming']."/admin.php?s=admin/index/sy");
				}else{

					//$this->error("失败","index/index");
					$this->redirect($ht_text['yuming']."/admin.php");
				}
		
		
			
			
		
		
	}
	
	
	
	public function sy(){
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		$user_name = Session::get('user_name');	
		$ht = new ht();
		$ht_text = $ht->text();
		if(empty($user_name)){

			$this->error('用户已退出',$ht_text['yuming']."/admin.php");
			
		}
		
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	//退出
	public function index_out(){
			
			
			$is_del  = Session::delete('user_name');
			
			$ht = new ht();
			$ht_text = $ht->text();
			// if($is_del){
					$this->success("成功",$ht_text['yuming']."/admin.php");
					// $this->redirect($ht_text['yuming']."/admin.php");
			// }
		
		
  }
	
	
	
	
}
