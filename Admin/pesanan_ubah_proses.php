<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE pesanan set no_kursi='$_POST[noktxt]',tanggal_pesan='$_POST[tgltxt]',id_member = '$_POST[memlist]' ,id_jadwal = '$_POST[jadlist]' where id_pesanan = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:pesanan.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>