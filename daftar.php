<?php
	session_start();
	if(isset($_SESSION['Username'])) {
		header('location:login.php'); 
	}
?>
<html>
	<head><title>Daftar Member</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<br><br>
		<FORM ACTION="prosesdaftar.php" METHOD="POST" >
			<table>
				<tr>
					<td colspan="2">
						Daftar Member
					</td>
				</tr>
				<tr>
					<td>
						Nama Lengkap
					</td>
					<td>: <input type="text" name="Nama" size="30"><br>
					</td>
				</tr>
				<tr>
					<td>
						Alamat 
					</td>
					<td>: <textarea name="Alamat" cols="30" rows="3"></textarea><br>
					</td>
				</tr>
				<tr>
					<td>
						No_Telp
					</td>
					<td>: <input type="text" name="No_Telp" size="30"><br>
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
					<td>: <input type="text" name="Username" size="30"><br>
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
