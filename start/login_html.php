<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>验证码的验证</title>
<link rel="stylesheet" href="../lib/Bootstrap/css/bootstrap.min.css" />
<style>
@font-face {
	font-family:book;
	src: url('../fonts/MiFie-Web-Font.eot') format('embedded-opentype'),
	url('../fonts/MiFie-Web-Font.svg') format('svg'),
	url('../fonts/MiFie-Web-Font.ttf') format('truetype'),
	url('../fonts/MiFie-Web-Font.woff') format('woff');
}
@font-face{
	font-family:KK;
	src:url('../res/TAOXIN.ttf');
}
.hh{
	margin-top:30px;
	
	text-align:center;
}
.hh>span{
	margin:5px;
}
.title{
	font-family:KK;
	font-size:24px;
	color:orange;
}
.use_icon{
	font-family: book;
	font-weight:bold;
	font-size:28px;
	color:red;
}
 form{
	margin:0 auto;
    margin-top:50px;
    border:2px solid gray;
 	box-shadow:0 0 2px skyblue;
    background: linear-gradient(to bottom left,#e2e2e2 20%,#B2DBA1,#C8E5BC);  
    width:500px;
    height:500px;
 	font-weight:bold;
 	font-family:KK;
    }
  ul{
  	width:540px;
  	height:300px;
  }
   li{
	list-style:none;
 	padding:10px;
   	margin:8px;
   	font-weight:bold;
   	margin-left:10px;
   }
   input[type="submit"]{
	padding:5px 8px;
   	font-weight:bold;
   	width:80px;
   	height:30px;
   	font-size:18px;
   	box-shadow:0px 0px 5px skyblue;
   	border:none;
   	background-color:beige;
   	
   }
 li:nth-child(4){
	font-size:18px;
   }
li:nth-child(5){
	margin-right:60px;
   	float:right;
   }
   
.use_icon_E906::before{
	content: "\e906";
}
label{
	font-size:20px;
}
#code_img{
	padding:5px 8px;
}
</style>
</head>
<body>
<form action="checkLogin.php" method="post">
<div class="hh"><span class="use_icon use_icon_E906"></span><span class="title">用户登录</span></div>
<ul>
	<li><label>用户名:</label><input type="text" name="username" value="" /></li>
	<li><label>密码:</label><input type="password" name="password" value="" /></li>
	<li><label>验证码:</label><input type="text" name="captcha" /></li>
	<li><img id="code_img" src="code.php" /><a href="#" id="change">看不清，换一张</a></li>
	<li><input type="submit" value="登录" /></li>
</ul>
</form>
<script>
	var change=document.getElementById("change");
	var img=document.getElementById("code_img");
	change.onclick=function(){
		//增加一个随机参数，防止图片缓存
		img.src="code.php?t="+new Date();
		return false;
	}
</script>
<script src="../lib/JQuery/jquery-1.11.0.min.js" ></script>
<script src="../lib/Bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>