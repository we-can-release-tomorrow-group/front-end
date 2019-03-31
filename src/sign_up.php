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
	<style type="text/css">
			.back .form-control{margin:0px 30px;}
			.back .form-group{margin:30px 0px;}
			
		</style>
  </head>

  <body style="background-color:#66ccff;">
    
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

        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

	
	<div class="back" style="margin:0px 50px;background-color:rgba(255,255,255,0.5); height:100%;">
	
		<p>&nbsp;</p>
		<div class="panel panel-default" style="margin:80px 50px;">
			<div class="panel-body">
				<div>
					<center><p style="font-size:40px;color:gray;margin-top:10px;">信&nbsp;&nbsp;息&nbsp;&nbsp;录&nbsp;&nbsp;入</p></center>
				</div>
				<hr>
				<form class="form-horizontal">
				  <div class="form-group">
					<label class="col-sm-3 control-label">请输入所在学院：</label>
					<div class="col-sm-6">
					  <input type="text" class="form-control" name="institute" placeholder="请输入所在学院">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label">请输入学系：</label>
					<div class="col-sm-6">
					  <input type="text" class="form-control" name="department" placeholder="请输入学系">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label">请输入姓名：</label>
					<div class="col-sm-6">
					  <input type="text" class="form-control" name="name" placeholder="请输入姓名">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label">请输入密码：</label>
					<div class="col-sm-6">
					  <input type="password" class="form-control" name="password" placeholder="请输入密码">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label">请重复密码：</label>
					<div class="col-sm-6">
					  <input type="password" class="form-control" name="re_password" placeholder="请重复密码">
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-sm-3 control-label">请输入学号：</label>
					<div class="col-sm-6">
					  <input type="text" class="form-control" name="number" placeholder="请输入学号">
					</div>
				  </div>
				  <div class="form-group">
					<center>
					
					  <button type="submit" class="btn btn-default" onclick="sign_up()">&nbsp;&nbsp;&nbsp;&nbsp;提&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交&nbsp;&nbsp;&nbsp;&nbsp;</button>
					
					</center>
				  </div>
				</form>
			</div>
		</div>
		
	</div>
    
	
  </body>

</html>
<script type="text/javascript">
	//登陆
	
	function sign_up(){
		var institute=$.trim($('input[name="institute"]').val());
		var department=$.trim($('input[name="department"]').val());
		var username=$.trim($('input[name="username"]').val());
		var password=$.trim($('input[name="password"]').val());
		var re_password=$.trim($('input[name="re_password"]').val());
		var number=$.trim($('input[name="number"]').val());
	}
	//退出
	
</script>