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

<body>
<?php
//include 'top.php';
echo '
<form class="form-horizontal" action="lib_request.php" method="post">

      <div class="form-group">
            <label for="lab_name" class="col-sm-2 control-label">实验室名称</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="lab_name" placeholder="请输入实验室名称">
          </div>
      </div>
      <br>
      <br>
      <div class="form-group">
            <label for="lab_number" class="col-sm-2 control-label">所需人数</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="lab_number" placeholder="请输入所需人数">
          </div>
      </div>
      <br>
      <br>
      <div class="form-group">
            <label for="lab_institute" class="col-sm-2 control-label">学生所属院系</label>
            <div class="col-sm-10">
                <select class="form-control" name="lab_institute">
                   <option>计算机科学与技术学院</option>
                   <option>汽车工程学院</option>
                   <option>海洋科学与技术学院</option>
                   <option>信息与电气工程学院</option>
                   <option>经济管理学院</option>
                </select>
            </div>
      </div>
      <br>
      <br>
      <div class="form-group">
            <label for="lab_skills" class="col-sm-2 control-label">技能需求</label>
            <div class="col-sm-10">
                <select class="form-control" name="lab_skills">
                   <option>Python</option>
                   <option>C++</option>
                   <option>C</option>
                   <option>Java</option>
                   <option>PHP</option>
                </select>
            </div>
      </div>
      <br>
      <br>
      <div class="form-group">
            <label for="lab_text" class="col-sm-2 control-label">学生所属院系</label>
            <div class="col-sm-offset-2 col-sm-10">
                <textarea class="form-control" rows="3" id="lab_text" placeholder="请输入具体要求"></textarea>
            </div>
      </div>
      <div class="form-group">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
      </div>
</form>
  
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


</script>