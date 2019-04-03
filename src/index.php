<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>实验室招聘</title>
		<!-- 包含头部信息用于适应不同设备 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 包含 bootstrap 样式表 -->
		<link rel="stylesheet" type="text/css" href="static/plugins/bootstrap/css/bootstrap.min.css"/>
		<script type="text/javascript" src="static/js/jquery.min.js"></script>
		<script type="text/javascript" src="static/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="static/js/UI.js"></script>
	</head>

  <body background="/static/image/BGP.jpg" style="min-width:800px;max-width:1500px;background-size:cover;">
    
    <?php include 'top.php';?>

	<div class="jumbotron" style="margin: 150px 50px;background-color:rgba(0,0,0,0.5); ">
		<div class="container">
			<div style="color:white;text-align: center">
				<h1 style="font-size:50px;">哈尔滨工业大学（威海）实验室服务平台</h1>
			</div>
			<div style="margin-top:50px;text-align: center">
				<p ><a class="btn btn-primary btn-lg" href="#" role="button" style="background-color:rgba(0,0,0,0.3);color:white">点击申请职位</a></p>
			</div>
		</div>
	</div>
	
	<?php include 'footer.php';?>
	
  </body>

</html>
<script type="text/javascript">
	//登陆
	function login(){
		//UI.alert({title:'系统消息',msg:'请输入用户名',icon:'error'});
		UI.open({title:'登录',url:'log_in.php',width:450,height:350});
	}
	
	function sign_up(){
		UI.open({title:'注册',url:'sign_up.php',width:450,height:350});
	}
	//退出
	
</script>