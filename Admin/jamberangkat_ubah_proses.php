<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE jamberangkat set jam = '$_POST[jamtxt]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jamberangkat.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>