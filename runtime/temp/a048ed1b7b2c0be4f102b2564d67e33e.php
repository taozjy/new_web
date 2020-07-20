<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"E:\phpstudy\WWW\tpfive/admin/admin\view\product\product_update.html";i:1578118507;s:26:"admin/admin/view/head.html";i:1578118507;s:26:"admin/admin/view/left.html";i:1593421531;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="text/css/layui.css">
		<link rel="stylesheet" href="text/zd.css">
		<script src="text/layui.js"></script>
		<script src="text/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="fwb/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="fwb/ueditor.all.min.js"> </script>
		<script type="text/javascript" charset="utf-8" src="fwb/lang/zh-cn/zh-cn.js"></script>
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
						<div class="layui-col-md12">
								
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
										<form id="bd" method="post" action="admin.php?s=admin/product/product_updates" enctype="multipart/form-data" >
											<div class="layui-col-md12">
												<div class="layui-col-md1">产品名称</div>
												<div class="layui-col-md10"><input type="text" name="tit" value="<?php echo $text[0]['product_name']; ?>" ></div>
											</div>
											<div class="layui-col-md12">
												<div class="layui-col-md1">时间</div>
												<div class="layui-col-md10"><input type="date" name="times" value="<?php echo $text[0]['time']; ?>"></div>
											</div>
											<div style="display: none;" class="layui-col-md12">
												<div class="layui-col-md1">文章图片</div>
												<div class="layui-col-md10"><input type="file" name="photo" value=""></div>
											</div>
											<div style="display:none;" class="layui-col-md12">
												<div class="layui-col-md10"><input type="text" name="id" value="<?php echo $text[0]['id']; ?>"></div>
											</div>
											<div class="layui-col-md12">
												<div class="layui-col-md1">产品详细内容</div>
												<script id="editor" type="text/plain" class="layui-col-md10">
													<?php echo $text[0]['product_text']; ?>
												</script>
												<input id="fwb_text" type="hidden" name="wenben" />
											</div>
											<div class="layui-btn" onclick="tijiao()">
												提交
											</div>
										</form>
									</div>
								
						</div>
				</div>
				<script>
					var ue = UE.getEditor('editor');
					
					
					
					function tijiao(){
						
						var arr = [];
		// 				arr.push("使用editor.getContent()方法可以获得编辑器的内容");
		// 				arr.push("内容为：");
						var text = UE.getEditor('editor').getContent();
						$("#fwb_text").val(text);
						$("#bd").submit();
						
					}
					
					
				</script>
	</body>
</html>
