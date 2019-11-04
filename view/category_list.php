<?php require 'header.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>分类信息列表</title>
<style type="text/css">
.box{
	margin: 0 auto;
	font-weight:800;
	width:600px;
	height: 800px;
	
}
#myform1{
	width:400px;
	margin: 0 auto;
	margin-top:20px;
}
input[type="submit"]{
	text-align: center;
	width: 80px;
	font-weight: bold;
}
td{
	padding: 5px;
}
table{
	width: 600px;
	height: 300px;
	border:1px solid gainsboro;
	margin: 0 auto;
	text-align:center;
	background-color: beige;
}
tr:nth-child(1){
	background-color: skyblue;
	width: 100px;
	height: 50px;
	text-align: center;
}
td>input[type="text"]{
	text-align: center;
	border:none;
}
input[type="submit"]{
	border:none;
	padding:5px 10px;
	background:lolive;
}
.btn1{
	margin:10px  50px;
}
.a1{
	list-style:none;
	font-weight:bold;
	margin-left:500px;
	
}
</style>
</head>
<body>
<div class="box">
<!-- 添加文章分类表单 -->
<form action="?a=category_add" method="post" id="myform1">
	分类名称:<input type="text" name="name" />
					<input type="submit"  value="添加" />
</form>
<!-- 展示文章分类信息 -->
<form action="?a=category_sort" method="post" >
<table>
		<tr><td>排序</td><td>分类名称</td><td>相关操作</td></tr>
		<?php foreach($category as $v): ?>
		<tr>
			<td><input type="text"  name="id[<?php echo $v['id']; ?>]" value="<?php echo $v['sort']; ?>" size="1" /></td>
			<td><?php echo $v['name']; ?></td>
			
			<td><a href="#">删除</a>| 编辑</td>
		</tr>
		<?php endforeach; ?>
</table>
<div class="btn1"><input type="submit" value="保存排序"  /></div>
</form>
<!-- 删除文章分类 -->
<div class="a1">
	<a href="?id=<?php echo $v['id'];?>&a=category_del" onclick="return confirm('确定要删除该文章分类吗？')">删除</a>
</div>

</div>
</body>
</html>