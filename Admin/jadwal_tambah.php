<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_jadwal = $_POST['idtxt'];
$id_trayek = $_POST['tralist'];
$id_jam = $_POST['jamlist'];
$perintah = "INSERT INTO jadwal (id_jadwal,id_trayek,id_jam)
VALUES ('$id_jadwal','$id_trayek','$id_jam')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jadwal.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>