<?php
	require_once("koneksi.php");
	$Nama = $_POST['nama'];
	$Alamat = $_POST['alamat'];
	$No_Telp = $_POST['telepon'];
	$Email = $_POST['email'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	//cek user
	$cekuser = mysql_query("SELECT * FROM member WHERE username = '$username'");
	if(mysql_num_rows($cekuser) != 0) {
		echo "Username Sudah Terdaftar!";
		echo "<a href='daftar.php'>Back</a>";
	} else {
		if(!$Username || !$Password || !$Nama || !$Alamat || !$No_Telp || !$Email) {
			echo "Masih ada data yang kosong !";
			echo "<a href='daftar.php'>Back</a>";
		} else {
			//insert ke tabel
			$simpan = mysql_query("INSERT INTO member (username, nama, alamat, telepom, email, password) 
			VALUES('$Username','$Nama','$Alamat','$No_Telp','$Email','$Password')");
			if ($simpan) 
			{
				$simpan = mysql_query("INSERT INTO booking VALUES ('','','$username','','')");
				echo "Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a>";
			} else {
				echo "Proses Gagal!";
			}
		}
	}
?>