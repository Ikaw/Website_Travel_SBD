<?php session_start();
include("config.php");
$user = $_POST['usertxt'];
$user = str_replace("'","&acute;",$user);
$psw=$_POST['pswtxt'];
$psw= str_replace("'","&acute;",$psw);
$cek = "Select username,password from member where username='".$user."' and password='".$psw."'";

$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
if ($hasil_cek==0){
header("location:login_page.php");
}else{
	session_start();
	$_SESSION['userlogin'] =$user;
	header("location:coba.php");
}
?>