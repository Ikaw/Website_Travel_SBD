<?php
	session_start();
?>
<head><title>Booking</title>
		<link rel="stylesheet" href="style.css">
	</head>
<a href="home.php">Halaman Depan</a> | 
<a href="profile.php">Profile</a> | 
<a href="order.php">Booking</a> |
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
<body>
<form id="form1" name="form1" method="post" action="Booking_Confirm.php">
<table align="center" bgcolor="#333333">
	<tr>
		<td align="center">
			<p style="color:#FFFFFF">Time </p>		</td>
		<td align="center"> 
			<p style="color:#FFFFFF"> Seats</p>		</td>
	</tr>
	<tr>
  		<td>	
			<p>
				<input type="submit" name="Submit" value="05.00" />
				<input type="submit" name="Submit2" value="05.45" />  
				<input type="submit" name="Submit3" value="06.45" />
			</p>
		
			<p>
				<input type="submit" name="Submit4" value="07.45" />
				<input type="submit" name="Submit5" value="08.45" />
				<input type="submit" name="Submit6" value="09.45" />
			</p>
			<p>
				<input type="submit" name="Submit7" value="10.45" />
				<input type="submit" name="Submit72" value="11.45" />
				<input type="submit" name="Submit73" value="12.45" />
			</p>
			<p>
				<input type="submit" name="Submit74" value="13.45" /> 
				<input type="submit" name="Submit75" value="14.45" /> 
				<input type="submit" name="Submit76" value="15.45" />
			</p>
			<p>
				<input type="submit" name="Submit77" value="16.45" /> 
				<input type="submit" name="Submit78" value="17.45" /> 
				<input type="submit" name="Submit79" value="18.45" />
			</p>
			<p>
				<input type="submit" name="Submit710" value="19.45" /> 
				<input type="submit" name="Submit711" value="20.45" /> 
				<input type="submit" name="Submit712" value="21.45" />
			</p>		</td>
		<td><p>
		  <input name="Submit8" type="button" value="Supir" /> 
		  <input name="Submit82" type="submit" value="1" />
	      <input name="Submit83" type="submit" value="2" />
	      <input name="Submit832" type="submit" value="3" />
	      <input name="Submit833" type="submit" value="4" />
	      <input name="Submit834" type="submit" value="5" />
		</p>
	    <p>
	      <input name="Submit835" type="submit" value="6" /> 
          <input name="Submit84" type="button" value="Pintu" /> 
	      <input name="Submit8352" type="submit" value="7" /> 
	      <input name="Submit8353" type="submit" value="8" />
	      <input name="Submit8354" type="submit" value="9" />
	      <input name="Submit8355" type="submit" value="10" />
	    </p></td>
	</tr>
	<tr>
	  <td colspan="2" align="center">
	  <br>
	  	<a href="Booking_Plan.php"><input type="submit" name="Submit9" value="Back" /></a>
      	<input type="submit" name="Submit" value="Next" />
	  </td>
    </tr>
</table>
</form>
</body>
</html>
