<?php session_start();

require("config.php");
$nama = $_POST['namatxt'];
$alm = $_POST['almtxt'];
$tlp = $_POST['tlptxt'];
$eml = $_POST['emltxt'];
$usr = $_POST['usrtxt'];
$pss = $_POST['psstxt']; 
$perintah = "INSERT INTO member (nama,alamat,telepon,email,username,password)
VALUES ('$nama','$alm','$tlp','$eml','$usr','$pss')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:login.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}

?>