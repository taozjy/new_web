<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"E:\phpstudy\WWW\tpfive/application/index\view\gsdt\index.html";i:1593416338;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593498773;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
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

			
<div class="layui-container">
	<div class="layui-row">
		<div class="layui-col-md12 hg1000">
			<div class="layui-col-md12  sx20">
				<h2 class="layui-col-md3 zt">公司动态</h2>
			</div>
			<div class="layui-col-md12">&nbsp;</div>
			<?php if(is_array($latest_texts) || $latest_texts instanceof \think\Collection || $latest_texts instanceof \think\Paginator): $i = 0; $__LIST__ = $latest_texts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$latest_texts): $mod = ($i % 2 );++$i;?>
			<div class="layui-col-md6 index_wz <zt20></zt20>"><?php echo $latest_texts['latest_text']; ?></div>
			<div class="layui-col-md5 layui-col-md-offset1  jz hg30"><img width="100%" height="100%" src="<?php echo $latest_texts['latest_img_url']; ?>"></div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
			<div class="layui-col-md12" style="height:50px;"></div>
			
				<?php if(is_array($about_cs) || $about_cs instanceof \think\Collection || $about_cs instanceof \think\Paginator): $i = 0; $__LIST__ = $about_cs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$about_css): $mod = ($i % 2 );++$i;?>
						<div class="layui-row layui-col-space20">
							<div class="layui-col-md3 gywm">
								<div class="gywm_icon" ><img class="gywm_icon" src='./text/images/ll.png'></div>
								<div class="zt20">网站访问次数</div>
								<div><?php echo $about_css['web_c']; ?></div>
							</div>
							<div class="layui-col-md3 gywm">
								
									<div class="gywm_icon" ><img class="gywm_icon" src='./text/images/wz.png'></div>
									<div class="zt20">文章数量</div>
									<div><?php echo $about_css['wz']; ?></div>
								
							</div>
							<div class="layui-col-md3 gywm">
								
									<div class="gywm_icon" ><img class="gywm_icon" src='./text/images/cp.png'></div>
									<div class="zt20">产品数量</div>
									<div><?php echo $about_css['cp']; ?></div>
								
							</div>
							<div class="layui-col-md3 gywm">
								
									<div class="gywm_icon" ><img class="gywm_icon" src='./text/images/dz.png'></div>
									<div class="zt20">点赞数量</div>
									<div><?php echo $about_css['dz']; ?></div>
								
							</div>
						</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>
		

		
	
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
