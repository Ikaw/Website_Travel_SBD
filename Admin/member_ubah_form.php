  <?php
  require ("config.php");
  $perintah="select * from member where id='".$_GET['id']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  //$tampil_deskripsi=str_replace("<br>","\r\n",$data['deskripsi']);
  ?>
  
<form id="form1" name="form1" method="post" action="member_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">ID</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="10%" align="left" valign="top">Nama </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="namatxt" type="text" id="namatxt" value="<?php echo $data['nama'] ?>" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Alamat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="almtxt"></label>
        <input type="text" name="almtxt" id="almtxt" value="<?php echo $data['alamat'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Telepon</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="tlptxt"></label>
        <input type="text" name="tlptxt" id="tlptxt" value="<?php echo $data['telepon'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Email</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="emltxt"></label>
        <input type="text" name="emltxt" id="emltxt" value="<?php echo $data['email'] ?> "/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Username</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="usrtxt"></label>
        <input type="text" name="usrtxt" id="usrtxt" value="<?php echo $data['username'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Password</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="psstxt"></label>
        <input type="password" name="psstxt" id="psstxt" value="<?php echo $data['password'] ?>" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Ubah" />
      </label>
        </span></td>
    </tr>
  </table>
</form>
