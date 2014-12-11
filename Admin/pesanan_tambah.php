<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_pesanan = $_POST['idtxt'];
$no_kursi = $_POST['noktxt'];
$tanggal_pesan = $_POST['tgltxt'];
$id_member = $_POST['memlist'];
$id_jadwal = $_POST['jadlist'];
$perintah = "INSERT INTO pesanan (id_pesanan,no_kursi,tanggal_pesan,id_member,id_jadwal)
VALUES ('$id_pesanan','$no_kursi','$tanggal_pesan','$id_member','$id_jadwal')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:pesanan.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>