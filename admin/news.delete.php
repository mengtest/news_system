<?php
require_once('../config.php');
require_once('../header.php');

$newsid = $_GET['id'];

$sql = "DELETE FROM newscont WHERE id = $newsid";
$result = $pdo->exec($sql);
var_dump($result);

/*$err = $pdo->errorInfo();
var_dump($err);*/
if($result){
    echo "<script>alert('删除成功');window.location.href='news.manage.php'</script>";
}else{
    echo "<script>alert('删除失败');window.location.href='news.manage.php'</script>";
}
require_once('../bottom.php');
?>
