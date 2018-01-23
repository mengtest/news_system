<?php
require_once('../config.php');
require_once('../header.php');

$modify_news_id = $_POST['newsid'];
$catid = $_POST['catid'];
$title = $_POST['title'];
$digest = $_POST['digest'];
$origin = $_POST['origin'];
$content = $_POST['content'];
$author= $_POST['author'];
$updatetime= time();


$sql = "UPDATE newscont SET 
catid='".$catid."',title='".$title."',digest='".$digest."',origin='".$origin."',content='".$content."',author='".$author."',updatetime='".$updatetime."' WHERE id='".$modify_news_id."'";
$result = $pdo->exec($sql);
var_dump($result);
/*
$err = $pdo->errorInfo();
var_dump($err);*/

if($result){
   // echo ("<script>alert('新闻修改成功');window.location.href='"."news.modify.php?id=$modify_news_id"."'</script>");
    echo ("<script>alert('新闻修改成功');window.location.href='news.manage.php'</script>");
}else{
    echo "<script>alert('新闻修改失败');window.location.href='news.manage.php'</script>";
}
require_once('../bottom.php');
?>

