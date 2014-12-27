<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
require("config.php");
$perintah = "UPDATE member set nama = '$_POST[namatxt]', alamat = '$_POST[almtxt]', telepon = '$_POST[tlptxt]', email = '$_POST[emltxt]', username = '$_POST[usrtxt]', password = '$_POST[psstxt]' where id_member = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:profilefix.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>