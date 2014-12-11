<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_jadwal = $_GET['id_jadwal'];
$perintah = "DELETE from jadwal where id_jadwal = '$id_jadwal'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jadwal.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>