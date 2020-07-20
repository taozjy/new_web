<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"E:\phpstudy\WWW\tpfive/admin/admin\view\select\index.html";i:1593488238;s:26:"admin/admin/view/head.html";i:1578118507;s:26:"admin/admin/view/left.html";i:1593421531;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="text/css/layui.css">
		<link rel="stylesheet" href="text/zd.css">
		<script src="text/layui.js"></script>
		<script src="text/jquery.js"></script>
	</head>
	<body>
		
		
	<div style="height: 80px; border-bottom: 1px solid #000;" class="layui-row">
		<div class="layui-col-md10 layui-col-md-offset1">
			<div  style="background:url(text/images/logos.jpg) center center no-repeat; background-size:50%; height:80px;" class="layui-col-md2"></div>
			<div style="height:80px; display: flex; justify-content: center; align-items: center;" class="layui-col-md2 layui-col-md-offset8">
				欢迎登陆<?php echo $se; ?>&nbsp<a href="admin.php?s=admin/index/index_out">退出</a>
			</div>
			
		</div>
	</div>	


		
		
		
		<div class="layui-row">
				<div  class="layui-col-md12">
					
		<ul style="border-right:1px solid #000; " class="layui-col-md2 sz_g" >
			<li  style="
			width: 100%; 
			height:4rem; 
			line-height:4rem; 
			text-align: center; 
			<?php if(\think\Request::instance()->controller() == 'Banner'): ?> 
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/banner/select_banner">banner图上传</a>
			</li>
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center; 
			<?php if(\think\Request::instance()->controller() == 'Textwb'): ?> 
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/textwb/text_index">文章列表</a>
			</li>
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Product'): ?> 
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/product/product_index">作品列表</a>
			</li>
			<!-- <li style="width: 100%; height:4rem; line-height:4rem; text-align: center;">
				标题设置
			</li> -->
			
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Ly'): ?>
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/ly/index">
					留言查看
				</a>
			</li>
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Latest'): ?> 
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/latest/latest_index">
					公司最新动态
				</a>
			</li>
			
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Abouts'): ?> 
			background-color:#f3f3f3<?php endif; ?>">
				<a href="admin.php?s=admin/abouts/abouts_index">
				底部
				关于我们
				设置
				</a>
			</li>
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Tit'): ?> 
			background-color:#f3f3f3<?php endif; ?>" >
				<a href="admin.php?s=admin/tit/index">
					标题设置
				</a>
			</li>
			
			<li style="width: 100%; height:4rem; line-height:4rem; text-align: center;
			<?php if(\think\Request::instance()->controller() == 'Select'): ?> 
			background-color:#f3f3f3<?php endif; ?>" >
				<a href="admin.php?s=admin/select/index">
					文章跟作品查询
				</a>
			</li>
			
			
		</ul>
		
		<script>
			
			var a = document.getElementsByClassName('sz_g')[0];
			var b = document.documentElement.clientHeight
			
			var text = (b-50)+"px";

			
			a.style.height = text;
			
				
			
		</script>

					<div class="layui-col-md10 pd15">
						<form method="post" action="admin.php?s=admin/select/index">
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
						<div class="layui-col-md8 layui-col-md-offset1">
							<div class="layui-tab">
							  <ul class="layui-tab-title">
							    <li class="layui-this">文章搜索显示内容</li>
							    <li>产品搜索显示内容</li>
							  </ul>
							  <div class="layui-tab-content">
							    <div class="layui-tab-item layui-show">
									<div class="layui-col-md12 ">
										<div class="layui-col-md2">序号</div>
										<div class="layui-col-md2">名称</div>
										<div class="layui-col-md2">时间</div>
										<div class="layui-col-md3">操作选项</div>
									</div>
									<div class="layui-col-md12 ">&nbsp;</div>
									
									<?php if(is_array($names) || $names instanceof \think\Collection || $names instanceof \think\Paginator): $i = 0; $__LIST__ = $names;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nrs): $mod = ($i % 2 );++$i;?>
										<div class="layui-col-md12 ">
											<div class="layui-col-md2"><?php echo $nrs['id']; ?></div>
											<div class="layui-col-md2"><?php echo $nrs['index_text_name']; ?></div>
											<div class="layui-col-md2"><?php echo $nrs['index_text_time']; ?></div>
											<div class="layui-col-md2">
												<a class="layui-btn" href="admin.php?s=admin/textwb/update_textwb&id=<?php echo $nrs['id']; ?>">修改</a>
												&nbsp;
												<a class="layui-btn" href="admin.php?s=admin/textwb/text_delete_js&id=<?php echo $nrs['id']; ?>">删除</a></li>
											</div>
										</div>
										<div class="layui-col-md1">&nbsp;</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>

								</div>
								
								
							    <div class="layui-tab-item">
									
									<div class="layui-col-md12 ">
										<div class="layui-col-md2">序号</div>
										<div class="layui-col-md2">名称</div>
										<div class="layui-col-md2">产品图片</div>
										<div class="layui-col-md2">时间</div>
										<div class="layui-col-md3">操作选项</div>
									</div>
									<div class="layui-col-md12 layui-col-md-offset1">&nbsp;</div>
									
									<?php if(is_array($cp) || $cp instanceof \think\Collection || $cp instanceof \think\Paginator): $i = 0; $__LIST__ = $cp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cps): $mod = ($i % 2 );++$i;?>
										<div class="layui-col-md12 layui-col-md-offset1">
											<div class="layui-col-md2"><?php echo $cps['id']; ?></div>
											<div class="layui-col-md2"><?php echo $cps['product_name']; ?></div>
											<div class="layui-col-md2"><img style="width: 100px; height: 100px;" src='<?php echo $cps['photo_url']; ?>'/></div>
											<div class="layui-col-md2"><?php echo $cps['time']; ?></div>
											<div class="layui-col-md2">
												<a class="layui-btn" href="admin.php?s=admin/product/product_update&id=<?php echo $cps['id']; ?>">修改</a>
												<a class="layui-btn" href="admin.php?s=admin/product/product_detele&id=<?php echo $cps['id']; ?>">删除</a>
											</div>
										</div>
										<div class="layui-col-md12 layui-col-md-offset1">&nbsp;</div>
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
		
		
	</body>
</html>
