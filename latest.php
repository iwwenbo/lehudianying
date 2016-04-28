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
              <li><a href="https://movie.douban.com/nowplaying/">爱情</a></li>
              <li><a href="https://movie.douban.com/explore">动作</a></li>
              <li><a href="https://movie.douban.com/tv/">战争</a></li>
              <li><a href="https://movie.douban.com/chart">科幻</a></li>
              <li><a href="https://movie.douban.com/tag/">悬疑</a></li>
              <li><a href="https://movie.douban.com/review/best/">恐怖</a></li>
              <li><a href="https://movie.douban.com/annual2015/">喜剧</a></li>
              <li><a href="https://movie.douban.com/annual2015/">惊悚</a></li>
              <li><a href="https://movie.douban.com/annual2015/">动画</a></li>
              <li><a href="https://movie.douban.com/annual2015/">冒险</a></li>
              <li><a href="https://movie.douban.com/annual2015/">电视剧</a></li>
              <li><a href="https://movie.douban.com/standbyme/?source=navigation">更多...</a></li>
          </ul>
      </div>
  </div>
</nav>
<div id="wrapper">
	<div id="content">
        <div class="article">
	        <h1>最新电影</h1>
			<div class="tool">
	            <div class="sort">
	                <label>
	                    <input type="radio" name="sort" value="recommend" checked="checked">按热度排序
	                </label>
	                <label>
	                    <input type="radio" name="sort" value="time">按时间排序
	                </label>
	                <label>
	                    <input type="radio" name="sort" value="rank">按评价排序
	                </label>
	            </div> <!-- end sort -->
	            <div class="check">
	                <label>
	                    <input type="checkbox" name="watched" class="">我没看过的
	                </label>
	                <label>
	                    <input type="checkbox" name="playable">可在线播放
	                </label>
	            </div> <!-- end check -->
	        </div> <!-- end tool -->
	        <div class="list-mv">
		    <div class="list">
		    	<a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		    
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		        <a class="item" target="_blank" href="https://movie.douban.com/subject/26322928/?tag=热门&amp;from=gaia">
		            <div class="cover-wp" data-isnew="false" data-id="26322928">
		                <img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2226663805.jpg" alt="鬼乡" data-x="2000" data-y="2820" onload="loadImg(this)" style="height: 100%; opacity: 1;">
		            </div>
		            <p>
		               鬼乡
		               <strong>7.5</strong>
		            </p>
		        </a>
		    </div>
    		<a class="more" href="javascript:;">加载更多</a>
		</div> <!-- end list-mv -->
        </div> <!-- end article -->
        
        <div class="aside">
        	<div id="hotlist">
		        <h2>热门推荐</h2>
		        <ul>
		            <li>
		            <span>15推荐</span>
		            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/1691871/">【总】100部必看的经典爱情电影</a></div>
		            </li>
		            <li>
		            <span>4757推荐</span>
		            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/119320/">BBC古典名著小剧集(BBC CLASSIC DRAMA)</a></div>
		            </li>
		            <li>
		            <span>141推荐</span>
		            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/256745/">香港电影评论学会大奖历届获奖名单</a></div>
		            </li>
		            <li>
		            <span>231推荐</span>
		            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/769172/">我所看过的中国独立电影</a></div>
		            </li>
		            <li>
		            <span>7推荐</span>
		            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/2530328/">电影中的冷知识</a></div>
		            </li>
		        </ul>
        	</div>
        </div>
	</div>
</div>
</body>
</html>