<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
header("location:index.php");	
}
else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Online</title>

    <link type="text/css" rel="Stylesheet" href="../css/imageslidermaker.css" />
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300|Titillium+Web:300,400" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<style type="text/css">
body {
	background-image: url(../webtravel/gambar/background5.jpg);
  background-repeat: no-repeat;
}
.bgtable {
	background-image: url(../webtravel/gambar/bgtable3.gif);
  background-repeat: no-repeat;
  opacity:0.6;
  fileter:alpha(opacity=75);
}
p {
  font-family: Times New Roman;
  font-size: 20px;
  font-style: bold;
}
</style>
<body onload="MM_preloadImages('../webtravel/gambar/btnlogin2.png','../webtravel/gambar/btnprofileuser2.png','../webtravel/gambar/btnbookinguser2.png','../webtravel/gambar/btnaboutuser2.png')">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" >
	<tr height="300">
		<td></td>
	</tr>
  <tr>
    <td height="40" align="right">
      <a href="login_page.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnlogin','','../webtravel/gambar/btnlogin2.png',1)"><img src="../webtravel/gambar/btnlogin.png" width="120" height="40" id="btnlogin"/></a>
      <img src="../webtravel/gambar/or.png" width="40" height="40" id="or"/>
      <a href="register.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnregister','','../webtravel/gambar/btnregister2.png',1)"><img src="../webtravel/gambar/btnregister.png" width="120" height="40" id="btnregister"/></a
    </td>
  </tr>
	<tr><td>
		<table class="bgtable" width="900" height="700">
			<tr>
				<td align="center" valign="middle" height="100">
          <table cellspacing="4" cellpadding="0" border="0">
            <tr>
              <td width="225" height="100" align="center" valign="middle">
                <a href="coba.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tmhome','','../webtravel/gambar/tmhome2.png',1)"><img src="../webtravel/gambar/tmhome.png" width="220" height="100" id="tmhome"/>
              </td>
              <td width="225" height="100" align="center" valign="middle">
                <a href="login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tmprofile','','../webtravel/gambar/tmprofile2.png',1)"><img src="../webtravel/gambar/tmprofile.png" width="220" height="100" id="tmprofile"/>
              </td>
              <td width="225" height="100" align="center" valign="middle">
                <a href="login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tmbooking','','../webtravel/gambar/tmbooking2.png',1)"><img src="../webtravel/gambar/tmbooking.png" width="220" height="100" id="tmbooking"/>
              </td>
              <td width="225" height="100" align="center" valign="middle">
                <a href="login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('tmabout','','../webtravel/gambar/tmabout2.png',1)"><img src="../webtravel/gambar/tmabout.png" width="220" height="100" id="tmabout"/>
              </td>
            </tr>
          </table>
				</td>
			</tr>
      <tr>
        <td valign="top"><?php include "register_form.php" ?>
        </td>
      </tr>
		</table>
	</td>
</table>

</body>
</head>
</html>