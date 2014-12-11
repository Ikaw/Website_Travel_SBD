  <?php
  require ("config.php");
  $perintah="select * from member where id_member ='".$_GET['id_member']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  ?>
  
<form id="form1" name="form1" method="post" action="profile_ubah_proses.php">
  <table width="650" border="0" align="left">
    <tr>
      <td colspan="3">Form Ubah Data Member <hr color="black" width="650"/></td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">ID</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="69%" align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" size="40" value="<?php echo $data['id_member'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Nama </td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <input name="namatxt" type="text" id="namatxt" size="40" value="<?php echo $data['nama'] ?>" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Alamat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="almtxt"></label>
        <input type="text" name="almtxt" id="almtxt" size="40" value="<?php echo $data['alamat'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Telepon</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="tlptxt"></label>
        <input type="text" name="tlptxt" id="tlptxt" size="40" value="<?php echo $data['telepon'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Email</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="emltxt"></label>
        <input type="text" name="emltxt" id="emltxt" size="40" value="<?php echo $data['email'] ?> "/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Username</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="usrtxt"></label>
        <input type="text" name="usrtxt" id="usrtxt" size="40" value="<?php echo $data['username'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Password</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="psstxt"></label>
        <input type="password" name="psstxt" id="psstxt" size="40" value="<?php echo $data['password'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr color="black"/></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">
        <label>
        <input type="submit" name="Submit" value="Simpan" />
        </label>
        <label>
        <input type="reset" name="Submit" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
