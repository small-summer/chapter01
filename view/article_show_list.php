<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>展示具体内容</title>
<link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<div><img src="./image/title.png"></div>
<div>
	<h2><?php echo $rst['title'];?></h2>
	<span>时间：<?php echo $rst['addtime'];?></span>
	<span>分类：<?php echo $rst['cname'];?></span>
	<span>作者：<?php echo $rst['author'];?></span>
</div>
<div><?php echo $rst['content'];?></div>
</div>
<!-- 引入JQ核心文件，bootstrapJS文件 -->
<script src="./lib/JQuery/jquery-1.11.0.min.js"></script>
<script src="./lib/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
