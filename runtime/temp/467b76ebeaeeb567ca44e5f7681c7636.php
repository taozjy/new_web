<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"E:\phpstudy\WWW\tpfive/application/index\view\index\index.html";i:1593418290;s:53:"E:\phpstudy\WWW\tpfive\application\index\view\mb.html";i:1593403057;s:32:"application/index/view/head.html";i:1593498773;s:32:"application/index/view/foot.html";i:1593418610;}*/ ?>
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
			<div class="layui-row bje">
				<div class="layui-carousel"  id="lb">
					<div carousel-item>
						<?php if(is_array($banner_text) || $banner_text instanceof \think\Collection || $banner_text instanceof \think\Paginator): $i = 0; $__LIST__ = $banner_text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banners): $mod = ($i % 2 );++$i;?>
						<div ><a href="<?php echo $banners['hrefs']; ?>"><img  width="100%" height="100%" src="<?php echo $banners['url']; ?>"/><!-- style="  background:url(<?php echo $banners['url']; ?>) no-repeat content-box 100%; " --></a></div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="layui-container">
		
			<div class="layui-row ">
					<div class="layui-col-md12 layui-col-xs hg1000">
						<div class="layui-col-md12 layui-col-xs jz sx20">
							<h2 class="layui-col-md3 layui-col-xs zt jz">公司动态</h2>
						</div>
						<div class="layui-col-md12">&nbsp;</div>
						<?php if(is_array($latest_texts) || $latest_texts instanceof \think\Collection || $latest_texts instanceof \think\Paginator): $i = 0; $__LIST__ = $latest_texts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$latest_texts): $mod = ($i % 2 );++$i;?>
						<div style="margin-bottom:20px;" class="layui-col-md6 index_wz zt20 slh"><?php echo $latest_texts['latest_text']; ?></div>
					
						<div class="layui-col-md5 layui-col-md-offset1  jz hg30"><img width="100%" height="100%" src="<?php echo $latest_texts['latest_img_url']; ?>"></div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						
						<div class="layui-col-md12" style="height:50px;"></div>
						
						<div class="layui-col-md12 jz sx20">
							<h2 class="layui-col-md2 zt20"><a class="jz layui-btn zt20" href="./index.php?s=index/index/wz_q" >查看详情</a></h2>
						</div>
					</div>
					
					<div class="layui-col-md12 layui-col-xs12" style="height:50px;"></div>
					
					
				<div class="layui-col-md12 layui-col-xs12">
						<div class="layui-col-md12 jz">
							<h2 class="layui-col-md3 zt jz">文章动态</h2>
						</div>
						<div class="layui-col-md12">&nbsp;</div>
						<ul class="layui-col-md12 ">
									<?php if(is_array($text_text) || $text_text instanceof \think\Collection || $text_text instanceof \think\Paginator): $k = 0;$__LIST__ = is_array($text_text) ? array_slice($text_text,0,7, true) : $text_text->slice(0,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$texts): $mod = ($k % 2 );++$k;if($k%2==1): ?>
											<li  class="layui-col-md12  bjd2 wbpd">
												<a class="layui-col-md12 hz zt20 pdsx " href="index.php?s=index/index/index_wenzhang&id=<?php echo $texts['id']; ?>" >
													<div class="layui-col-md8  " ><h3><?php echo $texts['index_text_name']; ?></h3></div>
													<div class="layui-col-md4 j_right  " ><?php echo $texts['index_text_time']; ?></div>
												</a>
											</li>
											<?php else: ?>
											<li  class="layui-col-md12 bje wbpd">
												<a class="layui-col-md12 hz zt20 pdsx " href="index.php?s=index/index/index_wenzhang&id=<?php echo $texts['id']; ?>" >
													<div class="layui-col-md8" ><h3><?php echo $texts['index_text_name']; ?></h3></div>
													<div class="layui-col-md4 j_right" ><?php echo $texts['index_text_time']; ?></div>
												</a>
											</li>
											<?php endif; ?>
											<li class="layui-col-md12">&nbsp;</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						
						<div class="layui-col-md12 jz"><a class="layui-btn zt20" href="./index.php?s=index/index/wz_q">查看更多</a></div>
						
				</div>
				
				
				<div class="layui-col-md12 layui-col-xs12" style="height:50px;"></div>
				<div class="layui-col-md12 layui-col-xs12">
					<div class="layui-col-md12 jz">
						<h2 class="layui-col-md3 jz zt">产品展示</h2>
						
					</div>
					
					<div class="layui-col-md12" style="height:20px;"></div>
					<div class="layui-row layui-col-space30">
						<?php if(is_array($product_text) || $product_text instanceof \think\Collection || $product_text instanceof \think\Paginator): $i = 0; $__LIST__ = $product_text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_text): $mod = ($i % 2 );++$i;?>	
							<div class="layui-col-md4 zt20 ">
								<div class="layui-col-md12 cp_xg">
									<a style="cursor:pointer; text-decoration:none; " href="index.php?s=index/index/index_chanpin&id=<?php echo $product_text['id']; ?>" >
										<div style="height: 300px;class="layui-col-md12">
											<?php if($product_text['photo_url'] == null): ?>
												暂无产品图片
											<?php else: ?>
												<img width="100%" height="100%" src="<?php echo $product_text['photo_url']; ?>" >
											<?php endif; ?>
										</div>
										
										<div class="layui-col-md12 jz pdsx"><?php echo $product_text['product_name']; ?></div>
										<div class="layui-col-md12 jz pdsx"><?php echo $product_text['time']; ?></div>
										<div style="height: 100px;" class="layui-col-md12 wbpd"><?php echo $product_text['product_text']; ?></div>
									</a>
								</div>
							</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					
					
					<div class="layui-col-md12" style="height:50px;"></div>
					<div class="layui-col-md12 jz"><a class="layui-btn zt20" href="./index.php?s=index/Nr/cp">查看更多</a></div>
				</div>
				
				
				<div class="layui-col-md12 layui-col-xs12" style="height:50px;"></div>
			
				<div class="layui-col-md12 layui-col-xs12">
						<div class="layui-col-md12 jz">
							<h2 class="layui-col-md3 jz zt">网站留言</h2>
						</div>
						
						<div style="margin-top:10px;" class="layui-col-md12 jz">
							如果文章跟产品哪里有错误请留言指证，我们会尽快下架！
						</div>
						<div class="layui-col-md12">
								<div class="layui-col-md12" style="height:50px;"></div>
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
