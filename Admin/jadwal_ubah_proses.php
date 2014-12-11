<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE jadwal set id_trayek = '$_POST[tralist]' ,id_jam = '$_POST[jamlist]' where id_jadwal = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jadwal.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>