<?php 
	session_start();
	if(!isset($_SESSION['Username'])) {
		header('location:login.php'); 
	} else { 
		$Username = $_SESSION['Username']; 
	}
		require_once("koneksi.php");
		$query = mysql_query("SELECT * FROM pelanggan WHERE Username = '$Username'");
		$hasil = mysql_fetch_array($query);
?>
		<a href="home.php">Halaman Depan</a> | 
		<a href="profile.php">Profile</a> | 
		<a href="order.php">Booking</a> |
		<a href="about.php">About</a> |
		<a href="logout.php">Logout</a>
<center>
	<?php
	 echo "<h2>Selamat Datang , $Username</h2>"; 
	?>

	<a href="logout.php"><b>Logout</b></a>
</center>