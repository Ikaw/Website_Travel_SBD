<style type="text/css">
form {
	font-family: "Segoe UI", "Segoe UI Light";
}
#form1 table {
	font-size: 16px;
}
#form1 table tr td p {
	font-size: 14px;
}
</style>

<form id="form1" name="form1" method="post" action="jadwal_tambah.php">
  <table width="650" border="0" align="left"> 
  	<tr>
      <td width="30%" align="left" valign="top">ID </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="69%" align="left" valign="top"><label>
        <input name="idtxt" type="text" id="idtxt" size="40">
      </label>
        </span></td>
    </tr>
    <tr>
      <td  align="left" valign="top">ID Trayek</td>
      <td  align="left" valign="top">:</td>
      <td  align="left" valign="top"><label>           
      <label for="tralist"></label>
        <select name="tralist" size="1" id="tralist">
            
      <?php
    require ("config.php");
    $perintah="select * from trayek order by id_trayek asc";
    $hasil=mysql_query($perintah);
    while ($data = mysql_fetch_array($hasil))
   {
  ?>
      <option value="<?php echo "$data[id_trayek]"; ?>"><?php echo "$data[id_trayek]"; }?></option>
      </select></td>
    </tr>
	<tr>
      <td align="left" valign="top">ID Jam Berangkat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top">
        <label for="jamlist"></label>
        <select name="jamlist" size="1" id="jamlist">
            
      <?php
    require ("config.php");
    $perintah="select * from jamberangkat order by id_jam asc";
    $hasil=mysql_query($perintah);
    while ($data = mysql_fetch_array($hasil))
   {
  ?>
      <option value="<?php echo "$data[id_jam]"; ?>"><?php echo "$data[id_jam]"; }?></option>
      </select></td>
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
        <label>
          <input type="reset" name="Submit2" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>