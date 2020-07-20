<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"E:\phpstudy\WWW\tpfive/application/index\view\ss\index.html";i:1593488619;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593498773;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
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
								<div  class="layui-col-md12">
									<div class="layui-col-md10 pd15">
										<form method="post" action="index.php?s=index/Ss/index">
											<div>
												<div>请输入您要搜索的文章或者作品题目</div>
												<div><input type="text" name="names" ></div>
												
												<div>请输入您要搜索的文章或者作品题目</div>
												<div><input type="date" name="sj" ></div>
												<div style="margin-top:10px;">
													<input class="layui-btn" type="submit" value="提交">
												</div>
											</div>
										</form>
									</div>	
										
										
										<?php if(!empty($names)||!empty($cp)): ?>
										<div class="layui-col-md11 layui-col-md-offset1">
											<div class="layui-tab">
											  <ul class="layui-tab-title">
												<li class="layui-this">文章搜索显示内容</li>
												<li>产品搜索显示内容</li>
											  </ul>
											  <div class="layui-tab-content">
												<div class="layui-tab-item layui-show">
													<div class="layui-col-md12">
													
														<div class="layui-col-md6">名称</div>
														<div class="layui-col-md6">时间</div>
												
													</div>
													<div class="layui-col-md12 ">&nbsp;</div>
													
													<?php if(is_array($names) || $names instanceof \think\Collection || $names instanceof \think\Paginator): $i = 0; $__LIST__ = $names;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nrs): $mod = ($i % 2 );++$i;?>
														<div class="layui-col-md12">
															<a href="./index.php?s=index/index/index_wenzhang&id=<?php echo $nrs['id']; ?>" >
																<div class="layui-col-md6"><?php echo $nrs['index_text_name']; ?></div>
																<div class="layui-col-md6"><?php echo $nrs['index_text_time']; ?></div>
															</a>	
														</div>
														<div class="layui-col-md12 ">&nbsp;</div>
													<?php endforeach; endif; else: echo "" ;endif; ?>
						
												</div>
												
												
												<div class="layui-tab-item">
													
													<div class="layui-col-md12 ">
														
														<div class="layui-col-md4">名称</div>
														<div class="layui-col-md4">产品图片</div>
														<div class="layui-col-md4">时间</div>
											
													</div>
													<div class="layui-col-md12 ">&nbsp;</div>
													
													<?php if(is_array($cp) || $cp instanceof \think\Collection || $cp instanceof \think\Paginator): $i = 0; $__LIST__ = $cp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cps): $mod = ($i % 2 );++$i;?>
														<div class="layui-col-md12 ">
															<a href="./index.php?s=index/index/index_chanpin&id=<?php echo $cps['id']; ?>" >
																<div class="layui-col-md4"><?php echo $cps['product_name']; ?></div>
																<div class="layui-col-md4"><img style="width: 100px; height: 100px;" src='<?php echo $cps['photo_url']; ?>'/></div>
																<div class="layui-col-md4"><?php echo $cps['time']; ?></div>
															</a>
														</div>
														<div class="layui-col-md12 ">&nbsp;</div>
													<?php endforeach; endif; else: echo "" ;endif; ?>
													
													
												</div>
											  </div>
											</div>
											 
											<script>
											//注意：选项卡 依赖 element 模块，否则无法进行功能性操作
											layui.use('element', function(){
											  var element = layui.element;
											  
											  //…
											});
											</script>
												  
										</div>
										<?php else: ?>
										<div class="layui-col-md9 layui-col-md-offset1"><?php echo $wenben; ?></div>
										<?php endif; ?>
										
										
										
										
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
