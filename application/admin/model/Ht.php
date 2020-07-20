<?php
namespace app\admin\model;
use think\Model;
use think\Controller;
use think\Session;
class Ht extends Model{
	
	
	
	
	public function sel_session(){
		$sessions = Session::get('user_name');
		
			if($sessions){
				return $sessions;
			}else{
				$ht_text = $this->text();
				echo $ht_text['yuming'];
				//$this->redirect($ht_text['yuming']."/admin.php");
			};
	}
	
	
	
	
	public function text(){
		
		$text_shuzu = array();
		
		$text_shuzu['yuming'] = "http://www.tpfive.com";
		
		return $text_shuzu;
		
	}
	
	
	
	
	
}






