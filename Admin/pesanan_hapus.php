<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_pesanan = $_GET['id_pesanan'];
$perintah = "DELETE from pesanan where id_pesanan = '$id_pesanan'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:pesanan.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>