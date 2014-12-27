<style type="text/css">
.Content {
  font-family: "Times New Roman";
  font-size: 20px;
  color: black;
}
</style>

<form id="form1" name="form1" method="post" action="booking_proses.php">
<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
  <td width ="500" height="50" colspan="3" bgcolor="#cdedf6" align="center" valign="middle" class="Content">.: B O O K I N G :.</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
      <td width="45%" height="50" align="right" valign="top" class="Content">Pool</td>
      <td width="10%" align="center" valign="top">:</td>
      <td width="45%" align="left" valign="top">
        <label for="pollist"></label>
        <select name="pollist" size="1" id="pollist">
            
      <?php
      require ("config.php");
      $perintah="select distinct (pool) from trayek join jadwal using (id_trayek)";
      $hasil=mysql_query($perintah);
      while ($data = mysql_fetch_array($hasil))
     {
  ?>
      <option value="<?php echo "$data[pool]"; ?>"><?php echo "$data[pool]"; }?></option>
      </select></td>
</tr>
<tr>
      <td align="right" height="50" valign="top" class="Content">Tujuan</td>
      <td align="center" valign="top">:</td>
      <td align="left" valign="top">
        <label for="tjnlist"></label>
        <select name="tjnlist" size="1" id="tjnlist">
            
      <?php
      require ("config.php");
      $perintah="select distinct (tujuan) from trayek join jadwal using (id_trayek)";
      $hasil=mysql_query($perintah);
      while ($data = mysql_fetch_array($hasil))
     {
  ?>
      <option value="<?php echo "$data[tujuan]"; ?>"><?php echo "$data[tujuan]"; }?></option>
      </select></td>
</tr>
<tr>
      <td align="right" height="50" valign="top" class="Content">Jam Berangkat</td>
      <td align="center" valign="top">:</td>
      <td align="left" valign="top">
        <label for="jamlist"></label>
        <select name="jamlist" size="1" id="jamlist">
            
      <?php
      require ("config.php");
      $perintah="select distinct (jam) from jamberangkat join jadwal using (id_jam)";
      $hasil=mysql_query($perintah);
      while ($data = mysql_fetch_array($hasil))
     {
  ?>
      <option value="<?php echo "$data[jam]"; ?>"><?php echo "$data[jam]"; }?></option>
      </select></td>
</tr>
<tr>
  <td align="right" height="50" valign="top" class="Content">Tanggal Pesan </td>
  <td align="center" valign="top">:</td>
  <td align="left" valign="top"><label>
  <input name="tgltxt" type="date" id="tgltxt" size="30"/>
  </label>
  </td>
</tr>
<tr>
  <td align="right" height="50" valign="top" class="Content">Nomor Kursi </td>
  <td align="center" valign="top">:</td>
  <td align="left" valign="top"><label>
  <input name="noktxt" type="text" id="noktxt" size="30"/><br>
  *Nomor Kursi yang tersedia dari 1 sampai 9
  </label>
  </td>
</tr>
<tr>
  <td align="center" valign="middle" colspan="3" ></td>
  <td align="left" valign="top">&nbsp;</td>
  <td align="left" valign="top">&nbsp;</td>
</tr>
<tr>
  <td align="center" valign="middle" colspan="3"><hr color="black"/>
    <label><input type="submit" name="Submit" value="Order Tiket" /></label>
  </td>
  <td align="left" valign="top">&nbsp;</td>
  <td align="left" valign="top">&nbsp;</td>
</tr>
</table>
</form>