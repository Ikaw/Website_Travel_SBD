<?php
	session_start();
	if(!isset($_SESSION['Username'])) {
		header('location:login.php'); 
	} else { 
		$Username = $_SESSION['Username']; 
	}
	require_once("koneksi.php");
	$Username = $_GET[Username];
	$query = mysql_query("SELECT * FROM pelanggan WHERE Username = '$Username'");
	$data = mysql_fetch_array($query);
	
	$Nama = $data[0];
	$Alamat = $data[1];
	$No_Telpon = $data[2];
	$Email = $data[3];
	$Username = $data[4];
	$Password = $data[5];
	
?>
<html>
	<head><title>Edit Member</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<a href="home.php">Halaman Depan</a> | 
		<a href="profile.php">Profile</a> | 
		<a href="order.php">Booking</a> |
		<a href="about.php">About</a>
		<br>
		<FORM ACTION="proseseditmember.php" METHOD="POST" >
			<table>
			<input type="hidden" name="Username" value="<?php echo $Username;?>"/>
			<input type="hidden" name="Password" value="<?php echo $Password;?>"/>
				<tr>
					<td colspan="2">
						Edit Member
					</td>
				</tr>
				<tr>
					<td>
						Nama Lengkap
					</td>
					<td>: <input type="text" name="Nama" size="30" value="<?php echo $Nama;?>"/><br>
					</td>
				</tr>
				<tr>
					<td>
						Alamat 
					</td>
					<td>: <textarea name="Alamat" cols="30" rows="3" value="<?php echo $Alamat;?>"/></textarea><br>
					</td>
				</tr>
				<tr>
					<td>
						No_Telp
					</td>
					<td>: <input type="text" name="No_Telp" size="30" value="<?php echo $No_Telp;?>"/><br>
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>: <input type="text" name="Email" size="30" value="<?php echo $Email;?>"/><br>
					</td>
				</tr>
			</table>
			<input type="submit" name="input" value="Simpan">&nbsp;
			<input type="reset" name="reset" value="Cancel">
		</FORM>
	</body>
</html>
