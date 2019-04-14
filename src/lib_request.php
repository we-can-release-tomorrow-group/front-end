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
$name = $number = $ins = $skills = $text = "";
$url = 100;
//if ($_SERVER["REQUEST_METHOD"] == "post")
//{
  //  if (empty($_POST["lab_name"]))
    //{
        $name = test_input($_POST["lab_name"]);
        $number = test_input($_POST["lab_number"]);
        $ins = test_input($_POST["lab_institute"]);
        $skills = test_input($_POST["lab_skills"]);
        $text = test_input($_POST["lab_text"]);
    //}
//}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo '
   
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
					   <th>发布职位</th>
					   <th>学生所属院系</th>
					   <th>技能需求</th>
					   <th>所需人数</th>
					   
					</tr>
				 </thead>
				 <tbody id="tbody_parent">
					<tr>
					   <td>机器学习/数据挖掘算法工程师</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>2 人</td>
					   <td>
					        <button style="border-radius: 30%" class="btn">-</button>
                       </td>
					</tr>
					<tr>
					   <td>财务培训生</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>3 人</td>
					   <td>
					        <button style="border-radius: 30%" class="btn">-</button>
                       </td>
					</tr>
					<tr>
					   <td>平台型产品经理(技术领域)</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>1 人</td>
					   <td>
					        <button style="border-radius: 30%" class="btn">-</button>
                       </td>
					</tr>
					<tr>
					   <td>体验设计师</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>2 人</td>
					   <td>
					        <button style="border-radius: 30%" class="btn">-</button>
                       </td>
					</tr>
					<tr>
					   <td>算法工程师-语音对话交互</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>3 人</td>
					   <td>
					        <button style="border-radius: 30%" class="btn">-</button>
                       </td>
					</tr>
					<tr>
					   <td>算法工程师-自然语言处理</td>
					   <td>计算机科学与技术学院</td>
					   <td>Python/Java/C++</td>
					   <td>1 人</td>
					   <td>
					        <button style="border-radius: 30%" >-</button>
                       </td>
					</tr>
					
				 </tbody>
			  </table>
          
            <div style="text-align: center;" id="lab_add">
                <button type="button" class="btn btn-primary" onclick="add_position()">添加新的职位需求</button>
            </div>
            <br>
            <br>
            <div style="text-align: center;" id="lab_alert">
                <button type="button" class="btn btn-primary" onclick="add_element()">test</button>
            </div>  
        </div>
';
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
        window.location.href = 'sign_up.php';
    }
    //退出
    
    function add_position() {
        //UI.open({title:'发布',url:'lib_add.php',width:850,height:600});
        window.location.href = 'lib_add.php';
    }

    function add_element() {
        var js_name = "<?php echo $name?>";
        var js_number = "<?php echo $number?>";
        var js_ins = "<?php echo $ins?>";
        var js_skills = "<?php echo $skills?>";
        var js_text = "<?php echo $text?>";

        var tr_add = document.createElement('tr');

        var tr_name = document.createElement('td');
        tr_name.innerHTML = js_name;
        var tr_ins = document.createElement('td');
        tr_ins.innerHTML = js_ins;
        var tr_skills = document.createElement('td');
        tr_skills.innerHTML = js_skills;
        var tr_number = document.createElement('td');
        tr_number.innerHTML = js_number;

        var tbody_parent = document.getElementById('tbody_parent');
        tbody_parent.appendChild(tr_add);
        tr_add.appendChild(tr_name);
        tr_add.appendChild(tr_ins);
        tr_add.appendChild(tr_skills);
        tr_add.appendChild(tr_number);

        window.alert(js_name+js_number+js_ins+js_skills+js_text);
    }
    function delete_element(){

    }

</script>