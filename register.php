
<?php  
	if(!isset($_POST['submit'])){ 
		exit('非法访问!'); 
	} 

	$username = $_POST['username']; 
	$password = $_POST['password']; 
	date_default_timezone_set('PRC');
		//包含数据库连接文件 
	include('common/dbconn.php'); 

	//检测用户名是否已经存在 
	$check_query = mysqli_query($conn,"select user_name from user where user_name='$username' limit 1"); 

	if(mysqli_fetch_array($check_query)){ 
		echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>'; 
		exit; 
	} 

	//写入数据 
	$password = MD5($password); 
	$regdate = date('Y-m-d H:i:s'); 
	//通过mysql数据库的方式生成uuid
	$uuid_query = mysqli_query($conn,"SELECT REPLACE(UUID(),'-','') as id");
	$uuid_array = mysqli_fetch_array($uuid_query);
	$id = $uuid_array['id'];
	$sql = "INSERT INTO user(id,user_name,password,register_time) VALUES ('".$id."','".$username."','".$password."','".$regdate."')"; 
	if(mysqli_query($conn,$sql)){ 
		exit('用户注册成功！点击此处 <a href="login.html">登录</a>'); 
	} else { 
		echo '抱歉！添加数据失败：',mysql_error(),'<br />'; 
		echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试'; 
	} 
?>

