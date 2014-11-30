<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="680" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="5%" align="left" scope="col" >ID</th>
    <th width="15%" align="left" scope="col">Jam Berangkat</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from jamberangkat order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['jamberangkat']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"jamberangkat_ubah.php?id=$data[id]\"><img width=\"15\" src=\"../gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"jamberangkat_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
