<?php
require './init.php';
//获取文章id
$id=isset($_GET['id']) ? intval($_GET['id']) : 0;
//取出文章分类
$sql="select id,name from cms_category order by sort limit 10";
$category=$db->fetchAll($sql);
if ($id){
    if (!empty($_POST)){
        //获取文章分类
        $data['cid']=isset($_POST['category']) ? abs(intval($_POST['category'])) : 0;
        //获取文章标题
        $data['title']=isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])) : '';
        //获取作者
        $data['author']=isset($_POST['author']) ? trim(htmlspecialchars($_POST['author'])) : '';
        //获取文章内容
        $data['content']=isset($_POST['content']) ? trim($_POST['content']) : '';
        if (empty($data['cid']) || empty($data['title']) || empty($data['author'])){
            $error[]='文章分类，标题，作者不能为空';
        }else{
            $sql="update cms_article set title=:title,content=:content,author=:author,cid=:cid where id=$id";
            $db->data($data)->query($sql);
            //跳转到首页
            header("location:index.php");
        }
    }
    $sql="select title,content,author,cid from cms_article where id=$id";
    $rst=$db->fetchRow($sql);
    define('APP', 'itcast2');
    require './view/article_editor_list.php';
}
?>