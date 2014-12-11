<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_trayek = $_POST['idtxt'];
$pool = $_POST['poltxt'];
$tjn = $_POST['tjntxt'];
$hrg = $_POST['hrgtxt'];
$perintah = "INSERT INTO trayek (id_trayek,pool,tujuan,harga)
VALUES ('$id_trayek','$pool','$tjn','$hrg')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:trayek.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>