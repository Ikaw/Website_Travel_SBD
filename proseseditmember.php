<?php
	require_once("koneksi.php");
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$No_Telp = $_POST['No_Telp'];
	$Email = $_POST['Email'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

		if(!$Nama || !$Alamat || !$No_Telp || !$Email) {
			echo "Masih ada data yang kosong !";
			echo "<a href='editmember.php'>Back</a>";
		} else {
			//insert ke tabel
			$edit = mysql_query("UPDATE pelanggan SET 
			Nama='$Nama', 
			Alamat='$Alamat', 
			No_Telp='$No_Telp', 
			Email='$Email', 
			Password='$Password'
			WHERE Username='$Username'");
			if ($edit) 
			{
				echo "Akun Anda Berhasil Diperbaharui!<br><a href='home.php'>Lanjutkan</a>";
			} else {
				echo "Proses Gagal!<br><a href='editmember.php'>Ulangi</a>";
			}
		}

?>