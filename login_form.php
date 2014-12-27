<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
header("location:coba.php"); 		
}
else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel</title>

<style type="text/css">
.Menu_Login {
	width: 200px;
	font-family: "Times New Roman";
	font-size: 16px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.Login {
  width: 100px;
  font-family: "Times New Roman";
  font-size: 24px;
  margin-top: 30px;
  margin-bottom: 30px;
}

.Note {
  font-family: "Times New Roman";
  font-style: italic;
  font-size: 14px;
  color: red;
}

</style>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle" bgcolor="#FFFFF" class="Login" height="60">LOGIN</td>
    </tr>
    <tr>
      <td bgcolor="#9b9191">
        <table width="350" border="0" cellspacing="5" cellpadding="0" align="center">
        <tr>
          <td width="110" align="right">Username</td>
          <td width="235">
            <label for="usertxt"></label>
            <input name="usertxt" type="text" class="Menu_Login" id="usertxt" />
          </td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td>
            <label for="pswtxt"></label>
            <input name="pswtxt" type="password" class="Menu_Login" id="pswtxt" />
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input name="logbtn" type="submit" id="logbtn" value="Login" />
            <br>
            Belum punya akun ? 
            <a href="register.php">Register</a>
          </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td class="Note">*Silakan login terlebih dahulu <br>**Apabila belum punya akun, silakan register terlebih dahulu</td>
    </tr>
  </table>
</form>

</body>