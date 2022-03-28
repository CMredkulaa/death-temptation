<?php
header("content-type:text/html;charset=utf-8");

$dsn="mysql:dbname=test;host=localhost";

$db_user='harry';

$db_pass='1234567';

try{
$pdo=new PDO($dsn,$db_user,$db_pass);

}catch(PDOException $e){
echo '数据库连接失败'.$e->getMessage();

}
?>
