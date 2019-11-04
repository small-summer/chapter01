<?php
header("Content-type:text/html;charset=utf-8");
session_start();
//判断session中是否存在用户信息
if (isset($_SESSION['userinfo'])){
    $login=true;
    $userinfo=$_SESSION['userinfo'];
}else {
    $login=false;
}
//用户退出
if (isset($_GET['action']) && $_GET['action']=='logout'){
    unset($_SESSION['userinfo']);//清除数据
    if (empty($_SESSION)) session_destroy();
    header('Location:login_html.php');
    die;
}
require 'user_html.php';
?>