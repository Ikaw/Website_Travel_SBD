<?php
include "koneksi.php";
//proses input 
if (isset($_POST['input'])) 
{
	$pool = $_POST['pool'];
	$tujuan = $_POST['tujuan'];
	

	//insert ke tabel
	$query = "INSERT INTO trayek (id_trayek, tujuan, pool) 
	VALUES('','$_POST[pool]','$_POST[tujuan]')";
	$sql = mysql_query($query);
	if ($sql) 
	{
		echo "<h2><font color=blue>Order telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Order gagal ditambahkan</font></h2>";
	} 
}
?>
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
						Booking
					</td>
				</tr>
				<tr>
					<td>
						Pool
					</td>
					<td>:
						<select name='pool[]'>
						<?
							$query = "SELECT id_trayek, pool FROM trayek ORDER BY pool";
							$sql = mysql_query ($query);
							while ($hasil = mysql_fetch_array ($sql)){
								echo "<option value='$hasil[id_trayek]'>$hasil[pool]</option>";
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
						<select name="tujuan">
						<?
							$query = "SELECT id_trayek, tujuan FROM trayek ORDER BY tujuan";
							$sql = mysql_query ($query);
							while ($hasil = mysql_fetch_array($sql)){
								echo "<option value='$hasil[id_trayek]'>$hasil[tujuan]</option>";
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
			<input type="submit" name="input" value="Submit">&nbsp;
			<input type="reset" name="reset" value="Cancel">
		</FORM>
	</body>
</html>