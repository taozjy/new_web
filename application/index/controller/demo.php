<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Xm;
class demo extends Gg
{
    public function index()
    {
		
		// phpinfo();
			$xm = new xm();
			$head = $xm->head();
			$latest_texts = Db::query("select * from index_latest");
			
			$about_cs = Db::query('select * from about_as');
			$wz_c = Db::query('select count(id) from index_text');
			$cp_c = Db::query('select count(id) from index_product');
			
			
			
			$about_cs[0]['web_c']++;
			$type = Db::execute("update about_as set web_c ='".$about_cs[0]['web_c']."', wz='".$wz_c[0]['count(id)']."', cp='".$cp_c[0]['count(id)']."'  where id ='1'");
		//echo $about_cs[0]['web_c'];
			
			$about_cs = Db::query('select * from about_as');
			
			$this->assign('about_cs',$about_cs);
			$this->assign('latest_texts',$latest_texts);
			return $this->fetch();
		
		return $this->fetch();
	}
	
	
	
	public function select_nr(){
		
		
		
	}
	
	
	
}