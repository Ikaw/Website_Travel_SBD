<?php
	require_once("koneksi.php");
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$No_Telp = $_POST['No_Telp'];
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	//cek user
	$cekuser = mysql_query("SELECT * FROM pelanggan WHERE Username = '$Username'");
	if(mysql_num_rows($cekuser) != 0) {
		echo "Username Sudah Terdaftar!";
		echo "<a href='daftar.php'>Back</a>";
	} else {
		if(!$Username || !$Password || !$Nama || !$Alamat || !$No_Telp || !$Email) {
			echo "Masih ada data yang kosong !";
			echo "<a href='daftar.php'>Back</a>";
		} else {
			//insert ke tabel
			$simpan = mysql_query("INSERT INTO pelanggan (Username, Nama, Alamat, No_Telp, Email, Password) 
			VALUES('$Username','$Nama','$Alamat','$No_Telp','$Email','$Password')");
			if ($simpan) 
			{
				$simpan = mysql_query("INSERT INTO booking VALUES ('','','$Username','','')");
				echo "Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a>";
			} else {
				echo "Proses Gagal!";
			}
		}
	}
?>