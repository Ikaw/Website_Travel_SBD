  <?php
  require ("config.php");
  $perintah="select * from pesanan where id_pesanan='".$_GET['id_pesanan']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  ?>

<form id="form1" name="form1" method="post" action="pesanan_ubah_proses.php">
  <table width="650" border="0" align="left">
    <tr>
      <td colspan="3">Form Ubah Data Pesanan<hr color="black" width="650"/></td>
    </tr>
    <tr>
      <td align="30%" valign="top">ID</td>
      <td align="1%" valign="top">:</td>
      <td align="69%" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id_pesanan'] ?>" readonly="readonly" /></td>
    </tr>
    	<tr>
      <td width="left" align="left" valign="top">Nomor Kursi </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="noktxt" type="text" id="noktxt" value="<?php echo $data['no_kursi'] ?>" />
      </label>
        </span></td>
    </tr>
		<tr>
      <td width="left" align="left" valign="top">Tanggal Pesan </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="tgltxt" type="date" id="tgltxt" value="<?php echo $data['tanggal_pesan'] ?>"/>
      </label>
        </span></td>
    </tr>
    <tr>
      <td width="left" align="left" valign="top">ID Member</td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label for="memtxt"></label>
        <label for="memlist"></label>
        <select name="memlist" size="1" id="memlist">
            
      <?php
	  require ("config.php");
	  $perintah="select * from member order by id_member asc";
	  $hasil=mysql_query($perintah);
	  while ($data = mysql_fetch_array($hasil))
	 {
  ?>
      <option value="<?php echo "$data[id_member]"; ?>"><?php echo "$data[id_member]"; }?></option>
      </select></td>
    </tr>
	<tr>
      <td width="left" align="left" valign="top">ID Jadwal</td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label for="jadtxt"></label>
        <label for="jadlist"></label>
        <select name="jadlist" size="1" id="jadlist">
            
      <?php
	  require ("config.php");
	  $perintah="select * from jadwal order by id_jadwal asc";
	  $hasil=mysql_query($perintah);
	  while ($data = mysql_fetch_array($hasil))
	 {
  ?>
      <option value="<?php echo "$data[id_jadwal]"; ?>"><?php echo "$data[id_jadwal]"; }?></option>
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
        </span></td>
    </tr>
  </table>
</form>
