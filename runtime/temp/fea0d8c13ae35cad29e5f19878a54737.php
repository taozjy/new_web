<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"E:\phpstudy\WWW\tpfive/admin/admin\view\textwb\text_index.html";i:1593226583;s:26:"admin/admin/view/head.html";i:1578118507;s:26:"admin/admin/view/left.html";i:1593421531;}*/ ?>
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

					
					<div  class="layui-col-md10 pd15">
						<a class="layui-col-md1 layui-btn" href="admin.php?s=admin/textwb/text_add">新增</a>
						<div class="layui-col-md12">&nbsp</div>
						<ul class="layui-col-md12">
						<li class="layui-col-md1 biaoti">排序</li>
						<li class="layui-col-md4 biaoti">标题</li>
						
						<li class="layui-col-md1 biaoti">时间</li>
						<li class="layui-col-md2 biaoti">操作</li>
						</ul>
						<div class="layui-col-md12">&nbsp</div>
						<?php if(is_array($text_sel) || $text_sel instanceof \think\Collection || $text_sel instanceof \think\Paginator): $i = 0; $__LIST__ = $text_sel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$text_sels): $mod = ($i % 2 );++$i;?>
							<ul class="layui-col-md12 jz1">
								<li class="layui-col-md1"><?php echo $text_sels['id']; ?></li>
								<li class="layui-col-md4"><?php echo $text_sels['index_text_name']; ?></li>
								<li class="layui-col-md2"><?php echo $text_sels['index_text_time']; ?></li>
								<li class="layui-col-md2">
								<a class="layui-btn" href="admin.php?s=admin/textwb/update_textwb&id=<?php echo $text_sels['id']; ?>">修改</a>
								&nbsp;
								<a class="layui-btn" href="admin.php?s=admin/textwb/text_delete_js&id=<?php echo $text_sels['id']; ?>">删除</a></li>
							</ul>
							<div class="layui-col-md12">&nbsp</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="layui-col-md12" style="display: flex;">
							<?php if(is_array($fy_xh) || $fy_xh instanceof \think\Collection || $fy_xh instanceof \think\Paginator): $i = 0; $__LIST__ = $fy_xh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fy_xhs): $mod = ($i % 2 );++$i;?>
								<div class="pd15" ><a href="admin.php?s=admin/textwb/text_index&fy_id=<?php echo $fy_xhs; ?>"><?php echo $fy_xhs; ?></a></div>
										
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
		
					
		
				</div>
		</div>
	</body>
</html>
