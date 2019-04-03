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
  <?php
  include 'top.php';
  echo '

    <div class="container" id="info">
        <div class="jumbotron">
          <h2>实验室招聘</h2>
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row" id="row_1">

                <div class="col-md-2">
                  <h4><span class="label label-default">院系</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-primary">不限</span></h4>
                </div>
                <div class="col-md-2">
                  <h4><span class="label label-default">计软学院</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">船舶学院</span></h4>
                </div>
                
              </div>

              <div class="row" id="row_2">

                <div class="col-md-2">
                  <h4><span class="label label-default">专业</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-primary">不限</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">计算机科学与技术</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">软件工程</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">网络安全</span></h4>
                </div>
                
              </div>

              <div class="row" id="row_4">

                <div class="col-md-2">
                  <h4><span class="label label-default">技能</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-primary">不限</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">C++</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">Java</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">Python</span></h4>
                </div>
                <div class="col-md-1">
                  <h4><span class="label label-default">Android</span></h4>
                </div>
                
              </div>
            </div>
          </div>  
          <p></p>
          
        </div>  
    </div>
    <div class="container" id="main">
      <div class="jumbotron">

        <div class="container" id="select_info">
          <table class="table table-striped">
             <thead>
                <tr>
                   <th>职位名称</th>
                   <th>职能</th>
                   <th>工作城市</th>
                   <th>面试城市</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
                <tr>
                   <td>后台开发工程师</td>
                   <td>技术类</td>
                   <td>北京市、上海市、深圳市</td>
                   <td>北京市、上海市、深圳市</td>
                </tr>
             </tbody>
          </table>
        </div>

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
    </div>';
  ?>
  <?php include 'footer.php'?>
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