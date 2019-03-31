<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="static/plugins/bootstrap/css/bootstrap.min.css"/>
		<script type="text/javascript" src="static/js/jquery.min.js"></script>
		<script type="text/javascript" src="static/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="static/js/UI.js"></script>
		<style type="text/css">
			.title{text-align:center;font-size:18px;color:#666}
			.form{margin:30px 0px;}
			.form .input-group{margin: 20px 0px;}
			.anniu{margin-top: 20px;}
		</style>
	</head>
	<body>
		<div class="title">登陆</div>
			<div class="form">
				<div class="input-group input-group-sm">
					 <span class="input-group-addon">用户名</span>
					 <input type="text" class="form-control" name="username" placeholder="请输入用户名">
				</div>
				<div class="input-group input-group-sm">
					 <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;&nbsp;码</span>
					 <input type="password" class="form-control" name="pwd" placeholder="请输入密码">
				</div>	
			</div>
			<div class="anniu">
				<button type="button" class="btn btn-primary btn-sm btn-block" onclick="login()">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</button>
			</div>
	</body>
</html>
<script type="text/javascript">
	//登录
	function login(){
		var username=$.trim($('input[name="username"]').val());
		var pwd=$.trim($('input[name="pwd"]').val());
		if(username==''){
			UI.alert({msg:'用户名不能为空',icon:'error'});
			return;
		}
		if(pwd==''){
			UI.alert({msg:'密码不能为空',icon:'error'});
			return;
		}
		//提交验证//ajax
		//UI.alert({msg:'好的',icon:'warm'});
		
	}
	//if(res.code>0){
				//UI.alert({msg:res.msg,icon:'error'});
			//}else{
				//UI.alert({msg:res.msg,icon:'ok'});
				//setTimeout(function(){parent.window.location.reload();},1000);
			//}
</script>