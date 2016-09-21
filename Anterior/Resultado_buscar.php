<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style6 {font-size: 13px}
-->
</style>
</head>

<body>

<br>
<table width="281" border="0">
  <tr>
    <th width="125" scope="col"><a href="Buscar_med.html">Buscar m&eacute;dico</a></th>
    <th width="104" scope="col"><a href="Registro.php">Registrar</a></th>
    <th width="30" scope="col"><a href="login.html">Ingresar</a> </th>
  </tr>
</table>
<a href="Buscar_med.html"></a>
<form id="form1" method="post" action="valida.php">
  <table width="514" height="228" border="0">
    <tr>
      <td height="74" colspan="3"><h1>
        <input type="hidden" name="hd_name" value = "Buscar"/>
        Buscar m&eacute;dico </h1></td>
    </tr>
    <tr>
      <td height="28"><span class="style6">Nombre:</span></td>
      <td width="332" colspan="2"><label>
        <input name="txtNombre" type="text" id="1" />
        </label>      </td>
    </tr>
    <tr>
      <td height="28"><span class="style6">Ap. Paterno:</span></td>
      <td colspan="2"><label>
        <input name="txtApPaterno" type="text" id="1" />
        </label>      </td>
    </tr>
    <tr>
      <td height="28"><span class="style6">Ap. Materno:</span></td>
      <td colspan="2"><label>
        <input name="txtApMaterno" type="text" id="1" />
        </label>      </td>
    </tr>
    <tr>
      <td width="168" height="28">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td colspan="2"><table width="200" border="0">
        <tr>
          <td><input name="BtnLogin" type="submit" id="BtnLogin" value="Buscar" /></td>
          <td><input name="BtnReset" type="reset" id="BtnReset" value="Cancelar" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
