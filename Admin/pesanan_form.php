<link href="js/jquery-ui-1.10.4.custom.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tgltxt").datepicker({
                dateFormat : "yy-mm-dd",
            });
        });
</script>

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
<form id="form1" name="form1" method="post" action="pesanan_tambah.php">
  <table width="650" border="0" align="left"> 
  	<tr>
      <td width="30%" align="left" valign="top">ID </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="69%" align="left" valign="top"><label>
        <input name="idtxt" type="text" id="idtxt" size="40"/>
      </label>
        </span></td>
    </tr>
	<tr>
      <td width="left" align="left" valign="top">Nomor Kursi </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="noktxt" type="text" id="noktxt" size="40"/>
      </label>
        </span></td>
    </tr>
		<tr>
      <td width="left" align="left" valign="top">Tanggal Pesan </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="tgltxt" type="date" id="tgltxt" size="40"/>
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
      
      <td>
        <?php
      //    require ("config.php");
      //    $datmem = $data[id_member];
      //    $perintah="select * from member";
      //    $hasil=mysql_query($perintah);
      //    $data = mysql_fetch_array($hasil);
      //    echo $data[nama]; 
        ?>
      
      </td>
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
        <label>
          <input type="reset" name="Submit2" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
