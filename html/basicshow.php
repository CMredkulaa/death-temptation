<?php
exec("python3 winpymysqltest2.py");

require_once("connect.php");
$stmt = $PDO->prepare("select id,srcip,dt,packet_content from test");
$stmt->execute();

$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($result as $rows)
{
	echo $rows[id];
	echo $rows[srcip];
	echo $rows[dt];
	echo $rows[packet_content];
	echo "<br>";
}
?>
