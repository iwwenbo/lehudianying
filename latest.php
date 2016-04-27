<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="resources/css/lehudy.css" media="screen">
	<script type="text/javascript" src="resources/js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
	<title>最新电影 - 乐乎电影</title>
</head>
<body>
<nav class="navbar navbar-default latest-navbar"> 
	<div class="container-fluid"> 
		<div class="navbar-header latest-navbar-header"> 
			<!-- 移动版按钮 -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> 
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button> 
			<a class="latest-navbar-brand" href="/movies/home.php">乐乎电影</a> 
		</div> 
		<div class="collapse navbar-collapse latest-navbar-search" id="bs-example-navbar-collapse-2"> 
			<div class="input-group btn-group latest-search-group" style="width:485px;">
                <input type="text" class="form-control dropdown-toggle" style="width:450px;" id="sn" placeholder="影视名称">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-danger" id="searchbutton" style="height:34px;">搜索电影</button>
                </span>
            </div>
		</div> 
	</div> 
	<div class="nav-secondary">
      <div class="nav-items nav-anon">
          <ul>
              <li><a href="https://movie.douban.com/nowplaying/">影讯&amp;购票</a></li>
                     <li><a href="https://movie.douban.com/explore">选电影</a></li>
                    <li class="site-nav-bt">
                        <a href="https://movie.douban.com/tv/">电视剧</a>
                    </li>
                     <li><a href="https://movie.douban.com/chart">排行榜</a></li>
                     <li><a href="https://movie.douban.com/tag/">分类</a></li>
                     <li><a href="https://movie.douban.com/review/best/">影评</a></li>
                     <li><a href="https://movie.douban.com/annual2015/">2015年度榜单</a></li>
                     <li><a href="https://movie.douban.com/standbyme/?source=navigation">豆瓣观影报告</a></li>
          </ul>
      </div>
  </div>
</nav>
</body>
</html>