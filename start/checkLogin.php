<?php
header('content-type:text/html;charset=utf-8');
//开启session
session_start();
//获取用户输入的验证码字符串
$code=isset($_POST['captcha']) ? trim($_POST['captcha']) : '';
//判断session中是否存在验证码
if (empty($_SESSION['captcha_code'])) die('验证码已过期，请重新登录。');
//将字符串都转成小写然后在进行比较
if (strtolower($code)==strtolower($_SESSION['captcha_code'])){
    //跳转到登陆页面
    header('refresh:2;url=../index.php');
    die;
}else {
    echo '验证码错误';
}
//清除session数据
unset($_SESSION['captcha_code']);

?>