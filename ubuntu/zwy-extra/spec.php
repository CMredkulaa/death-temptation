<?php
session_start();
if(isset($_SESSION["is_Login"])){
//    echo $_SESSION["is_Login"];
}
else{
//    echo "abc";
   header("Location:index.html");
}
require_once("connect.php");
$id = (int)($_SERVER["QUERY_STRING"]);
$stmt = $PDO->prepare("select packet_content from test where id = ?");
$stmt->bindParam(1,$id);
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($result as $rows)
{
    echo $rows['packet_content'];
}


?>