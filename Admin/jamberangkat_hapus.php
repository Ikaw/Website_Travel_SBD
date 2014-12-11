<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_jam = $_GET['id_jam'];
$perintah = "DELETE from jamberangkat where id_jam = '$id_jam'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jamberangkat.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>