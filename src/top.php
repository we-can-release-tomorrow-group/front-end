<?php

function php_self(){
	
    $php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
    
	return $php_self;
}

?>

<?php
echo '
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
    
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav"> 
		  <li style="margin-right:15px;"><img src="static/image/hit.png" width="48" height="48"></li>';
		  
		  
		  $phpself=php_self();
		  if($phpself=="index.php"){
			echo '<li class="active"><a href="index.php">主页</a></li>';
		  }else{
			echo '<li><a href="index.php">主页</a></li>';
		  }
		  
		  if($phpself=="look4job.php"){
			  echo '<li class="active"><a href="look4job.php">职位搜索</a></li>';
		  }else{
			  echo '<li><a href="look4job.php">职位搜索</a></li>';
		  }
		  
		  echo'
          </ul>

			<div style="float: right;">
				<button type="button" class="btn btn-success" onclick="login()" style="padding: 6px 20px;margin: 9px 8px;">登录</button>
				<button type="button" class="btn btn-warning" onclick="sign_up()" style="padding: 6px 20px;margin: 9px 8px;">注册</button>
			</div>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
'
?>