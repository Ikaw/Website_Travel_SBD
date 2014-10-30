
<html>
	<head><title>Daftar Member</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<a href="home.php">Halaman Depan</a> | 
		<a href="input2.php">Daftar Member</a> | 
		<a href="order.php">Booking</a> |
		<a href="timeandseats.php">Time And Seats</a>
		<br><br>
		<FORM ACTION="" METHOD="POST" NAME="input">
			<table>
				<tr>
					<td colspan="2">
						Daftar Member
					</td>
				</tr>
				<tr>
					<td>
						Nama
					</td>
					<td>: <input type="text" name="Nama" size="30"><br>
					</td>
				</tr>
				<tr>
					<td>
						NoTelp
					</td>
					<td>: <input type="text" name="NoTelp" size="30"><br>
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>: <input type="text" name="Email" size="30"><br>
					</td>
				</tr>
				<tr>
					<td>
						Username
					</td>
					<td>
						:<input type="text" name="username" size="30"><br>
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>: <input type="password" name="Password" size="30"><br>
					</td>
				</tr>
			</table>
			<input type="submit" name="input" value="Daftar">&nbsp;
			<input type="reset" name="reset" value="Cancel">
		</FORM>
	</body>
</html>
<?php
include "koneksi.php";
//proses input 
if (isset($_POST['input'])) 
{
	$Nama = addslashes (strip_tags ($_POST['Nama']));
	$NoTelp = addslashes (strip_tags ($_POST['NoTelp']));
	$Email = addslashes (strip_tags ($_POST['Email']));
	$username = addslashes (strip_tags ($_POST['Id_Member']));
	$Password = addslashes (strip_tags ($_POST['Password']));

	//insert ke tabel
	$query = "INSERT INTO member (Id_Member, Nama, NoTelp, Email, Password) 
	VALUES('$_POST[Id_Member]','$_POST[Nama]','$_POST[NoTelp]','$_POST[Email]','$_POST[Password]')";
	$sql = mysql_query($query);
	if ($sql) 
	{
		echo "<h2><font color=blue>Member telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Member gagal ditambahkan</font></h2>";
	}
	
	//$query = "SELECT * FROM member";
	//$result = mysql_query($query);
	//while($row = mysql_fetch_array($result)){
	//	echo "$row[ID_MEMBER]<br>";
	//	echo "Nama : $row[Nama] <br>";
	//	echo "Alamat : $row[ALAMAT]<br>";
	//	echo "No Telepon : $row[NoTelp]<br>";
	//	echo "E-mail : $row[Email]<br>";
	//	echo "Password : $row[Password]<br>";
	//} 
}
?>