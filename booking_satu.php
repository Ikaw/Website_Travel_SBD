<table width="900" border="0" cellpadding="0" cellspacing="0">
<tr>
      <td width="30%" width="left" align="left" valign="top">Pool</td>
      <td width="1%" width="left" align="left" valign="top">:</td>
      <td width="69%" width="left" align="left" valign="top"><label for="poltxt"></label>
        <label for="pollist"></label>
        <select name="pollist" size="1" id="pollist">
            
      <?php
      require ("config.php");
      $perintah="select distinct pool from trayek order by pool";
      $hasil=mysql_query($perintah);
      while ($data = mysql_fetch_array($hasil))
     {
  ?>
      <option value="<?php echo "$data[pool]"; ?>"><?php echo "$data[pool]"; }?></option>
      </select></td>
</tr>
<tr>
      <td width="30%" width="left" align="left" valign="top">Tujuan</td>
      <td width="1%" width="left" align="left" valign="top">:</td>
      <td width="69%" width="left" align="left" valign="top"><label for="tjntxt"></label>
        <label for="tjnlist"></label>
        <select name="tjnlist" size="1" id="tjnlist">
            
      <?php
      require ("config.php");
      $perintah="select distinct tujuan from trayek order by tujuan";
      $hasil=mysql_query($perintah);
      while ($data = mysql_fetch_array($hasil))
     {
  ?>
      <option value="<?php echo "$data[tujuan]"; ?>"><?php echo "$data[tujuan]"; }?></option>
      </select></td>
</tr>
<tr>
      <td width="30%" width="left" align="left" valign="top">Harga</td>
      <td width="1%" width="left" align="left" valign="top">:</td>
      <td width="69%" width="left" align="left" valign="top"><label>
          <?php
            include "config.php";
            $result = mysql_query("select * from trayek");
            $jsArray = "var id_trayek = new Array();\n";
            echo '<select name="pool" onchange="document.getElementById(\'id_trayek\').value = id_trayek[this.value]">';
            echo '<option>-------</option>';
            while ($row = mysql_fetch_array($result)) {
                echo '<option value="' . $row['pool'] . '">' . $row['pool'] . '</option>';
                $jsArray .= "id_trayek['" . $row['pool'] . "'] = '" . addslashes($row['id_trayek']) . "';\n";
            }
            echo '</select>';
            ?>


            <input name="id_trayek" id="id_trayek"/>
            <script type="text/javascript">
            <?php echo $jsArray; ?>
            </script>
      </label>
        </span></td>
</tr>
</table>