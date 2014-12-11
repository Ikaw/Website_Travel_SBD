<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_trayek = $_GET['id_trayek'];
$perintah = "DELETE from trayek where id_trayek = '$id_trayek'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:trayek.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>