<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de médicos</title>
<style type="text/css">
<!--
.style6 {font-size: 13px}
.style8 {font-size: 14px; font-weight: bold; }
.style10 {font-size: 14px}
-->
</style>
<link rel="stylesheet" type="text/css" href="css/formato.css" />
<script type='text/javascript' src='script/livevalidation_standalone.js'> </script>

<script language="JavaScript">

function IngresarOtro(obj) {
	
	if (!document.layers) 
	{  
	 	var txt = document.getElementById("Campo_esp");
 		if (obj.value == "Otra_esp") { 
			alert(obj.value);
 			txt.style.display = "inline"; 
			//var Campo_esp = new LiveValidation('Campo_esp');
			//Campo_esp.disable();
 		} 
		else { 
 			txt.style.display = "none";  
			txt.value = "";  
			//obj.name = "txtOtra_esp"; 
			//alert(obj.value);
 		}  	
 	} 
 }  
</script>
</head>

<body>
<?php //require("script/header_links.html"); ?>
  <form id='form2' method='Post' action="valida.php">
    <table width='53%' height='87%' border='0'>
      <tr>
    <td height='74' colspan='3'><h1>
      <input type='hidden' name='hd_name' value = 'Medico_registro'/>
      Registro de m&eacute;dico (registro_medico.php) </h1></td>
  </tr>
  <tr>
    <td width='177' height='24' class='style6'><span class='style10'>
      * Id que utilizas en Twitter:</span></td>
    <td colspan='2'><input name="txtId_Twitter" type="text" id="txtId_Twitter" />
    <script language="javascript">		
		var txtId_Twitter = new LiveValidation('txtId_Twitter' );
		txtId_Twitter.add( Validate.Presence );
		txtId_Twitter.add( Validate.Text );
		</script>
        </td>
  </tr>
  <tr>
    <td height='24' class='style6'><span class="style10">* Id que utilizas en Facebook:</span></td>
    <td colspan='2'><input name='txtId_Facebook' type='text' id='txtId_Facebook' />
        <script language="javascript">		
		var txtId_Facebook = new LiveValidation('txtId_Facebook' );
		txtId_Facebook.add( Validate.Presence );
		txtId_Facebook.add( Validate.Text );
		</script></td>
  </tr>
  <tr>
    <td width='177' height='24' class='style6'><span class='style10'>* Ced. Profesional:</span></td>
    <td width='342' colspan='2'><input name='txtCedula' type='text' id='txtCedula' />
        <script language="javascript">		
		var txtCedula = new LiveValidation('txtCedula' );
		txtCedula.add( Validate.Presence );
		</script></td>
   </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>* Especialidad:</span></td>
    <td colspan='2'><span class='style10'>
    
    <?php
	require("script/conexion.php");
	
	$q = 'select * from especialidades order by Especialidad';
	$result = mysql_query($q,$db)
	or die("<br>Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());
    ?>
    
<select name="cmbEspecialidad" id="cmbEspecialidad" onchange="IngresarOtro(this)">  
	
	<?php 
	if ($row = mysql_fetch_array($result)){ 
		do { 
				echo '<option value= "'.$row["id_Especialidad"].'">'.$row["Especialidad"].'</option>';
			} 
		while ($row = mysql_fetch_array($result)); 
	}
	?>
    	<!--script language="javascript">
		//var cmbEspecialidad = new LiveValidation('cmbEspecialidad', {wait: 2000} );
		//cmbEspecialidad.add(Validate.Exclusion, { within: [''], failureMessage: "Seleccionar un valor"} } );
		
		</script-->
<option value="Otra_esp">Otra especialidad</option> 
</select> 
<input type='text' name='txtOtra_esp' id='Campo_esp' style='display:none;' /> 
	<!--script language="javascript">
		//var Campo_esp = new LiveValidation('Campo_esp', {wait: 2000} );
		//Campo_esp.add( Validate.Presence );
		//Campo_esp.add( Validate.Text );
		//Campo_esp.disable();
	</script-->
 
    </span></td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>* Universidad Egresado:</span></td>
    <td colspan='2'><input name='txtUniv' type='text' id='txtUniv' />
    <script language="javascript">
		var txtUniv = new LiveValidation('txtUniv', {wait: 2000} );
		txtUniv.add( Validate.Presence );
		txtUniv.add( Validate.Text );
	</script>
    </td>
  </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>Sub-Especialidad:</span></td>
    <td colspan='2'><input name='txtSubEspecialidad' type='text' id='2' /></td>
  </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>Egresado Sub-Especialidad: </span></td>
    <td colspan='2'><input name='txtEgresaSubEspecialidad' type='text' id='2' /></td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>Hospital donde labora:</span></td>
    <td colspan='2'><input name='txtHospital' type='text' id='5' /></td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>* Direcci&oacute;n consultorio:</span></td>
    <td colspan='2'><input name='txtCalleCons' type='text' id='txtCalleCons' />
    <script language="javascript">
		var txtCalleCons = new LiveValidation('txtCalleCons', {wait: 2000} );
		txtCalleCons.add( Validate.Presence );
		txtCalleCons.add( Validate.Text );
	</script>
</td>
  </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>* Colonia consultorio:</span></td>
    <td colspan='2'><label>
      <input name='txtColoniaCons' type='text' id='txtColoniaCons' />
      </label>   
    <script language="javascript">
		var txtColoniaCons = new LiveValidation('txtColoniaCons', {wait: 2000} );
		txtColoniaCons.add( Validate.Presence );
		txtColoniaCons.add( Validate.Text );
	</script> </td>
  </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>* Delegaci&oacute;n consultorio:</span></td>
    <td colspan='2'><label>
      <select name='cmbDelegacionCons' id='cmbDelegacionCons'>
	  	<option value=''></option>
        <option value='Alvaro Obreg&oacute;n'>Alvaro Obreg&oacute;n</option>
        <option value='Azcapotzalco'>Azcapotzalco</option>
        <option value='Benito Ju&aacute;rez'>Benito Ju&aacute;rez</option>
        <option value='Coyoac&aacute;n'>Coyoac&aacute;n</option>
        <option value='Cuajimalpa'>Cuajimalpa</option>
        <option value='Cuauht&eacute;moc'>Cuauht&eacute;moc</option>
        <option value='Gustavo A. Madero'>Gustavo A. Madero</option>
        <option value='Iztacalco'>Iztacalco</option>
        <option value='Iztapalapa'>Iztapalapa</option>
        <option value='Magdalena Contreras'>Magdalena Contreras</option>
        <option value='Miguel Hidalgo'>Miguel Hidalgo</option>
        <option value='Milpa Alta'>Milpa Alta</option>
        <option value='Tl&aacute;huac'>Tl&aacute;huac</option>
        <option value='Tlalpan'>Tlalpan</option>
        <option value='Venustiano Carranza'>Venustiano Carranza</option>
        <option value='Xochimilco'>Xochimilco</option>
      </select>
    </label>   
  	<script language="javascript">
		var cmbDelegacionCons = new LiveValidation('cmbDelegacionCons', {wait: 2000} );
		cmbDelegacionCons.add(Validate.Exclusion, { within: [''], failureMessage: "Seleccionar un valor"} } );
	</script> </td>
  </tr>
  <tr>
    <td height='28' class='style6'><span class='style10'>* CP consultorio:</span></td>
    <td colspan='2'><label>
      <input name='txtCPCons' type='text' id='txtCPCons' maxlength="5"/>
      </label> 
    <script language="javascript">
		var txtCPCons = new LiveValidation('txtCPCons', {wait: 2000} );
		txtCPCons.add( Validate.Presence );
		txtCPCons.add( Validate.Numericality, { onlyInteger: true } );
		txtCPCons.add( Validate.Length, { is: 5} );
	</script>   </td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>* Tel. consultorio 1:</span></td>
    <td colspan='2'><label>
    <input name='txtTelCons1' type='text' id='txtTelCons1' maxlength="10"/></label>
    <script language="javascript">
		var txtTelCons1 = new LiveValidation('txtTelCons1', {wait: 2000} );
		txtTelCons1.add( Validate.Presence );
		txtTelCons1.add( Validate.Numericality, { onlyInteger: true } );
		txtTelCons1.add( Validate.Length, { is: 10} );
	</script></td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>Tel. consultorio 2:</span></td>
    <td colspan='2'><input name='txtTelCons2' type='text' id='txtTelCons2' maxlength="10"/>
    <script language="javascript">
		var txtTelCons2 = new LiveValidation('txtTelCons2', {wait: 2000} );
		txtTelCons2.add( Validate.Numericality, { onlyInteger: true } );
		txtTelCons2.add( Validate.Length, { is: 10} );
	</script></td>
  </tr>
  <tr>
    <td height='24' class='style6'><span class='style10'>* Ciudad consultorio:</span></td>
    <td colspan='2'><label></label>
      <input name='txtCiudadCons' type='text' id='txtCiudadCons' />
	<script language="javascript">
		var txtCiudadCons = new LiveValidation('txtCiudadCons', {wait: 2000} );
		txtCiudadCons.add( Validate.Presence );
		txtCiudadCons.add( Validate.Text );
	</script></td>
  </tr>
  <tr>
    <td class='style6'><span class='style10'>* Estado:</span></td>
    <td colspan='2'>
	<select name='cmbEstadoCons' id='cmbEstadoCons'>
    	<option value=''></option>
		<option value='Distrito Federal'>Distrito Federal</option>
		<option value='Estado de M&eacute;xico'>Estado de M&eacute;xico</option>
    </select></td>
  </tr>
  <tr>
    <td height='28'>&nbsp;</td>
    <td colspan='2'><table width='203' height='37' border='0'>
      <tr>
        <td><input name="BtnLogin" type="submit" value="Registrar" /></td>
        <td><input name='BtnReset' type='reset' value='Borrar' /></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>


</body>
</html>
