<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>实验室招聘 实例</title>
		<!-- 包含头部信息用于适应不同设备 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 包含 bootstrap 样式表 -->
		<link rel="stylesheet" type="text/css" href="static/plugins/bootstrap/css/bootstrap.min.css"/>
		<script type="text/javascript" src="static/js/jquery.min.js"></script>
		<script type="text/javascript" src="static/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="static/js/UI.js"></script>
	</head>

  <body background="/static/image/BGP.jpg" style="min-width:800px;max-width:1500px;background-size:cover;">
    
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">招聘</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">主页</a></li>
            <li><a href="#about">校招行程</a></li>
            <li><a href="#contact">实习介绍</a></li>
          </ul>

          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="查询">
            </div>
            <button type="submit" class="btn btn-default">搜索</button>
          </form>

			<div style="float: right;">
				<button type="button" class="btn btn-success" onclick="login()" style="padding: 6px 20px;margin: 7px 5px;">登录</button>
				<button type="button" class="btn btn-warning" onclick="sign_up()" style="padding: 6px 20px;margin: 7px 5px;">注册</button>
			</div>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

	
	<div class="jumbotron" style="margin: 150px 50px;background-color:rgba(0,0,0,0.5); ">
		<div class="container">
			<center style="color:white;">
				<h1 style="font-size:50px;">哈尔滨工业大学（威海）实验室服务平台</h1>
			</center>
			<center style="margin-top:50px;">
				<p ><a class="btn btn-primary btn-lg" href="#" role="button" style="background-color:rgba(0,0,0,0.3);color:white">点击申请职位</a></p>
			</center>
		</div>
	</div>
    



	
  </body>

</html>
<script type="text/javascript">
	//登陆
	function login(){
		//UI.alert({title:'系统消息',msg:'请输入用户名',icon:'error'});
		UI.open({title:'登录',url:'log_in.php',width:450,height:350});
	}
	
	function sign_up(){
		window.location.href='sign_up.php';
	}
	//退出
	
</script>