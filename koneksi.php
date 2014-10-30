<?php
 
$hostmysql = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "travel";  

$conn = mysql_connect($hostmysql,$username,$password); 
if($conn)
{
	$buka = mysql_select_db($database);
	if (!$buka)
	{
		die ("Database tidak dapat dibuka");
	}
} else 
{
	die ("Server MySQL tidak terhubung");
}
?>