<?php
$hostname="your_hostname";
$username="your_username";
$password="your_password";
$database="your_database";
$GD=mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES UTF8");
mysql_query("SET CHARACTER_SET_CLIENT='utf8'");
mysql_query("SET CHARACTER_SET_RESULTS='utf8'");
?>