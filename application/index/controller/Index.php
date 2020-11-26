<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class Index extends Controller
{
	public function cs(){
		echo "cs";
		exit();
	}
	
    public function index()
    {
		
		
		// phpinfo();
		// $xm = new xm();
		// $head = $xm->head();
		
		
		$banner_text = Db::query("select * from index_banner");
		
		$text_text = Db::query("select * from index_text");
		
		$bottom_text = Db::query("select * from index_bottom");
		
		$product_text = Db::query("select * from index_product order by id desc limit 0,6");
		
		$latest_texts = Db::query("select * from index_latest");
		
		$this->assign('latest_texts',$latest_texts);
		$this->assign("text_text",$text_text);
		$this->assign('banner_text',$banner_text);
		$this->assign('bottom_text',$bottom_text);
		$this->assign('product_text',$product_text);
		
		//$this->assign("head",$head);
		return $this->fetch();
		
    }
	
	
	public function head(){
		
		
		$head = Db::query("select * from head_title where type = 1");
		$head = json_encode($head);
		return $head;

		
	}
	
	public function bottom(){
		
		// header("Access-Control-Allow-Origin:*");
		
		$head = Db::query("select * from index_bottom");
		$head = json_encode($head);
		print_r($head);
		
	}
	
	
	
	
	
	
	
	public function index_wenzhang(){
		
		$xm = new xm();
		$head = $xm->head();
		
		$id = $_GET['id'];
		$xinxi = Db::query("select * from index_text where id =".$id);
		
		$this->assign("head",$head);
		$this->assign("xinxi",$xinxi);
		
		return $this->fetch();
		
	}
	
	public function index_chanpin(){
		
		$xm = new xm();
		$head = $xm->head();
		
		$id = $_GET['id'];
		$xinxi = Db::query("select * from index_product where id =".$id);
		$chanpin = Db::query("select * from index_product where id !='".$id."' ORDER BY RAND() limit 0,4");
		
		$this->assign("head",$head);
		$this->assign("xinxi",$xinxi);
		$this->assign("chanpin",$chanpin);
		
		return $this->fetch();
		
	}
	
	
	
	public function wz_q(){
		
		$xm = new xm();
		$head = $xm->head();
		
		
		$cs = $_POST;
		
		
		
		if(!empty($cs['wb'])){
			$wenb = Db::query("select * from index_text where index_text_name LIKE '%".$cs['wb']."%'");
		}else if(!empty($cs['sj'])){
			$wenb = Db::query("select * from index_text where index_text_time = '".$cs['sj']."'");
		}else{
			$wenb = Db::query("select * from index_text limit 0,12");
		}
		
		
		//$this->assign("head",$head);
		$this->assign("wenb",$wenb); 
		return $this->fetch();	
	}
	
	
	public function gywm(){
		
		
		
		
		
		return $this->fetch();
		
	}
	
	
	
	
	
	
}
