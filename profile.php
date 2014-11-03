<?php
	session_start();
?>
<head><title>Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<a href="home.php">Halaman Depan</a> | 
<a href="profile.php">Profile</a> | 
<a href="Booking_Plan.php">Booking</a> |
<a href="about.php">About</a> |
<a href="logout.php">Logout</a>



<center>
<br><h2>Profile</h2><br>
<?php
	if(!isset($_SESSION['Username'])) {
		header('location:login.php'); 
	} else { 
		$Username = $_SESSION['Username']; 
	}
		require_once("koneksi.php");
		$query = mysql_query("SELECT * FROM pelanggan WHERE Username = '$Username'");
		while($hasil = mysql_fetch_array($query)){
			echo "Nama Lengkap : $hasil[Nama] <br>";
			echo "Alamat : $hasil[Alamat]<br>";
			echo "No Telepon : $hasil[No_Telp]<br>";
			echo "E-mail : $hasil[Email]<br>";
			echo "Username : $hasil[Username]<br>";
			echo "Password : $hasil[Password]<br>"; 
		};		
?>

	<a href="editmember.php"><input type="submit" value="Edit"></a>
	<a href="hapusmember.php"><input type="submit" value="Hapus Akun"></a>

</center>
	