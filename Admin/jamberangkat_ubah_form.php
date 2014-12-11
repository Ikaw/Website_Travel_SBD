  <?php
  require ("config.php");
  $perintah="select * from jamberangkat where id_jam='".$_GET['id_jam']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  //$tampil_deskripsi=str_replace("<br>","\r\n",$data['deskripsi']);
  ?>
  
<form id="form1" name="form1" method="post" action="jamberangkat_ubah_proses.php">
  <table width="650" border="0" align="left">
    <tr>
      <td colspan="3">Form Ubah Data Jam Berangkat <hr color="black" width="650"/></td>
    </tr>
    <tr>
      <td align="30%" valign="top">ID</td>
      <td align="1%" valign="top">:</td>
      <td align="69%" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" size="40" value="<?php echo $data['id_jam'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="left" align="left" valign="top">Jam Berangkat </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="jamtxt" type="text" id="jamtxt" size="40" value="<?php echo $data['jam'] ?>"/>
      </label>
        </span></td>
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
        <input type="submit" name="Submit" value="Simpan" />
      </label>
        </span></td>
    </tr>
  </table>
</form>
