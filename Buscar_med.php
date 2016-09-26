<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
<script type="text/javascript" charset="utf-8">
getTwitters('tweet', {
    id: 'madominguez33',
    count: 10,
    enableLinks: true,
    ignoreReplies: false,
    clearContents: false,
    template: '"%text%" <a href="http://twitter.com/%user_screen_name%/statuses/%id%/">%time%</a>'
});
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buscar m�dico</title>
<style type="text/css">
<!--
.style7 {font-size: 14px}
-->
</style>


</head>

<body>
<SCRIPT LANGUAGE="JavaScript">
function testButton (form){
    for (Count = 0; Count < 3; Count++) {
        if (form.rad[Count].checked )
			break;
		}
		alert ("Button " + Count + " is selected");
}
</SCRIPT>

<form id="form1" method="post" action="valida.php">
<!--table width='281' border='0'>
  <tr>
    <th width='104' scope='col'><a href="Registro.php">Reg&iacute;strate!!!</a></th>
    <th width='30' scope='col'><a href='login.html'>Ingresar</a> </th>
  </tr>
</table-->
<?php
require("script/header_links.html");

?>
  <table width="51%" height="27%" border="0">
    <tr>
      <td height="74" colspan="3"><h1>
        <input type="hidden" name="hd_name" value = "Buscar"/>
        Buscar m&eacute;dico </h1></td>
    </tr>
    <tr>
      <td width="168" height="28"><span class="style7">Nombre:</span></td>
      <td width="332" colspan="2"><input name="txtNombre" type="text" id="12" /></td>
    </tr>
    <tr>
      <td height="28"><span class="style7">Ap. Paterno:</span></td>
      <td colspan="2"><label>
        <input name="txtApPaterno" type="text" id="1" />
        </label>      </td>
    </tr>
    <tr>
      <td height="26"><span class="style7">Ap. Materno:</span></td>
      <td colspan="2"><label>
        <input name="txtApMaterno" type="text" id="1" />
        </label>      </td>
    </tr>
    <tr>
      <td height="28"><span class="style7">Especialidad:</span></td>
      <td colspan="2"><label></label>
        <span class="style7">

    <?php
	require("script/conexion.php");
	
	$q = 'select * from especialidades order by Especialidad';
	$result = mysql_query($q,$connection)
	or die("<br>Fall� el query:<br><pre> $q </pre><br>Error:". mysql_error());
    ?>
<select name="cmbEspecialidad" id="cmbEspecialidad" onchange="IngresarOtro(this)">  
	<option value="">Todos</option>
	<?php 
	if ($row = mysql_fetch_array($result)){ 
	
		do { 
				echo '<option value= "'.$row["id_Especialidad"].'">'.$row["Especialidad"].'</option>';
			} 
		while ($row = mysql_fetch_array($result)); 
	}
	?>
    
</select> 
      </span></td>
    </tr>
    <tr>
      <td height="24"><span class="style7">Estado:</span></td>
      <td colspan="2"><label></label>
          <select name="cmbEstadoCons" id="cmbEstadoCons">
            <option value="">Todos</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Estado de M&eacute;xico">Estado de M&eacute;xico</option>
                                                            </select>	  </td>
    </tr>
    <tr>
      <td height="28"><span class="style7"></span></td>
      <td colspan="2"><table width="200" border="0">
        <tr>
          <td><div align="center">
            <input name="BtnLogin" type="submit" id="BtnLogin" value="Buscar" />
          </div></td>
          <td><div align="center">
            <input name="BtnReset" type="reset" id="BtnReset" value="Cancelar" />
          </div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<div id="tweet"></div>
</body>
</html>