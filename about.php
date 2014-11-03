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
<h2>About Us</h2>


<?php
	if(!isset($_SESSION['Username'])) {
		header('location:login.php'); 
	} else { 
		$Username = $_SESSION['Username']; 
	}
?>
</center>
