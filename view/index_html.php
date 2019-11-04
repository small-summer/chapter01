<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>文章管理系统展示</title>
<link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css" />
<style type="text/css">
/* 头部图片 */
.pic{
	margin: 0 auto;
	width: 800px;
	padding: 20px;
}
.pic>img{
	width:120px;
	height:120px;
}
.carousel{
	background: white;
}
/*导航栏*/                                                           
.article_nav{
	background-color: #fff;
	border: none;
	border-bottom: 1px solid #ccc;
	margin-bottom: 0;
}
.article_nav .navbar-brand{
	color: #777;
	height: 80px;
	line-height: 50px;
}
.article_nav .navbar-brand>img{
	width: 240px;
	height: 60px;
}
.article_nav .navbar-brand:hover,
.article_nav .navbar-brand:focus{
	color: #5E5E5E;
	background-color: transparent;
}
.article_nav .navbar-text{
	color: #777;
}
.article_nav .navbar-nav>li{
	padding-left:15px;
}
/*设置导航栏每个菜单的样式*/
.article_nav .navbar-nav>li>a{
	color: #fff;
	height: 80px;
	line-height: 50px;
	font-weight: bold;
	font-size: 24px;
	padding: 25px;
}
.article_nav .navbar-nav>li>a:hover,
.article_nav .navbar-nav>li>a:focus{
	color: #333;
	background-color: transparent;
	border-bottom: 3px solid #EB9316;
}
/*设置活动菜单和非活动菜单的样式*/
.article_nav .navbar-nav>.active>a,
.article_nav .navbar-nav>.active>a:hover,
.article_nav .navbar-nav>.active>a:focus{
	color: #fff;
	background-color: transparent;
	background-color: lightgray;
	border-bottom: 3px solid #9ACFEA;
}

/*设置汉堡按钮的样式*/
.article_nav .navbar-toggle{
	border-color: #ddd;
	margin-top: 23px;
	margin-bottom: 23px;
}
.article_nav .navbar-toggle:hover,
.article_nav .navbar-toggle:focus{
	background-color: #ddd;
}
.article_nav .navbar-toggle .icon-bar{
	background-color: #888;
}
.article_nav .navbar-collapse,
.article_nav .navbar-form{
	background-color: #e7e7e7;
}
.article_nav .navbar-nav>.open>a,
.article_nav .navbar-nav>.open>a:hover,
.article_nav .navbar-nav>.open>a:focus{
	color: #555;
	background-color: #e7e7e7;
}
/*当屏幕小于或等于767px时菜单的样式*/
@media (max-width:767px) {
	.article_nav .navbar-nav .open .dropdown-menu>li>a{
		color: #777;
	}
	.article_nav .navbar-nav .open .dropdown-menu>li>a:hover,
	.article_nav .navbar-nav .open .dropdown-menu>li>a:focus{
		color: #333;
		background-color: transparent;
	}
	.article_nav .navbar-nav .open .dropdown-menu>.active>a,
	.article_nav .navbar-nav .open .dropdown-menu>.active>a:hover,
	.article_nav .navbar-nav .open .dropdown-menu>.active>a:focus{
		color: #555;
		background-color: #e7e7e7;
	}
	.article_nav .navbar-nav .open .dropdown-menu>.disabled>a,
	.article_nav .navbar-nav .open .dropdown-menu>.disabled>a:hover,
	.article_nav .navbar-nav .open .dropdown-menu>.disabled>a:focus{
		color: #ccc;
		background-color: transparent;
	}
}
.article_nav .navbar-link{
	color: #777;
}
.article_nav .navbar-link:hover{
	color: #333;
}
.article_nav .btn-link{
	color: #777;
}
.article_nav .btn-link:hover,
.article_nav .btn-link:focus{
	color: #333;
}
.article_nav .btn-link[disabled]:hover,
fieldset[disabled] .heima_nav .btn-link:hover,
.article_nav .btn-link[disabled]:focus,
fieldset[disabled] .heima_nav .btn-link:focus{
	color: #ccc;
}
.container{
	font-size:24px;
	font-weight:bold;
}
#p1{
	color:black;
	font-size:20px;
	
}
#p2>a{
	color:red;
}
#p3{
	border-bottom:1px dashed #ccc;
	padding-bottom:8px;
	color:#C0A16B;
	font-size:20px;
}

li{
	list-style:none;
}
li a:hover{
	text-decoration:none;
}
.page{
	text-align:center;
	margin:0 auto;
	padding-top:20px;
}
#ul_left{
	float:left;
}
#ul_right{
	font-size:18px;
	margin-left:150px;
}
.ar2>#fabu{
	border:1px dashed gray;
	width:200px;
	height:40px;
	text-align:center;
	padding:5px; 
	margin-top:5px;
}
#fabu>img{
	width:18px;
	height:18px;
	margin:5px;
	
}
.ar1{
    float:left;
	width:60%;
	height:400px;
	margin-left:120px;
}
.ar2{
	float:left;
	width:300px;
	height:400px;
}
.ar2>ul>li{
	padding:8px;
}
.ar2>ul>p{
	margin-top:5px;
}
</style>
</head>
<body>
<div class="container hidden-xs">
			<div class="carousel slide" id="myCarousel" data-ride = "carousel">
				<div class="carousel-inner">
					<div class="item active">
						<div class="pic">
							<img src="img/android.jpg"  alt=""/>
							<img src="img/java.jpg"  alt=""/>
							<img src="img/oc.jpg"  alt=""/>
							<img src="img/php.jpg"  alt=""/>
							<img src="img/ps.jpg"  alt=""/>
							<img src="img/sql.jpg"  alt=""/>
						</div>
					</div>
					<div class="item">
						<div class="pic">
							<img src="img/java.jpg"  alt=""/>
							<img src="img/oc.jpg"  alt=""/>
							<img src="img/php.jpg"  alt=""/>
							<img src="img/ps.jpg"  alt=""/>
							<img src="img/sql.jpg"  alt=""/>
							<img src="img/android.jpg"  alt=""/>
						</div>
					</div>
				</div>
				<!--轮播导航-->
				<a href="#myCarousel" role="button" class="carousel-control left" data-slide = "prev"></a>
				<a href="#myCarousel" role="button" class="carousel-control right" data-slide = "next"></a>
			</div>
		</div>

<div class="container ar1">
<ul>
	<?php foreach ($articles as $row): ?>
	<li id="ul_left"><span id="a"><a href="article_show.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></span>
	<span id="ul_right">
		<a href="article_editor.php?id=<?php echo $row['id'];?>">编辑</a>&nbsp;
		<a href="article_del.php?id=<?php echo $row['id'];?>"onclick="return confirm('确定要删除该文章吗?')">删除</a>
	</span>
	<p id="p1"><?php echo $row['content'];?></p>
	<p id="p2"><a href="article_show.php?id=<?php echo $row['id'];?>">单击查看全文&gt;&gt;</a></p>
	<p id="p3">发表时间：<span><?php echo $row['addtime'];?></span>
	作者：<span><?php echo $row['author'];?></span></p></li>
	<?php endforeach;?>
	<div class="page"><?php echo $page_html;?></div>
</ul>
</div>
<div class="container ar2">
<div id="fabu"><img src="img/more.png"><span>发表文章</span></div>
<ul>
	<p><img src="./img/two_arrow.jpg" />每周热文</p>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  /> php加载MySQL问题</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />Eclipse for PHP</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />PHP高手干货分享</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />PHP函数引用传参数组</li>
	
	<p><img src="./img/video_bg.jpg" />专栏推荐</p>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  /> Smartly在Thinkphp中的问题</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />PHP程序员求职</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />PHP的学习模式是怎样的</li>
	<li style="font-size:16px;"><img src="./img/arrow_up.jpg"  />喜报！广州传智PHP毕业就业率</li>
</ul>
</div>
<script src="./lib/JQuery/jquery-1.11.0.min.js"></script>
<script src="./lib/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>