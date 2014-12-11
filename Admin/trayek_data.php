<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<html>
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Modal confirmation</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="js/jquery-ui-1.10.4.custom.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery.ui.core.js"></script>
  <script src="js/jquery.ui.widget.js"></script>
  <script src="js/jquery.ui.mouse.js"></script>
  <script src="js/jquery.ui.button.js"></script>
  <script src="js/jquery.ui.draggable.js"></script>
  <script src="js/jquery.ui.position.js"></script>
  <script src="js/jquery.ui.dialog.js"></script>
  <link rel="stylesheet" href="js/jquery-ui-1.10.4.custom.min.css">
  <script>
  $(document).ready(function() {

  var textPESAN = 'Anda yakin akan menghapus data tersebut ?';

  $("#dialog").dialog({
    modal: true,
    bgiframe: true,
    width: 500,
    height: 200,
    autoOpen: false,
    title: 'Konfirmasi'
    });

  // Set link
  $("a.confirm").click(function(link) {
        link.preventDefault();
        var ambilHREF = $(this).attr("href");
    var setingPESAN = $(this).attr("pesan");
    var textPESAN = (setingPESAN == undefined || setingPESAN == '') ? pesan_default : setingPESAN;
    var gambarICON = '<span class="ui-icon ui-icon-alert" style="float:left; margin:0 5px 0 0;"></span>';

    // set kotak dialog 
    $('#dialog').html('<P>' + gambarICON + textPESAN + '</P>');

    $("#dialog").dialog('option', 'buttons', {
                "Ya, Hapus" : function() {
                    window.location.href = ambilHREF;
                    },
                "Batal" : function() {
                    $(this).dialog("close");
                    }
                });
    $("#dialog").dialog("open");
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

<form id="form1" name="form1" method="post">
  <table width="250" border="0" align="right">
    <tr><hr widht="650" color="black">
      <td align="right" valign="middle">
        <label>
          <input name="schtxt" type="text" id="schtxt" size="40" />
        </label>
      </td>
      <td>
        <label>
          <input type="submit" name="Submit" value="Pencarian" />
        </label>
        </span>
      </td>
    </tr>
  </table>
</form>

<table width="650" border="1" cellpadding="0" cellspacing="0" bgcolor="#3e9fdd">
  <tr>
    <th width="5%" align="left" scope="col" >ID</th>
    <th width="30%" align="left" scope="col">Pool</th>
    <th width="30%" align="left" scope="col">Tujuan</th>
    <th width="25%" align="left" scope="col">Harga</th>
    <th width="10%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
echo '<div class="CSSTableGenerator">';

$search = $_POST['schtxt']; 
$query = "select * from trayek where id_trayek LIKE '%$search%' OR pool LIKE '%$search%' OR tujuan LIKE '%$search%' OR harga LIKE '%$search%'";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo '<tr>
<td align="left" width="5%" bgcolor="#FFFFFF">'.$data['id_trayek'].'</td>
<td align="left" width="30%" bgcolor="#FFFFFF">'.$data['pool'].'</td>
<td align="left" width="30%" bgcolor="#FFFFFF">'.$data['tujuan'].'</td>
<td align="left" width="25%" bgcolor="#FFFFFF">'.$data['harga'].'</td>
<td align="center" width="10%" bgcolor="#FFFFFF">
<a href="trayek_ubah.php?id_trayek='.$data[id_trayek].'"><img width="15" src="../gambar/Ubah.png" height="15" border="0" valign="middle"></a>
&nbsp;
&nbsp;
<a href="trayek_hapus.php?id_trayek='.$data[id_trayek].'" class="confirm" pesan="Anda yakin akan menghapus data tersebut ?"><img width="15" src="../gambar/Hapus.png" height="15" border="0" valign="middle"></a></td>
</tr>';

}
echo '</div>';

?><div id="dialog"></div>

</table>

</body>
</html>