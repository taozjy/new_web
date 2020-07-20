<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"E:\phpstudy\WWW\tpfive/application/index\view\index\index_chanpin.html";i:1593494448;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593498773;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
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

		
		<div class="layui-container" >
			<div class="layui-row">
					<?php if(is_array($xinxi) || $xinxi instanceof \think\Collection || $xinxi instanceof \think\Paginator): $i = 0; $__LIST__ = $xinxi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($i % 2 );++$i;?>
					<div class="layui-col-md8" style="border-right: 1px solid #D2D2D2;" >
						<h1>产品名称:<?php echo $cp['product_name']; ?></h1>
						<div class="layui-col-md12">&nbsp;</div>
						<div class="layui-col-md6"><h3>产品发布时间:<?php echo $cp['time']; ?></h3></div>
						<div class="layui-col-md12">&nbsp;</div>
					
						<?php if($cp['photo_url'] == null): ?>
						<div style="width: 300px; height: 300px; display:flex; justify-content:center; align-items:center;">暂无图片</div>
						<?php else: ?>
						<div class="layui-col-md12 jz"><img style="width:600px; height:500px;" src="<?php echo $cp['photo_url']; ?>" /></div>
						<?php endif; ?>
					
						<div class="layui-col-md12">&nbsp;</div>
						
					
						<div style="font-size:24px;" class="layui-col-md12">产品说明:<?php echo $cp['product_text']; ?></div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="layui-col-md4 layui-col-xs12 zy20">
						<div class="layui-col-md12 layui-col-xs12"><h1>其他产品</h1></div>
						<div class="layui-col-md12 layui-col-xs12 jz ">
							<?php if(is_array($chanpin) || $chanpin instanceof \think\Collection || $chanpin instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($chanpin) ? array_slice($chanpin,0,4, true) : $chanpin->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qtcp): $mod = ($i % 2 );++$i;?>
							
								<div class="layui-col-md12 layui-col-xs12 ">&nbsp;</div>
									<a class="layui-col-xs12" href="index.php?s=index/index/index_chanpin&id=<?php echo $qtcp['id']; ?>">
										<div class="layui-col-md12 layui-col-xs12 jz_s">
											<img width="300px" height="180px" src="<?php echo $qtcp['photo_url']; ?>">
											<div><h2><?php echo $qtcp['product_name']; ?></h2></div>
										</div>
									</a>	
								<div class="layui-col-md12 layui-col-xs12">&nbsp;</div>
							
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
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
