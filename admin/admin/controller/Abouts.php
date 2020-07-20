<?php
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Abouts extends BaseController
{
	
	public function abouts_index(){
		
		
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		
		
		
		$text_sel = Db::query("select * from index_bottom");
		//print_r($text_sel);
		$this->assign('text_sel',$text_sel);
		$this->assign('se',$user_se);
		
		return $this->fetch();
		
	}
	
	
	
	public function abouts_update(){
		
		//处理新增信息
		//tit标题 times文章时间 photo图片路径可空 wenben文章内容
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$qq = $_POST['qq'];
		$address = $_POST['address'];
		$number = $_POST['number'];
		$photo = $_POST['photo'];
		
		//修改
		$canshu = Db::execute("update `index_bottom` set 
						qq_text ='".$qq."',
						address = '".$address."',
						number = '".$number."',
						photo = '".$photo."' where id = '1' ");
							
		if($canshu){
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/abouts/abouts_index");
		}else{
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/abouts/abouts_index");
		}			
	
	}
	
	
	
	
	
	public function abouts_update_code(){
		$ht = new ht();
		$ht_text = $ht->text();
		
		$qr_code_url = $_FILES["qr_code"];
		
		
		//上传二维码
			if ((($qr_code_url['type'] == "image/gif")||($qr_code_url['type'] == "image/jpeg")||($qr_code_url['type'] == "image/jpeg"))
			&&($qr_code_url["size"] < 1000000)){
					if($qr_code_url["error"] > 0){
						//报错输出
						echo "Return Code: " . $qr_code_url["error"] . "<br />";
					}else{
						$upload_url = "./text/images/abouts/".$qr_code_url['name'];
						$name = $qr_code_url['name'];
						$text = $qr_code_url['tmp_name'];
						//上传函数判断 上面为函数所需要参数
							if(move_uploaded_file($text,$upload_url)){
								
								$canshu = Db::execute("update `index_bottom` set qr_code_url='".$upload_url."' where id = '1' ");
								
									$this->redirect($ht_text['yuming']."/admin.php?s=admin/abouts/abouts_index");
							}else{
									
									$this->redirect($ht_text['yuming']."/admin.php?s=admin/abouts/abouts_index");
							}	
					}	
				}else{
					//二维码上传失败
					$this->redirect($ht_text['yuming']."/admin.php?s=admin/abouts/abouts_index");
			
				}
			
	}
	
	
	
	
	public function About_us_delete_js(){
		
		
		$id = $_GET['id'];
		
		
		$ht = new ht();
		$ht_text = $ht->text();
		//删除接收选项
		
		
		
			$text = Db::query("select * from `index_text` where id = ".$id);
			
			if($text){
				$type = Db::execute("DELETE FROM `index_text` WHERE id = ".$id);
			}else{
				//失败跳回
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/textwb/text_index");
			}
		
		
			
			if($type){
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/textwb/text_index");
			}else{
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/textwb/text_index");
			}
		
		
		
	}
	
	
	// public function 
	
	
	
	
	
	
	
	
	
}