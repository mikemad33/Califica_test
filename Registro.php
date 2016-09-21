<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de usuarios</title>

<link rel="stylesheet" type="text/css" href="css/formato.css" />
<script type='text/javascript'  src='script/livevalidation_standalone.js'> </script>

<script type="text/javascript">

/*
function valida_campos(){

	var cm_nombre = /^([a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\s|\.|-)+$/
	var cm_telefono = /^([0-9\s\+\-])+$/
	var cm_Email=/^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/ 

	if(document.fvalida.txtNombre.value.length== 0) {
		alert("Debe ingresar un nombre");
		document.fvalida.txtNombre.focus();
		return 0; 
	}
		

	if(!cm_nombre.test(document.fvalida.txtNombre.value)) {  {
		alert("Debe ingresar un nombre2");
		document.fvalida.txtNombre.focus();
		return 0; 
	}
	

function validate_email(txt){
	 
	//comentar la siguiente linea si no se desea que aparezca el alert()  
	alert("Email " + (cm_Email.test(txt)?"":"no ") + "válido.")
	//devuelve verdadero si validacion OK, y falso en caso contrario  
	return cm_Email.test(txt) 
}


/*function validate_form(thisform) {
with (thisform){
	if (validate_required(txtNombre,"Name must be filled out!")==false) {
		txtNombre.focus();
		return false;
	}

  if (validate_required(txtApPaterno,"Ap Paterno must be filled out!")==false)
  {txtApPaterno.focus();return false;}

  if (validate_email(txtCorreo,"Not a valid e-mail address!")==false)
    {email.focus();return false;}

  }
}*/
/*
function vacio(q) {  
        for ( i = 0; i < q.length; i++ ) {  
                if ( q.charAt(i) != " " ) {  
                        return true  
                }  
        }  
        return false  
}  

function valida(F) {
	 alert("Introduzca un cadena de texto")
/*	    if( vacio(F.txtNombre.value) == false ) {  
                alert("Introduzca un cadena de texto")  
				F.txtNombre.focus();
                return false  
        } else {  
                alert("OK")  
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario  
                return false  
        }
*/
/*
}*/
</script>
<style type="text/css">
<!--
.style6 {font-size: 13px}
.style8 {font-size: 14px; font-weight: bold; }
.style10 {font-size: 14px}
-->
</style>


</head>

<body>
<?php require("script/header_links.html"); ?>

<form id="form1" method="Post" action="valida.php">
  
  <table width="53%" height="87%" border="0">
  <tr>
    <td height="74" colspan="3"><h1>
      <input type="hidden" name="hd_name" value = "Registro"/>
Registro en el sistema </h1></td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">
      * Nombre:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtNombre" type="text" id="txtNombre" />
      </label>    </td>
  </tr>
  <tr>
    <td width="180" height="24" class="style10"><span class="style10">* Ap. Paterno:</span></td>
    <td colspan="2" class="style10"><label>
    <input name="txtApPaterno" type="text" id="txtApPaterno" />
       </label> </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">* Ap. Materno:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtApMaterno" type="text" id="txtApMaterno" />

      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"> Sexo:</td>
    <td class="style10"><label>
      <input name="rd_Sexo" type="radio" value="Hombre" checked="checked"/>
      Hombre</label></td>
    <td class="style10"><label>
      <input name="rd_Sexo" type="radio" value="Mujer"/>
      Mujer</label></td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Direcci&oacute;n (Calle y n&uacute;m):</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtDireccion" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Colonia:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtColonia" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Delegaci&oacute;n:</span></td>
    <td colspan="2" class="style10"><label></label>    <label for="select"></label>
      <select name="cmbDelegacion" id="cmbDelegacion">
	  	<option value=""></option>
        <option value="Alvaro Obreg&oacute;n">Alvaro Obreg&oacute;n</option>
        <option value="Azcapotzalco">Azcapotzalco</option>
        <option value="Benito Ju&aacute;rez">Benito Ju&aacute;rez</option>
        <option value="Coyoac&aacute;n">Coyoac&aacute;n</option>
        <option value="Cuajimalpa">Cuajimalpa</option>
        <option value="Cuauht&eacute;moc">Cuauht&eacute;moc</option>
        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
        <option value="Iztacalco">Iztacalco</option>
        <option value="Iztapalapa">Iztapalapa</option>
        <option value="Magdalena Contreras">Magdalena Contreras</option>
        <option value="Miguel Hidalgo">Miguel Hidalgo</option>
        <option value="Milpa Alta">Milpa Alta</option>
        <option value="Tl&aacute;huac">Tl&aacute;huac</option>
        <option value="Tlalpan">Tlalpan</option>
        <option value="Venustiano Carranza">Venustiano Carranza</option>
        <option value="Xochimilco">Xochimilco</option>
      </select>      </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style6">CP:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtCP" type="text" id="txtCP" maxlength="5" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Tel:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtTel" type="text" id="txtTel" maxlength="10" />
    </label></td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Ciudad:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtCiudad" type="text" id="1" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">Estado:</span></td>
    <td colspan="2" class="style10"><label></label>    
	<select name="cmbEstado" id="cmbEstado">
		<option value=""></option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Estado de M&eacute;xico">Estado de M&eacute;xico</option>
      </select>      </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">E-mail:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtCorreo" type="text" id="txtCorreo" />

      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">* Login:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtLogin" type="text" id="txtLogin" />
      </label>    </td>
  </tr>
  <tr>
    <td height="24" class="style10"><span class="style10">* Password:</span></td>
    <td colspan="2" class="style10"><label>
      <input name="txtPwd" type="password" id="txtPwd" />
	</label>    </td>
  </tr>
  <tr>
    <td height="24"><span class="style8">&iquest;Eres  m&eacute;dico?:</span></td>
    <td width="73" class="style6"><label>
      <input name="rd_Tipo_usuario" type="radio" value="1"/>
      Si</label>    </td>
    <td width="306" class="style6"><label>
      <input name="rd_Tipo_usuario" type="radio" value="0" checked="checked"/>
      No</label>    </td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td colspan="2"><table width="203" height="37" border="0">
      <tr>
        <td width="91"><input name="BtnLogin" type="submit" value="Registrar" /></td>
        <td width="102"><input name="BtnReset" type="reset" value="Borrar datos" /></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
<script type="text/javascript">
	
//Valida txtNombre
		var txtNombre = new LiveValidation('txtNombre', {wait: 2000} );
		txtNombre.add( Validate.Presence );
		txtNombre.add( Validate.Text );
//Valida txtApPaterno
		var txtApPaterno = new LiveValidation('txtApPaterno', {wait: 2000} );
		txtApPaterno.add( Validate.Presence );
		txtApPaterno.add( Validate.Text );
//Valida txtApMaterno
		var txtApMaterno = new LiveValidation('txtApMaterno', {wait: 2000} );
		txtApMaterno.add( Validate.Presence );
		txtApMaterno.add( Validate.Text );
//Valida txtCP
		var txtCP = new LiveValidation('txtCP', {wait: 2000} );
		txtCP.add( Validate.Numericality, { onlyInteger: true } );
		txtCP.add( Validate.Length, { is: 5} );
//Valida txtTel
		var txtTel = new LiveValidation('txtTel', {wait: 2000} );
		txtTel.add( Validate.Numericality, { onlyInteger: true } );
		txtTel.add( Validate.Length, { is: 10} );
//Valida txtCorreo
		var txtCorreo = new LiveValidation('txtCorreo', {wait: 2000} );
		txtCorreo.add( Validate.Email );
//Valida txtLogin
		var txtLogin= new LiveValidation('txtLogin', {wait: 2000} );
		txtLogin.add( Validate.Presence );
		txtLogin.add( Validate.Length, { minimum: 3} );
//Valida txtPwd
		var txtPwd= new LiveValidation('txtPwd', {wait: 2000} );
		txtPwd.add( Validate.Presence );
		txtPwd.add( Validate.Length, { minimum: 3} );

/*var txtNombre = new LiveValidation( 'txtNombre', {onlyOnSubmit: true } );
txtNombre.add( Validate.Presence );
var txtApPaterno = new LiveValidation( 'txtApPaterno', {onlyOnSubmit: true } );
txtApPaterno.add( Validate.Presence );
var txtApMaterno = new LiveValidation( 'txtApMaterno', {onlyOnSubmit: true } );
txtApMaterno.add( Validate.Presence );

var automaticOnSubmit = field1.form.onsubmit;
field1.form.onsubmit = function(){
var valid = automaticOnSubmit();
if(valid)alert('The form is valid!');
return false;
}*/
</script> 
</body>
</html>
