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
<?php
include 'top.php';
echo '
    $name = $number = $ins = $skills = $text = "";
    
    
    
    <div class="container" id="lab_add">
      <div class="jumbotron">
        <div class="panel panel-default">
		  <div class="panel-heading">
			<h2 class="panel-title" style="">实验室已发布职位</h2>
		  </div>
		  <div class="panel-body">
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
          
            <div style="text-align: center;" id="lab_add">
                <button type="button" class="btn btn-primary" onclick="add_position()">添加新的职位需求</button>
            </div> 
        </div>
'
?>

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
    
    function add_position() {
        UI.open({title:'发布',url:'lib_add.php',width:850,height:600});
    }

</script>