<?php
require_once("SQL_data.php");
$insertSQL=isset($_POST["S1"])<>NULL?$_POST["S1"]:"select * from test";
mysql_select_db($database,$GD);
$Result=mysql_query($insertSQL,$GD) or die(mysql_error());
while($r = mysql_fetch_assoc($Result))
	$output[]=$r;
print(json_encode($output,JSON_UNESCAPED_UNICODE));
mysql_close();

?>