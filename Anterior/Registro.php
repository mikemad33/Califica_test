<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de usuarios</title>
<style type="text/css">
<!--
.style6 {font-size: 13px}
-->
</style>

<script type="text/javascript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(txtCorreo,"Email must be filled out!")==false)
  {email.focus();return false;}
  }
}
</script>

</head>

<body>

<form id="form1" method="Post" action="valida.php" onsubmit="return validate_form(this)">
  <p><a href="Buscar_med.html">Busca a tu m&eacute;dico</a> </p>
  <table width="514" height="748" border="0">
  <tr>
    <td height="74" colspan="3"><h1>
      <input type="hidden" name="hd_name" value = "Registro"/>
Registro en el sistema </h1></td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Login:</span></td>
    <td colspan="2"><label>
      <input name="txtLogin" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Password:</span></td>
    <td colspan="2"><label>
      <input name="txtPwd" type="password" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">
    Nombre:</span></td>
    <td colspan="2"><label>
      <input name="txtNombre" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td width="168" height="28"><span class="style6">Ap. Paterno:</span></td>
    <td colspan="2"><input name="txtApPaterno" type="text" id="2" /></td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Ap. Materno:</span></td>
    <td colspan="2"><label>
      <input name="txtApMaterno" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Direcci&oacute;n (Calle y #):</span></td>
    <td colspan="2"><label>
      <input name="txtDireccion" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Colonia:</span></td>
    <td colspan="2"><label>
      <input name="txtColonia" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Delegaci&oacute;n:</span></td>
    <td colspan="2"><label>
      <input name="txtDelegacion" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">CP:</span></td>
    <td colspan="2"><label>
      <input name="txtCP" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Tel:</span></td>
    <td colspan="2"><label>
      <input name="txtTel" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Ciudad:</span></td>
    <td colspan="2"><label>
      <input name="txtCiudad" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Estado:</span></td>
    <td colspan="2"><label>
      <input name="txtEstado" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">E-mail:</span></td>
    <td colspan="2"><label>
      <input name="txtCorreo" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24"><span class="style6">&iquest;Eres  m&eacute;dico?:</span></td>
    <td width="79"><label>
      <input name="rd_Tipo_usuario" type="radio" value="1"/>
      Si</label>    </td>
    <td width="253"><label>
      <input name="rd_Tipo_usuario" type="radio" value="0" onSelect="readText(this.form)"/>
      No</label>    </td>
  </tr>
  <tr>
    <td height="28">Ced. Profesional: </td>
    <td colspan="2"><input name="txtCedula" type="text" id="txtCedula" /></td>
   </tr>
  <tr>
    <td height="28">Especialidad:</td>
    <td colspan="2"><input name="txtEspecialidad" type="text" id="2" /></td>
  </tr>
  <tr>
    <td>Universidad Egresado: </td>
    <td colspan="2"><input name="txtUniv" type="text" id="txt4" /></td>
  </tr>
  <tr>
    <td>Hospital donde labora:</td>
    <td colspan="2"><input name="txtHospital" type="text" id="5" /></td>
  </tr>
  <tr>
    <td>Direcci&oacute;n consultorio: </td>
    <td colspan="2"><input name="txtCalleCons" type="text" id="6" /></td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Colonia consultorio:</span></td>
    <td colspan="2"><label>
      <input name="txtColoniaCons" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Delegaci&oacute;n consultorio:</span></td>
    <td colspan="2"><label>
      <input name="txtDelegacionCons" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="28"><span class="style6">CP consultorio:</span></td>
    <td colspan="2"><label>
      <input name="txtCPCons" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td>Tel. consultorio 1: </td>
    <td colspan="2"><input name="txtTelCons1" type="text" id="7" /></td>
  </tr>
  <tr>
    <td>Tel. consultorio 2: </td>
    <td colspan="2"><input name="txtTelCons2" type="text" id="7" /></td>
  </tr>
  <tr>
    <td height="28"><span class="style6">Ciudad:</span></td>
    <td colspan="2"><label></label>
      <input name="txtCiudadCons" type="text" id="8" /></td>
  </tr>
  <tr>
    <td><span class="style6">Estado:</span></td>
    <td colspan="2"><input name="txtEstadoCons" type="text" id="txtEstadoCons" /></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td colspan="2"><table width="200" border="0">
      <tr>
        <td><input name="BtnLogin" type="submit" id="BtnLogin" value="Registrar" /></td>
        <td><input name="BtnReset" type="reset" id="BtnReset" value="Cancelar" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>
