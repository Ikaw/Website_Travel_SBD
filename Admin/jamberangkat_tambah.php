<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$jam = $_POST['jamtxt'];
$perintah = "INSERT INTO jamberangkat (jam)
VALUES ('$jam')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:jamberangkat.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>