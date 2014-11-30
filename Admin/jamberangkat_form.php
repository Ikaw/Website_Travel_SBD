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

<link href="styles/kendo.common.min.css" rel="stylesheet" />
<link href="styles/kendo.default.min.css" rel="stylesheet" />

<script src="js/jquery.min.js"></script>
<script src="js/kendo.web.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#jamtxt").kendoTimePicker();
	
	});
</script>

<form id="form1" name="form1" method="post" action="jamberangkat_tambah.php">
  <table width="400" border="0" align="left">
    <tr>
      <td width="10%" align="left" valign="top">Jam Berangkat </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="jamtxt" type="text" id="jamtxt" readonly="readonly" />
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
        <input type="submit" name="Submit" value="Simpan" />
      </label>
        <label>
          <input type="reset" name="Submit2" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
