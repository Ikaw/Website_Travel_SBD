<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:member.php");
?>

<table width="680" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="5%" align="left" scope="col" >ID</th>
    <th width="15%" align="left" scope="col">Nama</th>
    <th width="15%" align="left" scope="col">Alamat</th>
    <th width="7%" align="left" scope="col">Telepon</th>
    <th width="7%" align="left" scope="col">Email</th>
    <th width="7%" align="left" scope="col">Username</th>
    <th width="7%" align="left" scope="col">Password</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$search = $_POST['schtxt']; 
$query = "select * from member where id_member LIKE '%$search%' OR nama LIKE '%$search%' OR alamat LIKE '%$search%' OR telepon LIKE '%$search%' OR email LIKE '%$search%' OR username LIKE '%$search%'";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id_member']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['nama']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['alamat']."</td>
<td align=\"left\" width=\"7%\" bgcolor=\"#FFFFFF\">".$data['telepon']."</td>
<td align=\"left\" width=\"7%\" bgcolor=\"#FFFFFF\">".$data['email']."</td>
<td align=\"left\" width=\"7%\" bgcolor=\"#FFFFFF\">".$data['username']."</td>
<td align=\"left\" width=\"7%\" bgcolor=\"#FFFFFF\">".$data['password']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\">
<a href=\"member_ubah.php?id_member=$data[id_member]\"><img width=\"15\" src=\"../gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>
&nbsp;
&nbsp;
<a href=\"member_hapus.php?id_member=$data[id_member]\"><img width=\"15\" src=\"../gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>