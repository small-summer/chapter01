<?php
require './init.php';
$id=isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id){
    $sql="delete from cms_article where id=$id";
    $db->query($sql);
    header("location:index.php");
}
?>