<?php

$dbms="mysql";
$host='localhost';
$dbName='test';
$user='root';
$pass='';
$dsn="$dbms:host=$host;dbname=$dbName;charset=utf8";

try{
    $pdo = new PDO($dsn,$user,$pass);
    //print_r( "连接成功");
  /*  foreach ($dbn->query('SELECT * from newscat') as $row){
        print_r($row);
    }*/
}catch (PDOException $e){
    die ("Error!: " . $e->getMessage() . "<br/>");
}