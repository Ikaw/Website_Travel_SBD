  <?php
  require ("config.php");
  $perintah="select * from jamberangkat where id='".$_GET['id']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  //$tampil_deskripsi=str_replace("<br>","\r\n",$data['deskripsi']);
  ?>
  
<link href="styles/kendo.common.min.css" rel="stylesheet" />
<link href="styles/kendo.default.min.css" rel="stylesheet" />

<script src="js/jquery.min.js"></script>
<script src="js/kendo.web.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#jamtxt").kendoTimePicker();
	
	});
</script>

<form id="form1" name="form1" method="post" action="jamberangkat_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">ID</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="10%" align="left" valign="top">Jam Berangkat </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="jamtxt" type="text" id="jamtxt" readonly="readonly" value="<?php echo $data['jam'] ?>"/>
      </label>
        </span></td>
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
