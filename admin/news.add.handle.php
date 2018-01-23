<?php
require_once('../config.php');
require_once('../header.php');

$catid = $_POST['catid'];
$title = $_POST['title'];
$digest = $_POST['digest'];
$origin = $_POST['origin'];
$content = $_POST['content'];
$author= $_POST['author'];
$inserttime= time();


$sql = "INSERT INTO newscont VALUES(null,'".$catid."','".$title."','".$digest."','".$origin."','".$content."','".$author."',0,'".$inserttime."',0)";
$result = $pdo->exec($sql);
/*var_dump($result);*/

/*$err = $pdo->errorInfo();
var_dump($err);*/
if($result){
    echo "<script>alert('新闻发布成功');window.location.href='news.manage.php'</script>";
}else{
    echo "<script>alert('新闻发布失败');window.location.href='news.add.php'</script>";
}
require_once('../bottom.php');
?>
