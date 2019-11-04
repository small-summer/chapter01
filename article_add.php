<?php
//初始化数据库操作类
require './init.php';
//sql语句，文章分类
$sql="select id,name  from cms_category order by sort";
$category=$db->fetchAll($sql);

if (!empty($_POST)){
    //获取文章分类
    $data['cid']=isset($_POST['category']) ? abs(intval($_POST['category'])) : 0;
    //获取文章标题
    $data['title']=isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])): '';
    //获取作者
    $data['author']=isset($_POST['author']) ? trim(htmlspecialchars($_POST['author'])): '';
    //获取文章内容
    $data['content']=isset($_POST['content']) ? trim($_POST['content']) : '';
    if (empty($data['cid']) || empty($data['title']) || empty($data['author'])){
        $error[]='文章分类，标题，作者不能为空';
    }else {
        $sql="insert into cms_article(title,content,author,addtime,cid) values(:title,:content,:author,now(),:cid)";
        $db->data($data)->query($sql);
        header("location:index.php");
    }   
}


//载入html模板文件
define('APP', 'itcast2');
require './view/article_add_list.php';
?>