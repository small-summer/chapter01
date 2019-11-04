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
.use_icon{
	font-family: book;
	color:red;
}
 form{
	margin:0 auto;
    text-align:center;
    margin-top:50px;
    border:1px solid gray;
    background:#B2DBA1;
    width:600px;
    height:300px;
    }
  ul{
  	width:450px;
  	height:300px;
  }
   li{
	list-style:none;
   	float:left;
 	padding:10px;
   }
   input[type="submit"]{
	padding:5px 8px;
   	font-weight:bold;
   	width:80px;
   	height:30px;
   	font-size:18px;
   	box-shadow:0px 0px 5px skyblue;
   	border:none;
   }
   li:nth-child(4){
	float:right;
   }
.use_icon_E906::before{
	content: "\e906";
}
</style>
</head>
<body>
<form action="checkLogin.php" method="post">
<h2><span class="use_icon use_icon_E906"></span>用户登录</h2>
<ul>
	<li>用户名：<input type="text" name="username" value="" /></li>
	<li>密码:<input type="password" name="password" value="" /></li>
	<li>验证码:<input type="text" name="captcha" /><img id="code_img" src="code.php" /><a href="#" id="change">看不清，换一张</a></li>
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