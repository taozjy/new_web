<?php
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Product extends BaseController
{
    public function product_index()
    {
		
		
		// phpinfo();
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		
		
		$product_sel = Db::query("select * from index_product");
		// echo count($product_sel);
		$this->assign('product_sel',$product_sel);
		
		$this->assign('se',$user_se);
		return $this->fetch();
		
    }
	
	
	public function product_add(){
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		$this->assign('se',$user_se);
		return $this->fetch();
		
		
	}
	
	public function product_add_js(){
		
		//处理新增信息
		//tit产品名称 times文章时间 photo图片路径可空 wenben文章内容
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$tit = $_POST['tit'];
		$times = $_POST['times'];
		$photo = $_FILES['photo'];
		$wenben = $_POST['wenben'];
		
		//是否上传图片判断
		if(!$photo['error']=="0"){
			Db::execute("INSERT INTO `index_product` (`id`, `photo_url`, `product_text`, `time`,`product_name`) VALUES (NULL, '', '".$wenben."', '".$times."','".$tit."')");
		}else{
			
			
			if ((($photo['type'] == "image/gif")|| ($photo['type'] == "image/jpeg")||($photo['type'] == "image/jpeg"))
			&&($photo["size"] < 1000000)){
				
					
						$upload_url = "./text/images/product/".$photo['name'];
						$name = $photo['name'];
						$text = $photo['tmp_name'];
							if(move_uploaded_file($text,$upload_url)){
								//插入
								Db::execute("INSERT INTO `index_product` (`id`, `photo_url`, `product_text`, `time`,`product_name`) VALUES (NULL, '".$upload_url."', '".$wenben."', '".$times."','".$tit."')");
								//$this->success("上传成功","banner/banner_add_false");
								$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
							}else{
								//$this->error("失败","banner/banner_add_false");
								$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_add");
							}	
					
			}else{
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_add");
				
			}
				
		}
		//返回
		$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
		
		
	}
	
	public function product_detele(){
		
		
		$id = $_GET['id'];
		
		
		$ht = new ht();
		$ht_text = $ht->text();
		//删除接收选项
		
		
			$text = Db::query("select * from `index_product` where id = ".$id);
			
			if($text){
				$type = Db::execute("DELETE FROM `index_product` WHERE id = ".$id);
			}else{
				//失败跳回
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
			}
		
			if($type){
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
			}else{
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
			}
		
	}
	
	
	
	public function product_update(){
		
		$id = $_GET['id'];
		
		
		$ht = new ht();
		$user_se = $ht->sel_session();
		
		
		
		$text = Db::query("select * from index_product where id = ".$id);
		
		
		
		
		$this->assign('text',$text);
		$this->assign('se',$user_se);
		return $this->fetch();
	}
	
	
	public function product_updates(){
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		
			$id = $_POST['id'];
			$tit = $_POST['tit'];
			$times = $_POST['times'];
			// $photo = $_POST['photo'];
			$wenben = $_POST['wenben'];
			
			
			
			$text = Db::execute("update `index_product` set 
			product_text = '".$wenben."', 
			time = '".$times."',
			product_name = '".$tit."' where id = ".$id);
			
			
		
			if($text){
				$this->redirect($ht_text['yuming']."/admin.php?s=admin/product/product_index");
			}else{
				echo "修改失败";
			}
		
	}
	
	
	
}
