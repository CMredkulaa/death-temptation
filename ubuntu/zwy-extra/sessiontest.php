<?php
session_start();
// 存储 session 数据
$_SESSION['views']=100;
?>
 
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>
 
<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views'];
?>
</body>
</html>