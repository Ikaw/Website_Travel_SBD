<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
//Tidak ada event, dalam artian menghindari jump page  		
}
else
header("location:index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Online</title>
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
	background-color: #cdedf6;
}
</style>

<body onload="MM_preloadImages('../gambar/btnadmin2.jpg','../gambar/btnmember2.jpg','../gambar/btntrayek2.jpg','../gambar/btnjamberangkat2.jpg','../gambar/btnjadwal2.jpg','../gambar/btnpesanan2.jpg','../gambar/btnlogout2.jpg')">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><img src="../gambar/header1.jpg" width="900" height="169" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="../gambar/header2.jpg" width="900" height="30" /></td>
  </tr>
  <tr>
    <td width="200" valign="top">
	<table width="200" border="0" cellspacing="6" cellpadding="3">
      <tr>
        <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnadmin','','../gambar/btnadmin2.jpg',1)"><img src="../gambar/btnadmin.jpg" width="200" height="30" id="btnadmin" /></a></td>
      </tr>
      <tr>
        <td><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnmember','','../gambar/btnmember2.jpg',1)"><img src="../gambar/btnmember.jpg" width="200" height="30" id="btnmember" /></a></td>
      </tr>
      <tr>
        <td><a href="trayek.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btntrayek','','../gambar/btntrayek2.jpg',1)"><img src="../gambar/btntrayek.jpg" width="200" height="30" id="btntrayek" /></a></td>
      </tr>
      <tr>
        <td><a href="jamberangkat.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnjamberangkat','','../gambar/btnjamberangkat2.jpg',1)"><img src="../gambar/btnjamberangkat.jpg" width="200" height="30" id="btnjamberangkat" /></a></td>
      </tr>
      <tr>
        <td><a href="jadwal.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnjadwal','','../gambar/btnjadwal2.jpg',1)"><img src="../gambar/btnjadwal.jpg" width="200" height="30" id="btnjadwal" /></a></td>
      </tr>
      <tr>
        <td><a href="pesanan.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnpesanan','','../gambar/btnpesanan2.jpg',1)"><img src="../gambar/btnpesanan.jpg" width="200" height="30" id="btnpesanan" /></a></td>
      </tr>
      <tr>
        <td><a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnlogout','','../gambar/btnlogout2.jpg',1)"><img src="../gambar/btnlogout.jpg" width="200" height="30" id="btnlogout" /></a></td>
      </tr>
    </table>
	</td>
    <td width="650" valign="top">
		<table width="650" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2" class="juduladmin">
        <span class="juduladmin">Jadwal</span>
        <hr color="black"/></td>
        </tr>
		<tr>
			<td colspan="2"><?php include "jadwal_form.php"; ?></td>
    </tr>
		<tr>
			<td colspan="2"><?php include "jadwal_data.php"; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td colspan="2"><img src="../gambar/footeradmin.jpg" width="900" height="98" /></td>
  </tr>
</table>
</body>
</html>
