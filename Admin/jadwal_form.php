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
      <?php
            include "config.php";
            $result = mysql_query("select * from trayek");
            $jsArray = "var pool = new Array();\n";
            echo '<select name="id_trayek" onchange="document.getElementById(\'pool\').value = pool[this.value]">';
            echo '<option>-------</option>';
            while ($row = mysql_fetch_array($result)) {
                echo '<option value="' . $row['id_trayek'] . '">' . $row['id_trayek'] . '</option>';
                $jsArray .= "pool['" . $row['id_trayek'] . "'] = '" . addslashes($row['pool']) . "';\n";
            }
            echo '</select>';
            ?>


            <input name="pool" id="pool"/>
            <script type="text/javascript">
            <?php echo $jsArray; ?>
            </script>
      </label</td>
    </tr>
	<tr>
      <td align="left" valign="top">ID Jam Berangkat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top">
        <?php
            include "config.php";
            $result = mysql_query("select * from jamberangkat");
            $jsArray = "var jam = new Array();\n";
            echo '<select name="id_jam" onchange="document.getElementById(\'jam\').value = jam[this.value]">';
            echo '<option>-------</option>';
            while ($row = mysql_fetch_array($result)) {
                echo '<option value="' . $row['id_jam'] . '">' . $row['id_jam'] . '</option>';
                $jsArray .= "jam['" . $row['id_jam'] . "'] = '" . addslashes($row['jam']) . "';\n";
            }
            echo '</select>';
            ?>


            <input name="jam" id="jam"/>
            <script type="text/javascript">
            <?php echo $jsArray; ?>
            </script></td>
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