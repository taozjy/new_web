<?php
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use think\Session;
use \think\Request;
use app\admin\model\Ht;
use app\admin\BaseController;
class Latest extends BaseController
{
    
	
	
	
	public function latest_index(){
		
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		
		$latest_text = Db::query("select * from `index_latest` where id = 1");
		
		
		
		
		$text_sel = Db::query("select * from index_latest");
		//print_r($text_sel);
		$this->assign('text_sel',$text_sel);
		
		
		$this->assign('latest_title',$latest_text[0]['latest_title']);
		$this->assign('latest_text',$latest_text[0]['latest_text']);
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	public function latest_add(){
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$tit = input('post.tit/s');
		$wenben = input('post.wenben/s');
		
		
		
		
		
		$canshu = Db::execute("update `index_latest` set 
						latest_title ='".$tit."',
						latest_text = '".$wenben."' where id = '1' ");
							
		if($canshu){
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/latest/latest_index");
		}else{
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/latest/latest_index");
		}	
		
    
  }
	
	
	
	public function latest_add_p(){
		
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$qr_code_url = $_FILES["qr_code"];
		
		
		//上传二维码
			if ((($qr_code_url['type'] == "image/gif")||($qr_code_url['type'] == "image/jpeg")||($qr_code_url['type'] == "image/png"))
			&&($qr_code_url["size"] < 1000000)){
					if($qr_code_url["error"] > 0){
						//报错输出
						echo "Return Code: " . $qr_code_url["error"] . "<br />";
					}else{
						$upload_url = "./text/images/latest/".$qr_code_url['name'];
						$name = $qr_code_url['name'];
						$text = $qr_code_url['tmp_name'];
						//上传函数判断 上面为函数所需要参数
							if(move_uploaded_file($text,$upload_url)){
								
								$canshu = Db::execute("update `index_latest` set latest_img_url='".$upload_url."' where id = '1' ");
								
									$this->redirect($ht_text['yuming']."/admin.php?s=admin/latest/latest_index");
							}else{
									
									$this->redirect($ht_text['yuming']."/admin.php?s=admin/latest/latest_index");
							}	
					}	
				}else{
					//二维码上传失败
					$this->redirect($ht_text['yuming']."/admin.php?s=admin/latest/latest_index");
			
				}
		
		
		
	}
	
	
	
	
	
}
