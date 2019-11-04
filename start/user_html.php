<!doctype html>
<html>
<meta charset="utf-8">
<head>
<title>会员中心</title>
<style type="text/css">
.box{
	font-weight:bold;
	margin:0 auto;
	margin-top:30px;
	text-align:center;
	border:2px solid gray;
	box-shadow:0 0 2px skyblue;
	width:500px;
	height:500px;
/*     background: linear-gradient(to bottom left,#fff 30%,#B2DBA1,plum);  */

}
img{
	width:100px;
	height:100px;
}
span{
	font-size:24px;
}
#u_logo{
	margin-top:60px;
	margin-bottom:30px;
	color:orange;
}
.delu{
	font-weight:bold;
	padding:5px;
}
#u_delu{
	font-size:20px;
}
 #run img  
{  
 		width: 80px;  
  		height: 80px;  
 		right:-10px;  
 		bottom: -10px;  
  		display:block;  
  		position: relative;/*相对定位*/  
 		animation: dong 5s linear infinite; 			 
 }  

 @keyframes dong{  
 			0%{right: -10px;bottom:-10px;width:100px;height: 100px;}  
             50%{right: 60px;top:80px;width:100px;height: 100px;}  
 	          100%{right:60px;top:-150px;width:100px;height: 100px;}
 }  
#di>img{
	width:150px;
	height:140px;
	margin-right:0px;
	margin-bottom:0px;
	float:right;
}
#di
{
	animation: N2 3s alternate linear infinite;
}
@keyframes N2{
	from{transform: rotateY(180deg);box-shadow:0 0 2px skyblue;}
	to{transform: rotateY(-180deg);box-shadow:0 0 4px skyblue;}
}
</style>
</head>
<body>
<div class="box">
		<div id="u_logo"><span>会员中心</span><img alt="" src="../image/icon1.png" /></div>
		<?php if ($login): ?>
			<div><?php $userinfo['username']; ?>您好，欢迎来到会员中心。<a href="?action=logout" >退出</a></div>
			<?php else : ?>
		<div id="u_delu">您还未登录，请先<a href="login_html.php" class="delu">登录</a>或<a href="./register.html"  class="delu">注册新用户</a>。</div>
		<?php endif; ?>
		<div id="run"><img src="../image/11.png"/></div>
		<div id="di"><img src="../image/xiao.png" /></div>
		
</div>
</body>
</html>
