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

  <body>
    
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

	<p>&nbsp;</p>
	
    <div class="container" id="main">
      <div class="jumbotron">

        <div class="row">
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/timg.jpg" alt="...">
			  <div class="caption">
				<h3>Thumbnail label</h3>
				<p>...</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/timg.jpg" alt="...">
			  <div class="caption">
				<h3>Thumbnail label</h3>
				<p>...</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/timg.jpg" alt="...">
			  <div class="caption">
				<h3>Thumbnail label</h3>
				<p>...</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		</div>
		
		
		<div style="text-align: center;">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
		</div>
      </div>
    </div>




    <!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
    <!-- 可选: 包含 jQuery 库 -->
    
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