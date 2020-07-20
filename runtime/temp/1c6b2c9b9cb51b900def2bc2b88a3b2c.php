<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"E:\phpstudy\WWW\tpfive/application/index\view\index\wz_q.html";i:1593419919;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593486248;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
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
			<li class="layui-col-md1 layui-col-xs4 head_li "><a href="<?php echo $header['hrefs']; ?>" ><?php echo $header['name']; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="layui-row"> <hr/></div>
</div>

				
		<div class="layui-container">
			<div class="layui-row">
				
				<div class="layui-col-md12">&nbsp;</div>
				<div class="layui-col-md10 layui-col-md-offset1">
					说明：作品做多只能显示最近的十二个。可以使用搜索名称跟上传日期查找。
				</div>
				<div class="layui-col-md12">&nbsp;</div>
				<div class="layui-col-md10 layui-col-md-offset1" >
					<form action="./index.php?s=index/index/wz_q"  method="post">
						名称：<input type="text" name="wb" />
						时间：<input type="date"  name="sj" />
						<input class="layui-btn" type="submit" value="提交" />
					</form>
				</div>
				<div class="layui-col-md12">&nbsp;</div>
				
				
					<div class="layui-col-md12 hz" >
						<?php if(is_array($wenb) || $wenb instanceof \think\Collection || $wenb instanceof \think\Paginator): $i = 0; $__LIST__ = $wenb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wz): $mod = ($i % 2 );++$i;?>
						<a class="wzlist"  href="index.php?s=index/index/index_wenzhang&id=<?php echo $wz['id']; ?>">
								<div class="layui-col-md8 fl_h" >
									<span class="layui-badge-dot layui-bg-cyan wzlist" style="width:10px;height: 10px;"></span>
									<h1>&nbsp;<?php echo $wz['index_text_name']; ?></h1>
								</div>
								<div class="layui-col-md4 j_right " >
									<h3>发布时间:<?php echo $wz['index_text_time']; ?></h3>
								</div>
						</a>
						<div class="layui-col-md12">&nbsp;</div>
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
