  <?php
  require ("config.php");
  $perintah="select * from trayek where id_trayek='".$_GET['id_trayek']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  ?>
  
<form id="form1" name="form1" method="post" action="trayek_ubah_proses.php">
  <table width="650" border="0" align="left">
    <tr>
      <td colspan="3">Form Ubah Data Trayek <hr color="black" width="650"/></td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">ID</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="69%" align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" size="40" value="<?php echo $data['id_trayek'] ?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Pool </td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <input name="poltxt" type="text" id="poltxt" size="40" value="<?php echo $data['pool'] ?>"/>
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tujuan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <input name="tjntxt" type="text" id="tjntxt" size="40" value="<?php echo $data['tujuan'] ?>"/>
	  </label>
		</span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Harga</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="wrntxt"></label>
      <input type="text" name="hrgtxt" id="hrgtxt" size="40" value="<?php echo $data['harga'] ?>"/></td>
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
