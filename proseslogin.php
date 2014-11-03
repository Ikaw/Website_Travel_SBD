<?php 
	session_start();
	require_once("koneksi.php");
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$cekuser = mysql_query("SELECT * FROM pelanggan WHERE Username = '$Username'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);
	if($jumlah == 0) {
		echo "Username Belum Terdaftar!";
		echo "<a href='login.php'><br>Back</a>";
	} else {
		if($Password != $hasil['Password']) {
			echo "Password Salah!";
			echo "<a href=login.php'><br>Back</a>";
		} else {
			$_SESSION['Username'] = $hasil['Username'];
			header('location:home.php');
		}
	}
?>