<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_jam = $_POST['idtxt'];
$jam = $_POST['jamtxt'];
$perintah = "INSERT INTO jamberangkat (id_jam,jam)
VALUES ('$id_jam','$jam')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jamberangkat.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>