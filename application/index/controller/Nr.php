<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class Nr extends Gg
{
    public function index()
    {
		
		
		// phpinfo();
	// 	$xm = new xm();
	// 	$head = $xm->head();
	// 	$latest_texts = Db::query("select * from index_latest");
		
	// 	$about_cs = Db::query('select * from about_as');
	// 	$wz_c = Db::query('select count(id) from index_text');
	// 	$cp_c = Db::query('select count(id) from index_product');
		
		
		
	// 	$about_cs[0]['web_c']++;
	// 	$type = Db::execute("update about_as set web_c ='".$about_cs[0]['web_c']."', wz='".$wz_c[0]['count(id)']."', cp='".$cp_c[0]['count(id)']."'  where id ='1'");
	// //echo $about_cs[0]['web_c'];
		
	// 	$about_cs = Db::query('select * from about_as');
		
	// 	$this->assign('about_cs',$about_cs);
	// 	$this->assign('latest_texts',$latest_texts);
	
	$xm = new xm();
	$head = $xm->head();
	
	$id = $_GET['id'];
	$xinxi = Db::query("select * from index_product where id =".$id);
	$chanpin = Db::query("select * from index_product where id !='".$id."' ORDER BY RAND() limit 0,4");
	
	$this->assign("head",$head);
	$this->assign("xinxi",$xinxi);
	$this->assign("chanpin",$chanpin);
	
	return $this->fetch();
	
		return $this->fetch();
		
    }
	
	
	public function about_user(){
		
		$name = $_GET['name'];
		$phone = $_GET['phone'];
		$text = $_GET['text'];
		
		$sj  = date("Y-m-d");
		$type = Db::execute("INSERT INTO about_user (`id`,`name`,`phone`,`text`,`time`) VALUES ('null','".$name."','".$phone."','".$text."','".$sj."')");
		
		$shuzu = array();
		if($type){
			$shuzu['type'] = '200';
			$shuzu['text'] = '留言成功';
		}else{
			$shuzu['type'] = '201';
			$shuzu['text'] = '留言失败请检查网络';
		}
		
		$shuzu  = json_encode($shuzu);
		print_r($shuzu);
	}
	
	
	public function cp(){
		
		$xm = new xm();
		$head = $xm->head();
		
		$cs = $_POST;
		
		
		
		if(!empty($cs['wb'])){
		//print_r($cs);
			$nr_cp = Db::query("select * from index_product where product_name LIKE '%".$cs['wb']."%'");
			
		}else if(!empty($cs['sj'])){
			
			$nr_cp = Db::query("select * from index_product where time = '".$cs['sj']."'");
			
		}else{
			
			$nr_cp = Db::query('select * from index_product order by id desc limit 0,6 ');
			
		}
		
		
		
		
		
		
		$this->assign('nr_cp',$nr_cp);
		
		return $this->fetch();
		
	}
	
	
	
	public function index_chanpin(){
		
		
		
	}
	
	
	
	
	
	
}
