<?php
namespace app\admin\Controller;
use think\Db;
use think\Controller;
use think\Session;
use app\admin\model\Ht;
use app\admin\BaseController;
class Textwb extends BaseController
{
	
	public function text_index(){
		
		
		
		$ht = new ht(); 
		$user_se = $ht->sel_session();
		
		
		$fy_cs = 8;
		$fy_xh = array();
		$text_math = Db::query("select count(id) from index_text ");
		$text_math_lg = $text_math[0]['count(id)'];
		$fy = intval($text_math_lg/$fy_cs);
		for($a=0;$a<=$fy;$a++){
			$fy_xh[$a] = $a+1;
		}
		if(empty($_GET['fy_id'])){
			
			$text_sel = Db::query("select * from index_text limit 0,".$fy_cs);
		}else{
				$fy_id =$_GET['fy_id'];
				$select_math = $fy_id;	
				$select_left = ($select_math-1)*$fy_cs; 
				$select_right =$select_math * $fy_cs;	
				$text_sel = Db::query("select * from index_text limit ".$select_left.",".$select_right);
		}
		
		
		//print_r($text_sel);
		$this->assign('fy_xh',$fy_xh);
		$this->assign('text_sel',$text_sel);
		$this->assign('se',$user_se);
		
		return $this->fetch();
		
	}
	
	
	
	
	
	public function text_add(){
		
		
	//新增页面
	$ht = new ht(); 
	$user_se = $ht->sel_session();
	//新增页面
	
	
	
	$this->assign('se',$user_se);
	return $this->fetch();
		
		
	}
	
	
	
	
	
	public function text_add_js(){
		
		//处理新增信息
		//tit标题 times文章时间 photo图片路径可空 wenben文章内容
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$tit = $_POST['tit'];
		$times = $_POST['times'];
		// $photo = $_POST['photo'];
		$wenben = $_POST['wenben'];
		$photo = null;
		
		Db::execute("INSERT INTO `index_text` (`id`, `index_text_name`, `index_text_photo_url`, `index_text_text`,`index_text_time`) VALUES (NULL, '".$tit."', '".$photo."', '".$wenben."','".$times."')");
		
		
		//返回
		$this->redirect($ht_text['yuming']."/admin.php?s=admin/textwb/text_index");
	}
	
	
	
	public function text_delete_js(){
		
		
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
	
	
	
	
	public function update_textwb(){
		
		$id = input("get.id");
		$ht = new ht();
		$user_se = $ht->sel_session();
		
		$text = Db::query("select * from index_text where id = ".$id);
		
		

		//print_r($text);

		$this->assign('se',$user_se);
		$this->assign('text',$text);
		return $this->fetch();
		
		
	}
	
	
	public function update_textwbs(){
		
		//处理新增信息
		//tit标题 times文章时间 photo图片路径可空 wenben文章内容
		
		$ht = new ht();
		$ht_text = $ht->text();
		
		$id = $_POST['id'];
		$tit = $_POST['tit'];
		$times = $_POST['times'];
		// $photo = $_POST['photo'];
		$wenben = $_POST['wenben'];
		
		
		
		$xiugai = Db::execute("update `index_text` set 
		index_text_text = '".$wenben."', 
		index_text_name = '".$tit."',
		index_text_time = '".$times."' where id = ".$id);
		
		
		if($xiugai){
			//返回
			$this->redirect($ht_text['yuming']."/admin.php?s=admin/textwb/update_textwb&id=".$id);
		}else{
			echo "修改失败";
		}
		
		
		
	}
	
	
}