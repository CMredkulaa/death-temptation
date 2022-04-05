<?php
    if(isset($_POST["login"])){
        session_start();
        require_once("connect.php");
        $username=$_POST["username"];
        $password=$_POST["password"];
        $uid=null;
        if($username==null||$password==null){
            echo '<script language="javascript">';
            echo 'alert("请输入账号密码！");';
            echo "location.href='index.html'";
            echo '</script>'; 
        }else{
            $stmt=$PDO->prepare("select * from admin where adminun=? and adminpw=?");
            $stmt->bindParam(1,$username);
            $stmt->bindParam(2,$password);
            $stmt->execute();
           if($stmt->rowCount()>0){
               echo "登录成功";
               $_SESSION['is_Login']="l0g1nconfirmed";
               header("Location:admin.php");
           }else{
                header('refresh:2,url=index.html');
                echo "密码或账号错误";
                exit;
           }
        }

    }
    

?>

