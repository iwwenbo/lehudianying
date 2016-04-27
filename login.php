<?php 
	

//登录信息
$username = $_POST['username'];
$password = $_POST['password'];

echo "用户名：".$username;
echo "密码：".$username;
//包含数据库连接文件
include('../common/dbconn.php');
//检测用户名及密码是否正确
$check_query = mysqli_query($conn,"select * from user where username='$username' and password='$password' limit 1");
if($check_query){
    //登录成功
  echo "登陆成功！";
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

 ?>

