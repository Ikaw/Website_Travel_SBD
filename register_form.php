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

input.error {
    border: 1px dotted #F00;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $("#form1").validate({
    //aturan validasi setiap form input
    rules: {
      namatxt: "required",
      almtxt: "required",
      tlptxt: {
        required: true,
        number: true
      },
      emltxt: {
        required: true,
        email : true
      },
      usrtxt: "required",
      psstxt: {
        required: true,
        minlength: 6
      }

    }

  });
});
</script>

<form id="form1" name="form1" method="post" action="member_tambah.php">
  <table width="650" border="0" align="center">
    <tr>
      <td colspan="3" align="left">Silakan isi data di bawah ini untuk membuat akun baru... <hr color="black"/></td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Nama Lengkap</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="69%" align="left" valign="top">
        <input name="namatxt" type="text" id="namatxt" size="40" required="" />
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Alamat</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="almtxt"></label>
        <textarea name="almtxt" cols="30" rows="5"/ required=""></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">Telepon</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="tlptxt"></label>
        <input type="text" name="tlptxt" id="tlptxt" size="40" required=""/ ></td>
    </tr>
    <tr>
      <td align="left" valign="top">Email</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="emltxt"></label>
        <input type="email" name="emltxt" id="emltxt" size="40" required=""/></td>
    </tr>
    <tr>
      <td align="left" valign="top">Username</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="usrtxt"></label>
        <input type="text" name="usrtxt" id="usrtxt" size="40" required="" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Password</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="psstxt"></label>
        <input type="password" name="psstxt" id="psstxt" size="40" required="" /></td>
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
