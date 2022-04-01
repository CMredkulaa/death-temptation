<?php

    try{
        $PDO=new PDO('mysql:host=localhost;dbname=TEST',"root","root");
    }catch(PDOException $e){
        echo "数据库连接失败".$e->getMessage();;
    }
?>
