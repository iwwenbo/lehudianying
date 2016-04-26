<!DOCTYPE html>
<html lang="zh-cn"><head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="resources/css/lehudy.css" media="screen">
<script type="text/javascript" src="resources/js/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>

<title>最新分享平台 - 乐乎电影</title>
</head>
<body>
<!-- 导航 -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
    <!-- logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="/movies/home.php">乐乎电影</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <!-- 导航按钮 -->
    <ul class="nav navbar-nav">
        <li class="active"><a href="/movies/home.php">首页</a></li>
        <li><a href="new.php">最新</a></li>
        <li><a href="hot.php">热门</a></li>
    </ul>
    <!-- 用户登录注册 -->
    <ul class="nav navbar-nav navbar-right navbar-user">
        <div class="hum">
            <a href="/movies/user/loginForm.php">登录</a>　<a href="/movies/user/registerForm.php">注册</a>
        </div>
    </ul>
    </div>
    </div>
</nav>
<!-- home content body -->
<div class="container">
    <div style="height:550px;">
            <div class="text-center hidden-xs">
                <h1 style="padding-top:100px;">乐乎电影网</h1>  
            </div>
            <div class="col-md-8 col-md-offset-2">
            <div class="input-group btn-group" style="margin:0 auto;padding-top:50px;">
                <input type="text" class="form-control dropdown-toggle" id="sn" style="height:42px;" placeholder="影视名称">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-danger" id="searchbutton" style="height:42px;">搜索电影</button>
                </span>
            </div>
            </div>
    </div>
</body>
</html>