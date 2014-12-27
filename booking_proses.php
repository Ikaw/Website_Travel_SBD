<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
}
else
header("location:index.php");

require("config.php");
//ambil data dari inputan user
$pool = $_POST['pollist'];
$tujuan = $_POST['tjnlist'];
$jam = $_POST['jamlist'];
$tgl = $_POST['tgltxt'];
$nokur = $_POST['noktxt'];


//ambil id member dari sesi userlogin
$perintah1="select id_member 
			from member 
			where username ='".$_SESSION['userlogin']."'";
$hasil1=mysql_query($perintah1);
$data1=mysql_fetch_array($hasil1);

//ambil id trayek dari tabel trayek
$perintah2="select id_trayek 
			from trayek 
			where pool ='$pool' and tujuan='$tujuan'";
$hasil2=mysql_query($perintah2);
$data2=mysql_fetch_array($hasil2);

//ambil id jam dari tabel jamberangkat
$perintah3="select id_jam 
			from jamberangkat 
			where jam ='$jam'";
$hasil3=mysql_query($perintah3);
$data3=mysql_fetch_array($hasil3);

//ambil id jadwal dari tabel jadwal
$perintah4="select id_jadwal 
			from jadwal 
			where id_jam ='$data3[id_jam]' and id_trayek='$data2[id_trayek]'";
$hasil4=mysql_query($perintah4);
$data4=mysql_fetch_array($hasil4);



$perintah = "INSERT INTO pesanan (no_kursi, tanggal_pesan, id_member, id_jadwal)
VALUES ('$nokur','$tgl','$data1[id_member]','$data4[id_jadwal]')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:booking.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}

?>