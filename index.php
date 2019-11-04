<?php
header("content-type:text/html;charset=utf-8");
//初始化数据库操作类
require './init.php';
//载入分页页面
require './lib/page.class.php';
//获取当前页码
$page=isset($_GET['page']) ? intval($_GET['page']) : 1;

//获取要查询的分类id,0表示全部
$cid=isset($_GET['cid']) ? intval($_GET['cid']) : 0;
//获取查询列表条件
$where='';
if ($cid) $where="$where cid=$cid";

//获取总记录数
$sql="select count(*) as total from cms_article $where ";
$results=$db->fetchRow($sql);
$total=$results['total'];
//实例化分页类
$page=new page($total,3, $page);
$limit=$page->getLimit();
$page_html=$page->showPage();
//分页获取文章列表
$sql="select id,title,content,author,addtime,cid from cms_article $where order by addtime desc limit $limit";
$articles=$db->fetchAll($sql);
//mbstring扩展截取文章内容摘要
foreach ($articles as $k=>$v){
    //mb_substr(内容，开始位置，截取位置，字符集)
    $articles[$k]['content']=mb_substr(trim(strip_tags($v['content'])), 0,120,'utf-8');
}
define('APP', 'itcast2');
require './view/index_html.php';
?>
