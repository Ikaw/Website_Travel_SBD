<?php include "koneksi.php";

if(isset($_GET['Username'])) {
    $Username=$_GET['Username'];
    $hapus=mysql_query("DELETE FROM pelanggan WHERE Username = '$Username'");
	if($hapus){
		echo "Akun anda berhasil dihapus";
		echo "Terima Kasih";
		echo "Klik <a href='home.php'>Home</a> Untuk Kembali ke Halaman Utama";
	}
}
?>