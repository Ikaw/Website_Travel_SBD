<?php
	session_start();
?>

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
?>


<html>
	<head><title>Booking</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<br>
		<FORM ACTION="Booking_Seats.php" METHOD="POST">
			<table>
				<tr>
					<td colspan="2">
						Booking
					</td>
				</tr>
				<tr>
					<td>
						Pool
					</td>
					<td>:
						<select name="pool" onchange="showHint(this.value")>
						<option value="">--Pilih Pool--</option>
						<?
							include "koneksi.php";
							$Kode_Tempat=$_GET['Kode_Tempat'];
							$query = mysql_query ("SELECT * FROM trayek WHERE Kode_Tempat=$Kode_Tempat GROUP BY Pool");
							while ($hasil = mysql_fetch_array($query)){
								echo "<option value='$hasil[Pool]'>$hasil[Pool]</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Kota Tujuan
					</td>
					<td>:
						<select name="tujuan" onchange="showHint(this.value")>
						<option value="">--Pilih Kota Tujuan--</option>
						<?
							include "koneksi.php";
							$Pool=$_GET['Pool'];
							$query = mysql_query ("SELECT * FROM trayek WHERE Pool=$Pool");
							while ($hasil = mysql_fetch_array($query)){
								echo "<option value='$hasil[Tujuan]'>$hasil[Tujuan]</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Berangkat
					</td>
					<td>: 
						<input type="text" name="NO_TELP" size="30"><br>
					</td>
				</tr>
			</table>
			<input type="submit" name="input" value="Next">
		</FORM>
	</body>
</html>