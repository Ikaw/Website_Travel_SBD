<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_member = $_GET['id_member'];
$perintah = "DELETE from member where id_member = $id_member";
$result = mysql_query($perintah);
	if ($result) {
		header("location:member.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>