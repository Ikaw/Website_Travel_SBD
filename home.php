<html>
	<head><title>Travel</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="home.php">Halaman Depan</a> |
	<a href="input2.php">Daftar Member</a> |
	<a href="order.php">Booking</a> |
	<a href="timeandseats.php">Time And Seats</a>
	<br>
	<FORM ACTION="" METHOD="POST" NAME="login">
	<table align="center">
		<tr>
			<td colspan="2" align="center">
				<h3>LOGIN</h3>
			</td>
		</tr>
		<tr>
			<td>
				Username
			</td>
			<td>: <input type="text" name="username" size="30">
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>: <input type="password" name="Password" size="30">
			</td>
		</tr>
		<tr>
			<td colspan="2"  align="center">
				<input type="submit" name="login" value="Login">
				or <a href="input2.php">Register</a>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php
include "koneksi.php";

// Proses Cek Username dan Password

if (isset($_POST['login'])) 
{
	$username = addslashes (strip_tags ($_POST['Id_Member']));
	$Password = addslashes (strip_tags ($_POST['Password']));

	//select ke tabel member
	$query = "SELECT * FROM member WHERE Id_Member = '$_POST[Id_Member]' AND Password = '$_POST[Password]'";
	$result = mysql_query($query);
	if($result)
	{
		echo "<br><h2><font color=blue>SELAMAT DATANG</font></h2>";
	} else {
		echo "<br><h2><font color=red>USERNAME ATAU Password SALAH</font>";
	}
}
?>