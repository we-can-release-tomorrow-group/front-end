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