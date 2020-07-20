<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"E:\phpstudy\WWW\tpfive/application/index\view\gywm\index.html";i:1593493498;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593498773;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="text/css/layui.css">
		<link rel="stylesheet" href="text/qt.css">
		<script src="text/layui.js"></script>
		<script src="text/jquery.js"></script>
	</head>
	<body>
		
<div class="layui-container ">  
		<div class="layui-row ">
			<div class="layui-col-md12 layui-col-xs12 jz_logo"><div>logo</div></div>
			<!-- <div class="layui-col-md3 layui-col-sm3"><a href="#">登录</a></div>
			<div class="layui-col-md3 layui-col-sm3"><a href="#">注册</a></div> -->
		</div>
		<div class="layui-row"> <hr/></div>
		<ul class="layui-row">
			<?php if(is_array($head) || $head instanceof \think\Collection || $head instanceof \think\Paginator): $k = 0; $__LIST__ = $head;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$header): $mod = ($k % 2 );++$k;?>
			<li class="layui-col-md1 layui-col-xs4 head_li <?php if(\think\Request::instance()->controller() == $header['controller']): ?> layui-bg-gray <?php endif; ?>"><a href="<?php echo $header['hrefs']; ?>" ><?php echo $header['name']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="layui-row"> <hr/></div>
</div>

		
		<script type="text/javascript"></script src='text/map.js'>
		<script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=OfldXkI591GW281wpaUBSHES&services=&t=20190123111209"></script>
		
		<div class="layui-container">
		<div class="layui-col-md12" style="height:50px;"></div>
					
			<div class="layui-col-md12">
				
					<div class="layui-col-md12">
						<div id='allmap' style="width:100%; height:500px; ">
							
						</div>
					</div>
					<div class="layui-col-md12 ">
						
							<div class="layui-col-md12" style="height:50px;"></div>
							<div class="layui-col-md12 jz">
								<h2 class="layui-col-md3 jz zt20">网站留言</h2>
							</div>
							<div class="layui-col-md6 layui-col-md-offset3 hz ">
													
								<input class="wzly ip_a" placeholder='请输入您的名称' type="text">
							</div>
							
							<div class="layui-col-md12" style="height:10px;"></div>
							
							<div class="layui-col-md6 layui-col-md-offset3 hz ">
								<input class="wzly ip_b" placeholder='请输入您的联系方式(手机号)' type="text">
							</div>
							
							<div class="layui-col-md12" style="height:10px;"></div>
							
							<div class="layui-col-md6 layui-col-md-offset3 hz ">
												
								<textarea style="height:200px; color:black;" class="wzly ip_c" >
									
								</textarea>
							</div>
							
							<div class="layui-col-md12" style="height:10px;"></div>
							
							<div class="layui-col-md6 layui-col-md-offset3 layui-col-md-offset1 hg4">
								<input onclick="cs()" class="layui-input-inline layui-btn " type="submit">
							</div>
					</div>
			</div>
		
		<div class="layui-col-md12" style="height:50px;"></div>
		</div>
		
		<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(114.552046,38.037161), 18);  // 初始化地图,设置中心点坐标和地图级别\
			var marker1 = new BMap.Marker(new BMap.Point(114.552046,38.037161));  // 创建标注
			map.addOverlay(marker1);              // 将标注添加到地图中
			//   //向地图中添加缩放控件
			var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
			map.addControl(ctrl_nav);
			//添加地图类型控件
			map.addControl(new BMap.MapTypeControl({
				mapTypes:[
		            BMAP_NORMAL_MAP,
		            BMAP_HYBRID_MAP
		        ]}));	  
			map.setCurrentCity("石家庄");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
			map.enableScrollWheelZoom();//启用地图滚轮放大缩小
			map.enableKeyboard();//启用键盘上下左右键移动地
			
			
			
				//   var map = new BMap.Map("allmap");
				//   map.centerAndZoom(new BMap.Point(34.8059930507,113.6671419919), 18);
				//   var marker1 = new BMap.Marker(new BMap.Point(34.8059930507,113.6671419919));  // 创建标注
				//   map.addOverlay(marker1);              // 将标注添加到地图中
				//   //marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画				
				//   //创建信息窗口 
				 
				//   //marker1.addEventListener("click", function(){this.openInfoWindow(infoWindow1);});	
				//   //向地图中添加缩放控件
			 // var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
			 // map.addControl(ctrl_nav);
			 //      //向地图中添加缩略图控件
			 // var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
			 // map.addControl(ctrl_ove);
			 //      //向地图中添加比例尺控件
			 // var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
			 // map.addControl(ctrl_sca);
			 
			 // map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
			 //        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
			 //        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
			 //        map.enableKeyboard();//启用键盘上下左右键移动地	
			
			
		</script>
		
		
	
			<!-- 	<div class="layui-col-md12" style="height: 150px;"></div> -->
				<!-- style="position:fixed; bottom: 0px; background-color: white; " -->
				
					<hr>
					<div class="layui-container">
						
						<div class="layui-row" style="display:flex;  align-items: center; flex-wrap: wrap;">
							<div class="layui-col-md9  jz  layui-col-xs12 ">
								<div id="qq" >QQ:<?php echo $food['qq_text']; ?></div>
								<div id="numbers">手机:<?php echo $food['photo']; ?></div>
								<div id="address" >公司地址:<?php echo $food['address']; ?></div>
								<div>备案号:<?php echo $food['number']; ?></div>
							</div>
							<div class="layui-col-md2 layui-col-xs12  gywm">
								
								<img style="width: 100px; height: 100px;" id="codes" src="<?php echo $food['qr_code_url']; ?>" />	
								<div >微信二维码</div>
							</div>
						</div>
					</div>
				
			
				
				
	
		
		
		
		
		<script>
		layui.use('carousel', function(){
		  var carousel = layui.carousel;
		  //建造实例
		  carousel.render({
			elem: '#lb',
			width: '100%' ,//设置容器宽度
			height:'400px',
			arrow: 'always' //始终显示箭头
			//,anim: 'updown' //切换动画方式
		  });
		});
	
					function cs(){
						
						var name = $('.ip_a').val();
						var phone = $('.ip_b').val();
						var text = $('.ip_c').val();
						var cs;
						
						
						if(name==''&&phone==''&&text==''){
								cs =1;
						}else{
							cs = 10;
						}
						
								switch(cs){
									case 1:
										layer.msg('所有内容不能为空');
									break;
									case 10:
											$.ajax({
													type:'get',
													url:"index.php?s=index/Nr/about_user",
													dataType:'json',
													data:{
														name:name,
														phone:phone,
														text:text,
													},
													success:function(text){
															console.log(text);
															if(text.type=='200'){
																layer.msg(text.text);
															}else{
																layer.msg(text.text);
															}
													}
											})
										break;
								}
					}
					
				</script>
				
		
	
	</body>
</html>
