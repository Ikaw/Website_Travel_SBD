<?php session_start();
if (ISSET($_SESSION['userlogin']))
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

    <link type="text/css" rel="Stylesheet" href="../css/imageslidermaker.css" />
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300|Titillium+Web:300,400" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../js/bjqs-1.3-imageslidermaker.js"></script>

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
      $(function() {
        $("#imageslider").bjqs({
          width: 450,
          height: 200,
          animtype: "slide",
          responsive: false,
          automatic: true,
          keyboardnav: false,
          markertype: "1",
          prevtext: "Prev",
          nexttext: "Next"
        });
      });
</script>
</head>

<style type="text/css">
.Menu_Kiri {
	width: 150px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.Menu_Tengah {
	margin-top: 10px;
	margin-bottom: 10px;
}
body {
	background-image: url(../webtravel/gambar/background3.jpg);
}
</style>
<body onload="MM_preloadImages('../webtravel/gambar/btnhomeuser2.jpg','../webtravel/gambar/btnprofileuser2.jpg','../gambar/btntrayek2.jpg','../gambar/btnjamberangkat2.jpg','../gambar/btnjadwal2.jpg','../gambar/btndetailpesanan2.jpg','../gambar/btnpesanan2.jpg','../gambar/btnlogout2.jpg')">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2" width="900" align="center" height="230"></td>
	</tr>
	<tr>
		<td width="850" align="center" bgcolor="white">
			<table width="900" border="0" cellpadding="0" sellspacing="0">
				<tr>
					<td>Home<a href="home.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnhome','','../webtravel/gambar/btnhome.jpg',1)"><img src="../webtravel/gambar/btnhome.jpg"  id="btnhome"/></td>
					<td>Profile<a href="profilebaru.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnprofile','','../webtravel/gambar/btnprofile.jpg',1)"><img src="../webtravel/gambar/btnprofile.jpg"  id="btnprofile"/></td>
					<td>Booking<a href="bookingbaru.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnbooking','','../webtravel/gambar/btnbooking.jpg',1)"><img src="../webtravel/gambar/btnbooking.jpg"  id="btnbooking"/></td>
					<td>About<a href="aboutbaru.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnabout','','../webtravel/gambar/btnabout.jpg',1)"><img src="../webtravel/gambar/btnabout.jpg"  id="btnabout"/></td>
					<td>Logout<a href="logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnlogoutuser','','../gambar/btnlogoutuser2.jpg',1)"><img src="../webtravel/gambar/btnlogoutuser.jpg"  id="btnlogoutuser"/></td>
				</tr>
				<tr>
					<td colspan="5">....Isi Booking....</td>
				</tr>
		</table>
		</td>
		<td>
	</tr>
</table>

</body>
</head>
</html>