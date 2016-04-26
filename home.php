<!DOCTYPE html>
<html lang="zh-cn"><head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css" media="screen">
<script type="text/javascript" src="resources/js/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>

<title>电影资源分享平台 - 乐乎电影</title>
</head>
<body style="overflow-x: hidden;">
<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/movies/home.php">乐乎电影</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="/movies/home.php">首页</a></li>
<li><a href="new.php">最新</a></li>
<li><a href="hot.php">热门</a></li>
</ul>
<ul class="nav navbar-nav navbar-right huser">
<div class="hum">
<a href="login.html">登录</a>　<a href="register.html">注册</a>
</div>
</ul>
</div>
</div>
</nav>
<div style="background:white;margin:-20px 0 30px 0;padding-bottom:10px;">
<div class="container">
<div class="row" style="margin-bottom:100px;">
<h1 class="text-center" style="padding-top:80px;">乐乎电影网</h1>
<div class="col-md-offset-3 col-md-6" style="padding-top:50px;">
<div class="input-group btn-group">
<input type="text" class="form-control" id="sn" placeholder="影视名称">
<span class="input-group-btn">
<button type="button" class="btn btn-primary" id="searchbutton" onclick="javascript:search()">搜索影视</button>
<button type="button" class="btn btn-primary dropdown-toggle" style="width:20px;padding-left:5px;" data-toggle="dropdown">
<span class="caret"></span>
<span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu" role="menu">
<li>搜索记录</li>
</ul>
</span>
</div>
<div style="margin:0 auto;"><div class="gray text-center f12" style="padding:30px 0 0 0;">电影资源仅作语言学习之用，版权归片方所有，本站禁止发布任何非法盗版资源下载地址</div></div>
<div class="text-center f12" style="padding:5px 0 0 0;"></div>
<div class="text-center f12 red" style="padding:5px 0 0 0;"></div>
 
</div>
</div>
<script>
        $(document).ready(function() {
            $('.tooltips').tooltipster();
        });
    </script>
<div style="clear:both"></div>
<div style="padding-top:70px;">
<div>

<!-- 引入谷歌广告 -->

</div>
</div>
</div>
</div>


<div style="clear:both;padding-top:30px;"></div>




<div id="footer">
<div class="container">
<div class="row">
<div class="col-md-8 hidden-xs"><a href="http://www.lehudy.com" target="_blank">乐乎电影</a> 成立于2014年12月</div>
<div class="col-md-4 text-right"><a href="mailto:wwb815@gmail.com" target="_blank">联系我们</a></div>
</div>
</div>
</div>


</body></html>