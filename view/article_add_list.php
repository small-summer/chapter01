<?php require 'header.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>添加文章</title>
	<script src="./lib/umeditor/third-party/jquery.min.js"></script>
	<script src="./lib/umeditor/umeditor.config.js"></script>
	<script src="./lib/umeditor/umeditor.min.js"></script>
	<script src="./lib/umeditor/lang/zh-cn/zh-cn.js"></script>
	<link href="./lib/umeditor/themes/default/css/umeditor.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="./lib/Bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript">
	window.onload=function(){
		$(function(){
			UM.getEditor('myEditor');
		});
	}
	</script>
</head>
<body>
<div class="container">
<form method="post">
	文章分类:<select name="category">
						<?php foreach ($category as $v): ?>
						<option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
						<?php endforeach; ?>
				</select>
	<a href="./category.php">分类管理</a>
	标题:<input type="text" name="title" />
	作者:<input type="text" name="author" />
    <!-- 	在线编辑器代码 -->
	<div>
		<script type="text/plain" id="myEditor" style="width: 1025px;height:250px;" name="Mycontent">
            <p>请在这里编写文章.......</p>
        </script>
	</div>
     <input type="submit" value="提交"  />
     <input type="button" value="取消"  onclick="{if(confirm('确定要取消添加文章吗？')）{window.location.href='index.php';} return false; }"/> 
</form>
</div>
<!-- 引入JQ核心文件，bootstrapJS文件 -->
<script src="./lib/JQuery/jquery-1.11.0.min.js"></script>
<script src="./lib/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




