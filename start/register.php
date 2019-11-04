<?php 
header("Content-type:text/html;charset=utf-8");
//接收表单数据
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//连接数据库,设置字符集，选择数据库
$link=mysqli_connect('localhost','root','123456');
if (!$link) {
    die("连接失败:".mysqli_connect_error());
}
mysqli_set_charset($link, "utf8");
$select_db=mysqli_select_db($link, "itcast1");


//过滤用户输入数据，防止SQL注入
$username=htmlspecialchars($username);
$email=htmlspecialchars($email);

//判断用户名是否已经存在
$sql="select id from user where username='$username' ";
$res=mysqli_query($link,$sql);
if((mysqli_fetch_row($res))!=false){
    die('用户名已存在');
}
//md5加密
$password=md5($password);
//拼接插入语句
 $sql2= "insert into user(username, password, email) values('$username','$password','$email')";
$res2=mysqli_query($link, $sql2);
 //释放资源
 mysqli_close($link);
header('location:checkLogin.php');
?>