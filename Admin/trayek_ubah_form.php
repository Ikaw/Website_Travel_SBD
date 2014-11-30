  <?php
  require ("config.php");
  $perintah="select * from trayek where id='".$_GET['id']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  //$tampil_deskripsi=str_replace("<br>","\r\n",$data['deskripsi']);
  ?>
  
<form id="form1" name="form1" method="post" action="trayek_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">ID</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="10%" align="left" valign="top">Pool </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="poltxt" type="text" id="poltxt" value="<?php echo $data['pool'] ?>"/>
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tujuan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <input name="tjntxt" type="text" id="tjntxt" value="<?php echo $data['tujuan'] ?>"/>
	  </label>
		</span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Harga</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="wrntxt"></label>
      <input type="text" name="hrgtxt" id="hrgtxt" value="<?php echo $data['harga'] ?>"/></td>
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
