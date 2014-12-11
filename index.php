<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
header("location:home.php"); 		
}
else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel</title>

<style type="text/css">
.Menu_Kiri {
	width: 100px;
	font-family: "Segoe UI", "Segoe UI Light";
	font-size: 16px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.Menu_Tengah {
	width: 200px;
	margin-top: 10px;
	margin-left: 10px;
	margin-bottom: 10px;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Menu_Login {
	margin-top: 185px;
}
body {
	background-image: url(../webtravel/gambar/bglogin.jpg);
}
.Menu_Login table tr td {
	font-family: "Segoe UI", "Segoe UI Light";
	font-size: 24px;
	color: #000;
}
.Menu_Login table tr td table tr td {
	color: #000;
	font-size: 18px;
}
.Menu_Login table tr td table {
	font-size: 18px;
}
.Menu_Login table tr td {
	color: #000;
}
</style>
<body>
<form id="form1" name="form1" method="post" action="login.php">
<div class="Menu_Login">
  <table width="437" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle" bgcolor="#9b9191">Login
      <hr /></td>
    </tr>
    <tr>
      <td bgcolor="#9b9191"><table width="437" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td width="157" align="right">Username</td>
          <td width="265">
            <label for="usertxt"></label>
            <input name="usertxt" type="text" class="Menu_Kiri" id="usertxt" />
          </td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td>
            <label for="pswtxt"></label>
            <input name="pswtxt" type="password" class="Menu_Kiri" id="pswtxt" />
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input name="logbtn" type="submit" class="Menu_Kiri" id="logbtn" value="Login" />
          </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</form>
</body>