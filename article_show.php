<?php
//初始化数据库操作类
require './init.php';
//获取展示文章的id
$id=isset($_GET['id']) ? intval($_GET['id']) : 0;
//取出文章分类
$sql="select id,name from cms_category order by sort limit 10";
$category=$db->fetchAll($sql);
if ($id){
    $sql="select title,content,author,addtime,cid from cms_article where id=$id";
    $rst=$db->fetchRow($sql);
    //获取分类名称
    $sql="select name from cms_category where id=".$rst['cid'];
    $cname=$db->fetchRow($sql);
    $rst['cname']=$cname['name'];
    define('APP', 'itcast2');
    require './view/article_show_list.php';
}
?>