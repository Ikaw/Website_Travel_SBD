<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$pool = $_POST['poltxt'];
$tjn = $_POST['tjntxt'];
$hrg = $_POST['hrgtxt'];
$perintah = "INSERT INTO trayek (pool,tujuan,harga)
VALUES ('$pool','$tjn','$hrg')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:trayek.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>