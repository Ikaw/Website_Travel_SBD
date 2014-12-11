  <?php
  require ("config.php");
  $perintah="select * from jadwal where id_jadwal='".$_GET['id_jadwal']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  ?>

<form id="form1" name="form1" method="post" action="jadwal_ubah_proses.php">
  <table width="650" border="0" align="left">
    <tr>
      <td colspan="4">Form Ubah Data Jadwal <hr color="black" width="650"/></td>
    </tr>
    <tr>
      <td align="30%" valign="top">ID</td>
      <td align="1%" valign="top">:</td>
      <td align="69%" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id_jadwal'] ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="left" align="left" valign="top">ID Trayek</td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label for="tratxt"></label>
        <label for="tralist"></label>
        <select name="tralist" size="1" id="tralist">
            
      <?php
    	  require ("config.php");
    	  $perintah="select * from trayek";
    	  $hasil=mysql_query($perintah);
    	  while ($data = mysql_fetch_array($hasil))
    	 {
      ?>
      <option value="<?php echo "$data[id_trayek]"; ?>"><?php echo "$data[id_trayek]"; }?></option>
      </select></td>
      <td>
          <?php
            require ("config.php");
            $id = $_POST['tralist'];
            $perintah="select pool from trayek where id_trayek='$id'";
            $data=mysql_query($perintah);
          ?>
        <input name="poltxt" type="text" id="poltxt" value="<?php echo "$data[pool]";?>" readonly="readonly"></td>
    </tr>
	<tr>
      <td width="left" align="left" valign="top">ID Jam Berangkat</td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label for="jamtxt"></label>
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
      <td align="left" valign="top" colspan="3"><hr color="black"/></td>
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
