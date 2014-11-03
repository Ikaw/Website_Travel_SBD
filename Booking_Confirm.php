<?php
	session_start();
?>
<head><title>Booking</title>
		<link rel="stylesheet" href="style.css">
</head>
<a href="home.php">Halaman Depan</a> | 
<a href="profile.php">Profile</a> | 
<a href="Booking_Plan.php">Booking</a> |
<a href="about.php">About</a> |
<a href="logout.php">Logout</a>

<center>
<?php
	if(!isset($_SESSION['Username'])) {
		header('location:login.php'); 
	} else { 
		$Username = $_SESSION['Username']; 
	}
		require_once("koneksi.php");
		$query = mysql_query("SELECT * FROM pesanan WHERE Id_Pesanan = '$Id_Pesanan'");
		while($hasil = mysql_fetch_array($query)){
			echo "Id Pesanan : $hasil[Id_Pesanan] <br>";
			echo "No Kursi : $hasil[No_Kursi]<br>";
			echo "Username : $hasil[Username]<br>";
			echo "Id Jadwal : $hasil[Id_Jadwal]<br>";
			echo "Tanggal Pesan : $hasil[Tanggal_Pesan]<br>"; 
		};		
?>

	<a href="Booking_Seats.php"><input type="submit" value="Back"></a>
	<a href="Confirm.php"><input type="submit" value="Submit"></a>

</center>
	