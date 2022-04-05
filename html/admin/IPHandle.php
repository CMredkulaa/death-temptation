<?php
// require_once("userInfo.php");
if(isset($_POST['IP'])&& filter_var($_POST['IP'], FILTER_VALIDATE_IP))
{
    $result = exec("ping 8.8.8.8 -c 3");
    echo $result;
}
else
{
    sleep(2);
    echo "Invalid input!,not allow to display!";
}
    
?>
