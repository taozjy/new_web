<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\phpstudy\WWW\tpfive/application/admin\view\index\index.html";i:1578118508;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>后台登录</title>
		<link rel="stylesheet" href="text/css/layui.css">
		<link rel="stylesheet" href="text/zd.css">
		<script src="text/layui.js"></script>
		<script src="text/jquery.js"></script>
	</head>
	<body>
		<div class="layui-container teshu">
			
			<form class="biaod" method="post" action="admin.php?s=admin/index/index_yz">
				<div class="layui-row"> 
						<div class="layui-col-md4 layui-col-md-offset4 ty">
							<div class="layui-col-md12">
								<div class="layui-col-md12 hg28">用户名</div>
								<div class="layui-col-md12">&nbsp;</div>
								<input type="text" name="user" class="layui-col-md8 layui-col-md-offset2" />
							</div>
							<div class="layui-col-md12">&nbsp;</div>
							<div class="layui-col-md12">
								<div class="layui-col-md12 hg28">密码</div>
								<div class="layui-col-md12">&nbsp;</div>
								<input type="text" name='password' class="layui-col-md8 layui-col-md-offset2" />
							</div>
							<div class="layui-col-md12"> &nbsp;</div>
							<div class="layui-col-md12">
								<div class="layui-col-md12 hg28">验证码</div>
								<div class="layui-col-md12"> &nbsp;</div>
								<div style="background-color: whitesmoke;" class="layui-col-md6 layui-col-md-offset3 hg28 yzm" ></div>
								<div class="layui-col-md12"> &nbsp;</div>
								<div class="layui-col-md6 layui-col-md-offset3 "><input type="text"  class="yzms"  /></div>
							</div>
							<div class="layui-col-md12"> &nbsp;</div>
							<div class="layui-col-md12 hg28"><input class="layui-btn" type="button" onclick="yzmyz()" value="提交" /></div>
						</div>	
				</div>
			</form>
			
			
			
		</div>
		
		
		
		<script>
			var code;
			
			window.onload = function(){
				createCode();
			}
			function createCode(){
					code = "";
					var codeLength = 4;
					var random = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R', 'S','T','U','V','W','X','Y','Z');//随机数
					for(var i = 0; i < codeLength; i++) {
						var index = Math.floor(Math.random()*36);
						code += random[index];
					}
					
				 document.getElementsByClassName('yzm')[0].innerHTML = code;
				}
				//校验验证码

// 				function validate(){
// 					var inputCode = document.getElementById("input").value.toUpperCase(); //取得输入的验证码并转化为大写
// 					if(inputCode.length <= 0) {
// 						alert("请输入验证码！");
// 					}else if(inputCode != code ) {
// 						alert("验证码输入错误！@_@");
// 						createCode();//刷新验证码
// 						document.getElementById("input").value = "";//清空文本框
// 					}else {
// 						alert("合格！^-^");
// 					}
// 				}
				
				
				
				function yzmyz(){
					
					var inputCode = document.getElementsByClassName('yzms')[0].value.toUpperCase(); //取得输入的验证码并转化为大写
					console.log(document.getElementsByClassName('yzms')[0]);
					if(inputCode.length <= 0) {
						alert("请输入验证码！");
						
					}else if(inputCode != code ) {
						alert("验证码输入错误！@_@");
						createCode();//刷新验证码
						document.getElementsByClassName('yzms')[0].value = "";//清空文本框
						
					}else {
						layer.msg("合格");

						document.getElementsByClassName("biaod")[0].submit();
					}
					
				}

			
		</script>
	</body>
</html>
