
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>实验室招聘</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="static/plugins/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="static/css/site.css"/>
		<script type="text/javascript" src="static/js/jquery.min.js"></script>
		<script type="text/javascript" src="static/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="static/js/UI.js"></script>
		<style type="text/css">
			.content-list .title{text-align: center;margin-top:3px;font-size: 18px;color: #666;}
		</style>
	</head> 

	<body>
    
		<?php include 'top.php';?>

		<div class="main container">
			
			<!--左边小主题-->
			<?php include 'left.php'?>
			<!--左边小主题-->
			
			<!--右边正文-->
			<div class="col-lg-9 col-xs-9" style="margin:35px 0px;" >
				<div style="font-size:28px;margin-top:20px;margin-left:40px;text-color:#666;">
					<p>基&nbsp;&nbsp;本&nbsp;&nbsp;信&nbsp;&nbsp;息</p>
				</div>
				<hr>
				<!-- 姓名 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 学号 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 院系 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系：</div>						
							</div>
						</div>
					</div>
				</div>
				<!-- 专业 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业：</div>								
							</div>
						</div>
					</div>
				</div>
				<div style="font-size:28px;margin-top:40px;margin-left:40px;text-color:#666;">
					<p>简&nbsp;&nbsp;历&nbsp;&nbsp;信&nbsp;&nbsp;息</p>
				</div>
				<hr>
				<!-- 技能 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">技&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;能：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">技&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;能：</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 技能等级 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">技能等级：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">技能等级：</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 获奖 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">获奖信息：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">获奖信息：</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 经历 -->
				<div class="content-list">
					<div class="form">
						<div class="row" style="margin:20px 0px;">
							<div class="col-lg-4">
								<div class="title" style="margin-left:20px;">工作经历：</div>
							</div>
							<div class="col-lg-6">
								<div class="title" style="margin-left:20px;">工作经历：</div>
							</div>
						</div>
					</div>
				</div>
				<div class="anniu" style="margin:80px 20%;width:30%;">
					<a type="button" class="btn btn-primary btn-sm btn-block" href="add_information.php">完&nbsp;&nbsp;&nbsp;善&nbsp;&nbsp;&nbsp;信&nbsp;&nbsp;&nbsp;息</a>
				</div>
			</div>
			<!--右边正文-->
			
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