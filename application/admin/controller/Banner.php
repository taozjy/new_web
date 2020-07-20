<?php
namespace app\admin\Controller;
use think\Db;
use think\Session;
use think\Controller;
use app\admin\model\Ht;
use app\admin\BaseController;
class Banner extends BaseController
{
    public function select_banner(){
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		

		$banner_sel = Db::query("select * from index_banner");

		$this->assign('banner_sel',$banner_sel);

		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	
	
	
	
	
	
	public function banner_add_false(){
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	
	
	public function banner_add_true(){
		
		
		$sc = $_FILES["photo"];
		$url = $_POST['hrefs'];
		$xs = $_POST['xs'];
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		
		
		if ((($sc['type'] == "image/gif")|| ($sc['type'] == "image/jpeg")||($sc['type'] == "image/jpeg"))
		&&($sc["size"] < 1000000)){
			
				if($sc["error"] > 0){
					echo "Return Code: " . $sc["error"] . "<br />";
				}else{
					$upload_url = "./text/images/banner/".$sc['name'];
					$name = $sc['name'];
					$text = $sc['tmp_name'];
						if(move_uploaded_file($text,$upload_url)){
							//插入
							Db::execute("INSERT INTO `index_banner` (`id`, `url`, `hrefs`, `math`) VALUES (NULL, '".$upload_url."', '".$url."', '".$xs."')");
							//$this->success("上传成功","banner/banner_add_false");
							$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/select_banner");
						}else{
							//$this->error("失败","banner/banner_add_false");
							$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/banner_add_false");
						}	
				}
		}else{
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/banner_add_false");
			
		}
		
	}
	
	
	
	
	public function banner_sc(){
		
		
		$id = $_GET['id'];
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$text = Db::query("select * from `index_banner` where id = ".$id);
		
		if(unlink($text[0]['url'])){
			$type = Db::execute("DELETE FROM `index_banner` WHERE id = ".$id);
		}else{
			//失败跳回
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/select_banner");
		}
		
	
		
		if($type){
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/select_banner");
		}else{
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/banner/select_banner");
		}
		
	}
	
	
	
}
