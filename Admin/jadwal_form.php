<style type="text/css">
form {
	font-family: "Segoe UI", "Segoe UI Light";
}
#form1 table {
	font-size: 18px;
}
#form1 table tr td p {
	font-size: 14px;
}
</style>
<form id="form1" name="form1" method="post" action="jadwal_tambah.php">
  <table width="400" border="0" align="left"> 
    <tr>
      <td width="10%" align="left" valign="top">Trayek</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label for="trytxt"></label>
        <label for="trylist"></label>
        <select name="trylist" size="1" id="trylist">
            
      <?php
	  require ("config.php");
	  $perintah="select * from trayek order by id asc";
	  $hasil=mysql_query($perintah);
	  while ($data = mysql_fetch_array($hasil))
	 {
  ?>
      <option value="<?php echo "$data[id]"; ?>"><?php echo "$data[id]"; }?></option>
      </select></td>
    </tr>
	<tr>
      <td width="10%" align="left" valign="top">Jam Berangkat</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label for="jamtxt"></label>
        <label for="jamlist"></label>
        <select name="jamlist" size="1" id="jamlist">
            
      <?php
	  require ("config.php");
	  $perintah="select jam from jam order by jam asc";
	  $hasil=mysql_query($perintah);
	  while ($data = mysql_fetch_array($hasil))
	 {
  ?>
      <option value="<?php echo "$data[id]"; ?>"><?php echo "$data[id]"; }?></option>
      </select></td>
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
        <input type="submit" name="Submit" value="Simpan" />
      </label>
        <label>
          <input type="reset" name="Submit2" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
