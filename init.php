<?php
header("content-type:text/html;charset=utf-8");
require './lib/MYSQLPDO.class.php';
//配置数据库连接信息
$dbConfig=array('user'=>'root','pass'=>'123456','dbname'=>'itcast2');
//实例化MYSQLPDO类
$db=MYSQLPDO::getInstance($dbConfig);
//保存错误信息
$error=array();
?>