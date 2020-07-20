<?php
namespace app\admin;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
class BaseController extends Controller
{
	
	
	public function __construct(){

		parent::__construct();
		$ht = new ht();
		$ht_text = $ht->text();
		$user_name = Session::get('user_name');	
		if(empty($user_name)){

			$this->error('用户已退出',$ht_text['yuming']."/admin.php");
			
		}
	}
	
	
}