<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="字幕，字幕下载，电影字幕，中文字幕，电影字幕下载，中文字幕下载，字幕组，射手网，美剧字幕下载，英剧字幕下载，双语字幕下载，美剧，电影，美剧下载，英剧下载，电影下载，美剧字幕，英剧字幕">
<meta name="description" content="Sub HD为影视爱好者们提供交流字幕的平台，你可以在这里找到并下载字幕，对字幕打分和评论，也可以上传字幕与大家分享。">
 
<link rel="stylesheet" href="resources/stylesheets/bootstrap.min.css">
<link rel="stylesheet" href="resources/stylesheets/lehudy.css">
<script async="" type="text/javascript" src="resources/stylesheets/ca-pub-0665364311298141.js"></script>
<script src="resources/javascripts/jquery-1.11.1.min.js"></script>
<script src="resources/stylesheets/bootstrap.min.js"></script>
<script src="resources/stylesheets/respond.min.js"></script>
<script src="resources/stylesheets/subhd.min.js"></script>
<title>最新电影 - 乐乎电影</title>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
 
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">乐乎电影</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="home.php">首页</a></li>
<li class="active"><a href="new.php">最新</a></li>
<li><a href="#">热门</a></li>
</ul>
<script type="text/javascript"> 

			$(document).ready(function(){
			  
			  $("#sn").on('input',function(e){  
				var send = {con:""};
				send.con = $("#sn").val(); 
				
				if(send.con=="") {
					$('.dropdown-menu-search2').hide();
				}
				
				$.ajax({
			       type: "POST",
			       url: "/ajax/search_ajax",
			       cache:true,
			       dataType:"json",
			       data:send,
			       success: function(data){
			         if(data.success == true){
				         if(data.text!="") {
					         $('.dropdown-menu-search2').show();
					         $('.dropdown-menu-search2').html(data.text);
					     } else {
						     $('.dropdown-menu-search2').hide();
					     }
			  		 }else{   
			  		 }
			       }
			      });	
			  });  
			
			  $("#sn").blur(function(){
			    $('.dropdown-menu-search2').delay(100).hide(100);
			  });
			});
			
			</script>
<div class="navbar-form navbar-left" role="search">
<div class="input-group input-group-sm btn-group">
<input type="text" class="form-control" style="width:180px" id="sn" placeholder="影视名称">
<ul class="dropdown-menu dropdown-menu-search2" role="menu"></ul>
<span class="input-group-btn">
<button type="button" class="btn btn-primary btn-sm" id="searchbutton" onclick="javascript:search()">搜索字幕</button>
</span>
</div>
</div>
<ul class="nav navbar-nav navbar-right huser">
<div class="hum">
<a href="#">登录</a>　<a href="#">注册</a>
</div>
</ul>
</div>
</div>
</nav>
<div style="background:white;margin-bottom:20px;margin-top:-20px;padding-top:10px;padding-bottom:5px;">
<div class="container">
<div>
<!-- 谷歌广告 -->
</div>
</div>
<div class="container list">
<div class="row">
<div class="col-md-9">
<div class="pull-left"><h3 style="margin-top:0;">最新字幕</h3></div>
<div class="pull-right li_menu">
<a href="#" class="li_menu_a">全部字幕</a>　<a href="#">电影字幕</a>　<a href="#">电视字幕</a>
</div>
<div style="clear:both"></div>
<div class="box">
<div class="pull-left lb_l">
<a href="#"><img src="jpg/p2187236090.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="detail.php" target="_blank">冰风暴 The Ice Storm (1997)</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 54k　<span class="glyphicon glyphicon-save"></span> 0次　<span class="glyphicon glyphicon-time"></span> 3分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/trismile">trismile</a></b> (总共发布过1条字幕)<br>
<span class="label label-success">简体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<br>
格式：srt 版本：The.Ice.Storm.1997.720p.BluRay.x264-SiNNERS
<div class="d_title"><a href="http://subhd.com/d/1300930" class="gray">冰风暴</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25881522"><img src="./new_files/p2207192487.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S04E11</div> <a href="http://subhd.com/a/315550" target="_blank">少男奶爸 第四季第十一集 Baby Daddy S04E11 WEB-DL</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 42k　<span class="glyphicon glyphicon-save"></span> 1次　<span class="glyphicon glyphicon-time"></span> 7分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/hayden">hayden</a></b> (总共发布过163条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt 版本：Baby.Daddy.S04E11.You.Give.Real.Estate.a.Bad.Name.720p/1080p.WEB-DL.DD5.1.H.264-NTb
<div class="d_title"><a href="http://subhd.com/d/25881522" class="gray">少男奶爸 第四季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25829451"><img src="./new_files/p2221591524.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E04</div> <a href="http://subhd.com/a/315549" target="_blank">一个人的地球.The.Last.Man.On.Earth.S01E04.Sweet Melissa</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 20k　<span class="glyphicon glyphicon-save"></span> 2次　<span class="glyphicon glyphicon-time"></span> 23分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/%E4%BA%91%E8%83%A1%E4%B8%8D%E5%96%9C">云胡不喜</a></b> (总共发布过2条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-default">字幕翻译</span>
<br>
格式：srt 版本：HDTV
<div class="d_title"><a href="http://subhd.com/d/25829451" class="gray">一个人的地球 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/10548265"><img src="./new_files/p2222056402.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="http://subhd.com/a/315548" target="_blank">坚不可摧/永不屈服/非凡生命历/Unbroken</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 18k　<span class="glyphicon glyphicon-save"></span> 4次　<span class="glyphicon glyphicon-time"></span> 24分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/McYOUNG">McYOUNG</a></b> (总共发布过1条字幕)<br>
<span class="label label-success">简体</span> <span class="label label-default">字幕翻译</span>
<br>
格式：srt 版本：WEB-DL
<div class="d_title"><a href="http://subhd.com/d/10548265" class="gray">坚不可摧</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E16</div> <a href="http://subhd.com/a/315547" target="_blank">国务卿女士第1季第16集 Madam.Secretary.S01E16</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 274k　<span class="glyphicon glyphicon-save"></span> 17次　<span class="glyphicon glyphicon-time"></span> 31分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/jidibinfen">jidibinfen</a></b> (总共发布过3条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt , ass 版本：Madam.Secretary.S01E16.720p.HDTV.X264-DIMENSION
<div class="d_title"></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25885439"><img src="./new_files/p2199811694.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E16</div> <a href="http://subhd.com/a/315546" target="_blank">Madam.Secretary.S01E16国务卿女士第1季第16集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 274k　<span class="glyphicon glyphicon-save"></span> 46次　<span class="glyphicon glyphicon-time"></span> 33分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/matin">matin</a></b> (总共发布过213条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt , ass 版本：Madam.Secretary.S01E16.720p.HDTV.X264-DIMENSION
<div class="d_title"><a href="http://subhd.com/d/25885439" class="gray">国务卿女士 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25831924"><img src="./new_files/p2211215789.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S05E09</div> <a href="http://subhd.com/a/315545" target="_blank">Shameless 无耻家族 S05E09 第五季第九集 中英双语特效字幕 【极光字幕组】</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 322k　<span class="glyphicon glyphicon-save"></span> 211次　<span class="glyphicon glyphicon-time"></span> 53分钟前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/%E6%9E%81%E5%85%89%E5%AD%97%E5%B9%95%E7%BB%84">极光字幕组</a></b> (总共发布过51条字幕) @ <b><a href="http://subhd.com/zu/13" target="_blank">极光字幕组</a></b><br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/13" target="_blank"><span class="label label-success">极光字幕组</span></a><br>
格式：srt , ass 版本：Shameless.US.S05E09.720p.HDTV.X264-DIMENSION
<div class="d_title"><a href="http://subhd.com/d/25831924" class="gray">无耻之徒(美版) 第五季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25784208"><img src="./new_files/p2190723506.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S02E15</div> <a href="http://subhd.com/a/315544" target="_blank">罪恶黑名单第二季第十五集The.Blacklist.S02E15.The.Major.No.75.1080p.WEB-DL.DD5.1.H.264-NTb</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 21k　<span class="glyphicon glyphicon-save"></span> 8次　<span class="glyphicon glyphicon-time"></span> 1小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/%E6%B5%81%E7%9A%84%E6%BB%91">流的滑</a></b> (总共发布过39条字幕)<br>
<span class="label label-success">简体</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/1" target="_blank"><span class="label label-success">伊甸园字幕组</span></a><br>
格式：srt 版本：The.Blacklist.S02E15.The.Major.No.75.1080p.WEB-DL.DD5.1.H.264-NTb
<div class="d_title"><a href="http://subhd.com/d/25784208" class="gray">罪恶黑名单 第二季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25735769"><img src="./new_files/p2222607929.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E03</div> <a href="http://subhd.com/a/315543" target="_blank">Battle.Creek.S01E03错配搭档 第一季第三集 初校版</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 270k　<span class="glyphicon glyphicon-save"></span> 59次　<span class="glyphicon glyphicon-time"></span> 1小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/matin">matin</a></b> (总共发布过213条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt , ass 版本：Battle.Creek.S01E03.720p.HDTV.x264-KILLERS
<div class="d_title"><a href="http://subhd.com/d/25735769" class="gray">江城警事 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="http://subhd.com/a/315542" target="_blank">冠军</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 52k　<span class="glyphicon glyphicon-save"></span> 0次　<span class="glyphicon glyphicon-time"></span> 2小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/feng0571hz">feng0571hz</a></b> (总共发布过389条字幕)<br>
<span class="label label-default">英文</span> <span class="label label-default">官方译本</span>
<br>
格式：srt 版本：Champs 2015 720p WEB-DL x264
<div class="d_title"></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25735769"><img src="./new_files/p2222607929.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E03</div> <a href="http://subhd.com/a/315541" target="_blank">错配搭档 第一季 第3集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 24k　<span class="glyphicon glyphicon-save"></span> 6次　<span class="glyphicon glyphicon-time"></span> 2小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/feng0571hz">feng0571hz</a></b> (总共发布过389条字幕)<br>
<span class="label label-default">英文</span> <span class="label label-default">官方译本</span>
<br>
格式：srt 版本：Battle.Creek.S01E03.720p.HDTV.x264-KILLERS.srt
<div class="d_title"><a href="http://subhd.com/d/25735769" class="gray">江城警事 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25885752"><img src="./new_files/p2199165515.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S04E16</div> <a href="http://subhd.com/a/315540" target="_blank">Revenge S04E16复仇 第4季第16集【普版/720共轴】</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 255k　<span class="glyphicon glyphicon-save"></span> 112次　<span class="glyphicon glyphicon-time"></span> 3小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/matin">matin</a></b> (总共发布过213条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt , ass 版本：Revenge.S04E16.720p.HDTV.X264-DIMENSION
<div class="d_title"><a href="http://subhd.com/d/25885752" class="gray">复仇 第四季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25923092"><img src="./new_files/p2221959966.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S07E11</div> <a href="http://subhd.com/a/315539" target="_blank">公园与游憩 Parks and Recreation 第七季第十一集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 44k　<span class="glyphicon glyphicon-save"></span> 22次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/Knope">Knope</a></b> (总共发布过11条字幕)<br>
<span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/36" target="_blank"><span class="label label-success">火星字幕组</span></a><br>
格式：srt 版本：Parks and Recreation - 07x11 - Two Funerals.WEB-DL
<div class="d_title"><a href="http://subhd.com/d/25923092" class="gray">公园与游憩 第七季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25923092"><img src="./new_files/p2221959966.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S07E10</div> <a href="http://subhd.com/a/315538" target="_blank">公园与游憩 Parks and Recreation 第七季第十集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 39k　<span class="glyphicon glyphicon-save"></span> 21次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/Knope">Knope</a></b> (总共发布过11条字幕)<br>
<span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/36" target="_blank"><span class="label label-success">火星字幕组</span></a><br>
格式：srt 版本：Parks and Recreation - 07x10 - The Johnny Karate Super Awesome Musical Explosion Show.WEB-DL
<div class="d_title"><a href="http://subhd.com/d/25923092" class="gray">公园与游憩 第七季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25832936"><img src="./new_files/p2223708974.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E02</div> <a href="http://subhd.com/a/315537" target="_blank">Empire.S01E02 | 嘻哈帝国 第1季 第2集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 47k　<span class="glyphicon glyphicon-save"></span> 5次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/Astral_King">Astral_King</a></b> (总共发布过20条字幕) @ <b><a href="http://subhd.com/zu/1" target="_blank">伊甸园字幕组</a></b><br>
<span class="label label-success">简体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/1" target="_blank"><span class="label label-success">伊甸园字幕组</span></a><br>
格式：srt 版本：Empire.2015.S01E02.HDTV.x264-KILLERS
<div class="d_title"><a href="http://subhd.com/d/25832936" class="gray">嘻哈帝国 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/3690447"><img src="./new_files/p2201530875.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S01E01</div> <a href="http://subhd.com/a/315536" target="_blank">海军罪案调查处洛杉矶篇第一季第一集人人版本精校 NCIS Los Angeles S01E01</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 37k　<span class="glyphicon glyphicon-save"></span> 4次　<span class="glyphicon glyphicon-time"></span> 4小时前　<a href="http://subhd.com/a/315536" class="blue"><span class="glyphicon glyphicon-comment"></span> 1</a> <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/jovi_83">jovi_83</a></b> (总共发布过1条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<br>
格式：ass 版本：NCIS.Los.Angeles.S01E01.Identity.720p.BluRay.x264-SiNNERS.mkv
<div class="d_title"><a href="http://subhd.com/d/3690447" class="gray">海军罪案调查处：洛杉矶 第一季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/1293816"><img src="./new_files/s3241925.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="http://subhd.com/a/315535" target="_blank">小蚁雄兵/蚁哥正传 Antz 1998</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 65k　<span class="glyphicon glyphicon-save"></span> 2次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/%E8%93%9D%E5%85%89%E5%BD%B1%E8%AE%AF">蓝光影讯</a></b> (总共发布过6条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/4" target="_blank"><span class="label label-success">TLF字幕组</span></a><br>
格式：srt 版本：Antz.1998.720p.AC3.HDTV-macmanda
<div class="d_title"><a href="http://subhd.com/d/1293816" class="gray">蚁哥正传</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25709385"><img src="./new_files/p2199363748.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="http://subhd.com/a/315534" target="_blank">怪兽：黑暗大陆</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 21k　<span class="glyphicon glyphicon-save"></span> 36次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/feng0571hz">feng0571hz</a></b> (总共发布过389条字幕)<br>
<span class="label label-default">英文</span> <span class="label label-default">官方译本</span>
<br>
格式：srt 版本：Monsters.2.Dark.Continent.2014.720p.WEB-DL.x264.AC3-EVO
<div class="d_title"><a href="http://subhd.com/d/25709385" class="gray">怪兽：黑暗大陆</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/24750933"><img src="./new_files/movie-default-small.gif"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="movie">电影</div> <a href="http://subhd.com/a/315533" target="_blank">沃尔特</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 27k　<span class="glyphicon glyphicon-save"></span> 1次　<span class="glyphicon glyphicon-time"></span> 4小时前 <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/feng0571hz">feng0571hz</a></b> (总共发布过389条字幕)<br>
<span class="label label-default">英文</span> <span class="label label-default">官方译本</span>
<br>
格式：srt 版本：Walter.2015.720p.WEB-DL.DD5.1.H.264-PLAYNOW
<div class="d_title"><a href="http://subhd.com/d/24750933" class="gray">Walter</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="box">
<div class="pull-left lb_l">
<a href="http://subhd.com/d/25757189"><img src="./new_files/p2198888069.jpg"></a>
</div>
<div class="pull-left lb_r">
<h4>
<div class="show1">S05E14</div> <a href="http://subhd.com/a/315532" target="_blank">The Walking Dead S05E14《行尸走肉》第5季第14集</a>
</h4>
<div style="clear:both"></div>
<span class="glyphicon glyphicon-file"></span> 144k　<span class="glyphicon glyphicon-save"></span> 1422次　<span class="glyphicon glyphicon-time"></span> 4小时前　<span class="glyphicon glyphicon-star red"></span> <b class="red">10.0分</b> <span class="gray">（7人评分）</span> <br><span class="glyphicon glyphicon-user"></span> <b><a href="http://subhd.com/u/matin">matin</a></b> (总共发布过213条字幕)<br>
<span class="label label-info">双语</span> <span class="label label-success">简体</span> <span class="label label-primary">繁体</span> <span class="label label-default">英文</span> <span class="label label-default">字幕翻译</span>
<a href="http://subhd.com/zu/14" target="_blank"><span class="label label-success">YYeTs字幕组</span></a><br>
格式：srt , ass 版本：The.Walking.Dead.S05E14.720p.HDTV.x264-Killer
<div class="d_title"><a href="http://subhd.com/d/25757189" class="gray">行尸走肉 第五季</a></div>
</div>
<div style="clear:both"></div>
</div>
<div class="text-center"><ul class="pagination"><li class="active"><a href="http://subhd.com/subs#">1</a></li><li><a href="http://subhd.com/subs/new/page/2">2</a></li><li><a href="http://subhd.com/subs/new/page/3">3</a></li><li><a href="http://subhd.com/subs/new/page/4">4</a></li><li><a href="http://subhd.com/subs/new/page/5">5</a></li><li><a href="http://subhd.com/subs/new/page/6">6</a></li><li><a href="http://subhd.com/subs/new/page/2">&gt;</a></li></ul></div>
</div>
<div class="col-md-3">
 
<div style="padding:50px 0 0 0;"><b>一周字幕达人</b></div>
<ul class="r_slist">
<li>
<a href="http://subhd.com/u/matin" target="_blank">matin</a> <div class="pull-right gray">21138</div>
</li>
<li>
<a href="http://subhd.com/u/%E5%BF%83%E7%94%9F" target="_blank">心生</a> <div class="pull-right gray">13122</div>
</li>
<li>
<a href="http://subhd.com/u/feng0571hz" target="_blank">feng0571hz</a> <div class="pull-right gray">9254</div>
</li>
<li>
<a href="http://subhd.com/u/79186643" target="_blank">79186643</a> <div class="pull-right gray">4584</div>
</li>
<li>
<a href="http://subhd.com/u/%E6%B8%85%E9%87%8E" target="_blank">清野</a>（<a href="http://subhd.com/zu/31">TopGear字幕组</a>） <div class="pull-right gray">4308</div>
</li>
<li>
<a href="http://subhd.com/u/%E9%93%81%E8%9B%8B" target="_blank">铁蛋</a> <div class="pull-right gray">4036</div>
</li>
<li>
<a href="http://subhd.com/u/%E6%9E%81%E5%85%89%E5%AD%97%E5%B9%95%E7%BB%84" target="_blank">极光字幕组</a>（<a href="http://subhd.com/zu/13">极光字幕组</a>） <div class="pull-right gray">3535</div>
</li>
<li>
<a href="http://subhd.com/u/FIX%E5%AD%97%E5%B9%95%E4%BE%A0" target="_blank">FIX字幕侠</a>（<a href="http://subhd.com/zu/28">F.I.X字幕侠</a>） <div class="pull-right gray">2817</div>
</li>
<li>
<a href="http://subhd.com/u/GibbsArmy" target="_blank">GibbsArmy</a>（<a href="http://subhd.com/zu/11">GA字幕组</a>） <div class="pull-right gray">2266</div>
</li>
<li>
<a href="http://subhd.com/u/%E7%94%B5%E6%B3%A2%E5%AD%97%E5%B9%95%E7%BB%84" target="_blank">电波字幕组</a>（<a href="http://subhd.com/zu/7">电波字幕组</a>） <div class="pull-right gray">1939</div>
</li>
<li>
<a href="http://subhd.com/u/%E5%B0%8F%E7%8B%BC" target="_blank">小狼</a>（<a href="http://subhd.com/zu/14">YYeTs字幕组</a>） <div class="pull-right gray">1875</div>
</li>
<li>
<a href="http://subhd.com/u/Krimis%E4%B8%B6%E5%8D%97%E7%93%9C" target="_blank">Krimis丶南瓜</a> <div class="pull-right gray">1656</div>
</li>
<li>
<a href="http://subhd.com/u/%E6%9F%AF%E5%8F%AB%E5%85%BD" target="_blank">柯叫兽</a> <div class="pull-right gray">1524</div>
</li>
<li>
<a href="http://subhd.com/u/%E8%B6%85%E4%BD%93" target="_blank">超体</a> <div class="pull-right gray">1430</div>
</li>
<li>
<a href="http://subhd.com/u/hayden" target="_blank">hayden</a> <div class="pull-right gray">1414</div>
</li>
<li>
<a href="http://subhd.com/u/%E6%97%B6%E5%B7%AE%E9%9B%AA" target="_blank">时差雪</a>（<a href="http://subhd.com/zu/1">伊甸园字幕组</a>） <div class="pull-right gray">1312</div>
</li>
<li>
<a href="http://subhd.com/u/frtvs" target="_blank">frtvs</a>（<a href="http://subhd.com/zu/6">风软字幕组</a>） <div class="pull-right gray">1128</div>
</li>
<li>
<a href="http://subhd.com/u/%E9%A3%94%E9%BA%9F" target="_blank">飔麟</a>（<a href="http://subhd.com/zu/19">圣城家园SCG字幕组</a>） <div class="pull-right gray">1109</div>
</li>
<li>
<a href="http://subhd.com/u/SSK%E5%AD%97%E5%B9%95%E7%BB%84" target="_blank">SSK字幕组</a>（<a href="http://subhd.com/zu/8">SSK字幕组</a>） <div class="pull-right gray">1098</div>
</li>
<li>
<a href="http://subhd.com/u/%E6%97%A0%E8%81%8A%E8%80%81%E7%94%9F" target="_blank">无聊老生</a> <div class="pull-right gray">1016</div>
</li>
</ul>
<div style="padding:50px 0 0 0;"><b>热门字幕</b></div>
<ul class="r_slist">
<li>
<a href="http://subhd.com/a/315475">星际穿越 Interstellar (2014) 【蓝光】</a>
</li>
<li>
<a href="http://subhd.com/a/315191">TopGear S22E07 720P 中英简繁字幕 TopGear字幕组制作</a>
</li>
<li>
<a href="http://subhd.com/a/315474">星际穿越 Interstellar</a>
</li>
<li>
<a href="http://subhd.com/a/315121">Shameless 无耻家族 S05E08 第五季第八集 中英双语特效字幕 【极光字幕组】</a>
</li>
<li>
<a href="http://subhd.com/a/315228">Marvel's Agents of S.H.I.E.L.D S02E12神盾局特工 第2季第12集【普版+720共轴 初校】</a>
</li>
<li>
<a href="http://subhd.com/a/315522">【电波字幕组 蓝光精校 特效双语】星际穿越 Interstellar</a>
</li>
<li>
<a href="http://subhd.com/a/315288">帕丁顿熊</a>
</li>
<li>
<a href="http://subhd.com/a/315344">生活大爆炸第八季第十八集the big bang threThe Big Bang Theory S08E18</a>
</li>
<li>
<a href="http://subhd.com/a/315532">The Walking Dead S05E14《行尸走肉》第5季第14集</a>
</li>
<li>
<a href="http://subhd.com/a/315242">Chicago Fire S03E17芝加哥烈焰 第三季第十七集</a>
</li>
<li>
<a href="http://subhd.com/a/315285">Person of Interest S04E17 / 凶嫌追缉录 第四季 第17集</a>
</li>
<li>
<a href="http://subhd.com/a/315171">法老与众神 Exodus.Gods.and.Kings.2014.720p.BluRay.X264-AMIABLE</a>
</li>
<li>
<a href="http://subhd.com/a/315263">NCIS S12E17 GA初校版</a>
</li>
<li>
<a href="http://subhd.com/a/315153">【二次校对版特效双语Sup】霍比特人3：五军之战The Hobbit: The Battle of the Five Armies.FIX字幕侠</a>
</li>
<li>
<a href="http://subhd.com/a/315163">Better Call Saul S01E06绝命律师 第一季第六集初校字幕</a>
</li>
<li>
<a href="http://subhd.com/a/315499">星际穿越/星际空间/星际效应(台)/星际启示录(港)</a>
</li>
<li>
<a href="http://subhd.com/a/315241">Perception S03E14罪案第六感第三季第十四集【HDTV】</a>
</li>
<li>
<a href="http://subhd.com/a/315359">Into the woods 魔法黑森林</a>
</li>
<li>
<a href="http://subhd.com/a/315520">[星际穿越].Interstellar.2014.1080p.BluRay.x264.DTS-RARBG.国语配音特效字幕</a>
</li>
<li>
<a href="http://subhd.com/a/315358">罪恶黑名单 第2季第15集 The Blacklist S02E15</a>
</li>
<li>
<a href="http://subhd.com/a/315295">NCIS.Los.Angeles.S06E17 海军罪案调查处:洛杉矶 第六季 第17集</a>
</li>
<li>
<a href="http://subhd.com/a/315156">Scorpion S01E168《天蝎》第一季第十八集[初版]</a>
</li>
<li>
<a href="http://subhd.com/a/315135">The Good Wife S06E14傲骨贤妻 第6季第14集</a>
</li>
<li>
<a href="http://subhd.com/a/315183">坚不可摧/永不屈服/非凡生命历</a>
</li>
<li>
<a href="http://subhd.com/a/315349">【TLF字幕组】法老与众神/出埃及记：天地王者/出埃及记：神王帝国/出埃及记：诸神与国王/摩西/Exodus: Gods and Kings</a>
</li>
<li>
<a href="http://subhd.com/a/315460">Banshee S03E10黑吃黑 第三季第十集</a>
</li>
<li>
<a href="http://subhd.com/a/315357">福尔摩斯：演绎法 第3季第17集【普版+720 初校】 Elementary S03E17</a>
</li>
<li>
<a href="http://subhd.com/a/315225">追寻人生 第一季第十九集 Chasing Life S01E19</a>
</li>
<li>
<a href="http://subhd.com/a/315440">12.Monkeys.S01E09十二猴子第1季第9集</a>
</li>
<li>
<a href="http://subhd.com/a/315134">行尸走肉 The Walking Dead 5x13 【Forget】</a>
</li>
</ul>
</div>
</div>
</div><div style="clear:both;padding-top:30px;"></div>
<div style="background:white;padding-top:10px;padding-bottom:5px;">
<div class="container">
<div>
<script async="" src="./new_files/adsbygoogle.js"></script>
 
<ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-0665364311298141" data-ad-slot="6995694333" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:970px;background-color:transparent"><ins id="aswift_1_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:970px;background-color:transparent"><iframe width="970" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
</div>
</div>
<div id="footer">
<div class="container">
<div class="row">
<div class="col-md-8 hidden-xs"><a href="http://subhd.com/" target="_blank">SubHD.com</a> 成立于2014年11月 0.0109</div>
<div class="col-md-4 text-right"><a href="http://subhd.com/feed" target="_blank">RSS订阅</a>[<a href="http://subhd.com/feed/feedmovie" target="_blank">电影</a>|<a href="http://subhd.com/feed/feedtv" target="_blank">电视</a>] | <a href="mailto:subhdinfo@gmail.com" target="_blank">联系我们</a></div>
</div>
</div>
</div>
<div style="display:none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F36f45ef10337991c93242d418c95baa3' type='text/javascript'%3E%3C/script%3E"));
</script><script src="./new_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=36f45ef10337991c93242d418c95baa3" target="_blank"><img border="0" src="./new_files/21.gif" width="20" height="20"></a>
</div>
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>

</body></html>