<?php
session_start();
if (ISSET($_SESSION['userlogin']))
{
}
else
header("location:index.php");

	require ("config.php");
	//$perintah="select * from member where username ='".$_GET['id_member']."'";
	$perintah="select * from member where username ='".$_SESSION['userlogin']."'";
	$hasil=mysql_query($perintah);
	$data=mysql_fetch_array($hasil);
?>

<table>
<tr>
	<td colspan="3">Profile<hr color="black" width="650"/></td>
</tr>
<tr>
    <td width="30%" align="left" valign="top">Nama </td>
    <td width="1%" align="left" valign="top">:</td>
    <td width="69%" align="left" valign="top"><label for="namatxt">
    <?php echo $data['nama']; ?></label></td>
</tr>
<tr>
    <td align="left" valign="top">Alamat</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><label for="almtxt"></label>
    <?php echo $data['alamat'] ?></td>
</tr>
<tr>
    <td align="left" valign="top">Telepon</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><label for="tlptxt"></label>
    <?php echo $data['telepon'] ?></td>
</tr>
<tr>
    <td align="left" valign="top">Email</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><label for="emltxt"></label>
    <?php echo $data['email'] ?></td>
</tr>
<tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><hr color="black"/></td>
</tr>
<tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><label>
    <?php echo'<a href="profile_ubah.php?id_member='.$data[id_member].'"><input type="submit" name="Submit" value="Edit" /></a>';?>
    </label>
	</span></td>
</tr>
</table>
