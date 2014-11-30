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
    <th width="15%" align="left" scope="col">Pool</th>
    <th width="15%" align="left" scope="col">Tujuan</th>
    <th width="7%" align="left" scope="col">Harga</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from trayek order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['pool']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['tujuan']."</td>
<td align=\"left\" width=\"7%\" bgcolor=\"#FFFFFF\">".$data['harga']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"trayek_ubah.php?id=$data[id]\"><img width=\"15\" src=\"../gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"trayek_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
