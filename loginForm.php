<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="origin" name="referrer" />
    <title>登录 · 乐乎电影</title>
    <link rel="stylesheet" type="text/css" href="/movies/resources/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/movies/resources/css/lehudy.css" media="screen">
    <script type="text/javascript" src="/movies/resources/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/movies/resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        /*登陆信息检查*/
        function loginCheck(loginForm){
            if (document.loginForm.username.value == ""){
                alert("请输入用户名!");
                document.loginForm.username.focus();
                return false;
            }
            if (document.loginForm.password.value == ""){
                alert("请输入密码!");
                document.loginForm.password.focus();
                return false;
            }
            return true;
        }

        /*进行表单提交操作*/
       function doLogin(){
            //表单验证操作
            var passCheck =  loginCheck();
            //验证通过则提交表单
            if(passCheck){
                $("#loginForm").submit();
            }
       }
    </script>
</head>

<body>
<form class="form-horizontal" action="/movies/login.php" name="loginForm" id="loginForm" method="post">
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="input" class="form-control" id="username" name="username" placeholder="用户名">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="密码">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" onclick="doLogin();">Sign in</button>
    </div>
  </div>
</form>
</body>

</html>