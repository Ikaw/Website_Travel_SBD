<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE trayek set id_trayek = '$_POST[idtxt]',pool = '$_POST[poltxt]', tujuan = '$_POST[tjntxt]', harga = '$_POST[hrgtxt]' where id_trayek = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:trayek.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>