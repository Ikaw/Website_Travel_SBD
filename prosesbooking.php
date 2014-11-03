<?php
include "koneksi.php";
//proses input 
if (isset($_POST['input'])) 
{
	$Pool = $_POST['Pool'];
	$Tujuan = $_POST['Tujuan'];
	

	//insert ke tabel
	$query = "INSERT INTO trayek (id_trayek, itujuan, pool) 
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