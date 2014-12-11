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

<form id="form1" name="form1" method="post" action="trayek_tambah.php">
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
      <td width="left" align="left" valign="top">Pool </td>
      <td width="left" align="left" valign="top">:</td>
      <td width="left" align="left" valign="top"><label>
        <input name="poltxt" type="text" id="poltxt" size="40"/>
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Tujuan</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label>
        <input name="tjntxt" type="text" id="tjntxt" size="40"/>
	  </label>
		</span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Harga</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="wrntxt"></label>
      <input type="text" name="hrgtxt" id="hrgtxt" size="40"/></td>
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
