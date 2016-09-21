<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Califica Médico</title>

<link rel="stylesheet" type="text/css" href="css/formato.css" />
<script type='text/javascript'  src='script/livevalidation_standalone.js'> </script>

</head>

<body>

<!--table width="232" border="0">
  <tr>
    <th width="75" scope="col"><a href="Registro.php">Registro</a></th>
    <th width="147" scope="col"><a href="Buscar_med.php">Buscar m&eacute;dico </a></th>
  </tr>
</table-->
<? 
	require("script/header_links.html");
	require("script/conexion.php");

	$id_medico = $_POST['id_medico'] ;
	
	//var_dump($_POST);
	
	$q = " select * from usuarios where id_usuario = $id_medico ";
	
	$result = mysql_query($q,$db) 
	or die("<br>Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());

	$num_rows = mysql_num_rows($result);
	$myrow = mysql_fetch_array($result);

	if (!empty($myrow)) 
	{
?>
<br><br>
Cuestionario para evaluar al médico: <strong><font size="+2"><?php echo $myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"] ?></font> </strong><br><br>
<form id="form1" name="form1" method="post" action="valida.php">
<table width="52%" height="397" border="0">
  <tr>
    <td colspan="10"><strong>Instrucciones:</strong> Eval&uacute;a al m&eacute;dico tomando en cuenta que el 10 es la mejor calificaci&oacute;n.</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10">
      <input type="hidden" name="hd_name" value = "Calificar"/>
      <input type="hidden" name="hd_idMedico" value = "<?php echo $id_medico; ?>"/>
      1. &iquest;C&oacute;mo calificar&iacute;as en general al m&eacute;dico?</td>
  </tr>
  <tr>
    <td width="58"><input name="rdPreg1" type="radio" id="radio1" value="1" checked="checked" />
      <label for="radio">1</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="2" id="radio2" />
      <label for="radiobutton">2</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="3" id="radio3" />
      <label for="radio2">3</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="4" id="radio4" />
      <label for="radio3">4</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="5" id="radio5" />
      <label for="radio4">5</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="6" id="radio6" />
      <label for="radio9">6</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="7" id="radio7" />
      <label for="radio5">7</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="8" id="radio8" />
      <label for="radio6">8</label>    </td>
    <td width="58"><input name="rdPreg1" type="radio" value="9" id="radio9" />
      <label for="radio7">9</label>    </td>
    <td width="69"><input name="rdPreg1" type="radio" value="10" id="radio10" />
      <label for="radio8">10</label>    </td>
  </tr>
  <tr>
    <td colspan="10">2. &iquest;Resolvi&oacute; todas tus dudas o preguntas que le hac&iacute;as?</td>
  </tr>
  <tr>
    <td><input name="rdPreg2" type="radio" value="1" id="radio11" checked="checked"/>
      <label for="radio">1</label>    </td>
    <td><input name="rdPreg2" type="radio" value="2" id="radio12" />
    <label for="radiobutton">2</label>    </td>
    <td><input name="rdPreg2" type="radio" value="3" id="radio13" />
    <label for="radio2">3</label>    </td>
    <td><input name="rdPreg2" type="radio" value="4" id="radio14" />
    <label for="radio3">4</label>    </td>
    <td><input name="rdPreg2" type="radio" value="5" id="radio15" />
    <label for="radio4">5</label>    </td>
    <td><input name="rdPreg2" type="radio" value="6" id="radio16" />
    <label for="radio9">6</label>    </td>
    <td><input name="rdPreg2" type="radio" value="7" id="radio17" />
    <label for="radio5">7</label>    </td>
    <td><input name="rdPreg2" type="radio" value="8" id="radio18" />
    <label for="radio6">8</label>    </td>
    <td><input name="rdPreg2" type="radio" value="9" id="radio19" />
    <label for="radio7">9</label>    </td>
    <td><input name="rdPreg2" type="radio" value="10" id="radio20" />
    <label for="radio8">10</label>    </td>
  </tr>
  <tr>
    <td colspan="10">3. &iquest;Fue acertado en el diagn&oacute;stico de tu enfermedad?</td>
  </tr>
  <tr>
    <td><input name="rdPreg3" type="radio" value="1" id="radio21" checked="checked"/>
    <label for="radio">1</label>    </td>
    <td><input name="rdPreg3" type="radio" value="2" id="radio22" />
    <label for="radiobutton">2</label>    </td>
    <td><input name="rdPreg3" type="radio" value="3" id="radio23" />
    <label for="radio2">3</label>    </td>
    <td><input name="rdPreg3" type="radio" value="4" id="radio24" />
    <label for="radio3">4</label>    </td>
    <td><input name="rdPreg3" type="radio" value="5" id="radio25" />
    <label for="radio4">5</label>    </td>
    <td><input name="rdPreg3" type="radio" value="6" id="radio26" />
    <label for="radio9">6</label>    </td>
    <td><input name="rdPreg3" type="radio" value="7" id="radio27" />
    <label for="radio5">7</label>    </td>
    <td><input name="rdPreg3" type="radio" value="8" id="radio28" />
    <label for="radio6">8</label>    </td>
    <td><input name="rdPreg3" type="radio" value="9" id="radio29" />
    <label for="radio7">9</label>    </td>
    <td><input name="rdPreg3" type="radio" value="10" id="radio30" />
    <label for="radio8">10</label>    </td>
  </tr>
  <tr>
    <td colspan="10"></td>
    </tr>
  <tr>
    <td colspan="10">4. Califica al doctor en base a sus conocimientos</td>
  </tr>
  <tr>
    <td><input name="rdPreg4" type="radio" value="1" id="radio31" checked="checked"/>
    <label for="radio">1</label>    </td>
    <td><input name="rdPreg4" type="radio" value="2" id="radio32" />
    <label for="radiobutton">2</label>    </td>
    <td><input name="rdPreg4" type="radio" value="3" id="radio33" />
    <label for="radio2">3</label>    </td>
    <td><input name="rdPreg4" type="radio" value="4" id="radio34" />
    <label for="radio3">4</label>    </td>
    <td><input name="rdPreg4" type="radio" value="5" id="radio35" />
    <label for="radio4">5</label>    </td>
    <td><input name="rdPreg4" type="radio" value="6" id="radio36" />
    <label for="radio9">6</label>    </td>
    <td><input name="rdPreg4" type="radio" value="7" id="radio37" />
    <label for="radio5">7</label>    </td>
    <td><input name="rdPreg4" type="radio" value="8" id="radio38" />
    <label for="radio6">8</label>    </td>
    <td><input name="rdPreg4" type="radio" value="9" id="radio39" />
    <label for="radio7">9</label>    </td>
    <td><input name="rdPreg4" type="radio" value="10" id="radio40" />
    <label for="radio8">10</label>    </td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="10">Comentarios adicionales:
        <label for="textarea"></label>
      <textarea name="txtComentarios" cols="30" rows="5" id="txtComentarios"></textarea>
      </td>
    </tr>
  <tr>
    <td colspan="10"><table width="184" border="0" align="center">
      <tr>
        <td width="85"><div align="center">
            <input name="BtnLogin" type="submit" id="BtnLogin" value="Registrar" />
        </div></td>
        <td width="89"><div align="center">
            <input name="BtnReset" type="reset" id="BtnReset" value="Borrar" />
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
<script type="text/javascript">
//Valida txtComentarios
		var txtComentarios = new LiveValidation('txtComentarios', {wait: 2000});
		txtComentarios.add( Validate.Presence );
		txtComentarios.add( Validate.Text );
		txtComentarios.add( Validate.Length, { minimum: 3} );
</script> 
<? } ?>
</body>
</html>
