<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Califica Médico</title>
</head>
<? $db = mysql_connect("medicos", "mike33", "gre081");
mysql_select_db("medicos",$db) or die ('No se pudo conectar a la BD de medicos(califica.php)');

$idMedico = $_POST['id_medico'] ;
?>

<body>

<table width="232" border="0">
  <tr>
    <th width="75" scope="col"><a href="Registro.php">Registro</a></th>
    <th width="147" scope="col"><a href="Buscar_med.html">Buscar m&eacute;dico </a></th>
  </tr>
</table>
<? 
	
	$q = " select * from usuarios where id_usuario = $idMedico ";
	$result = mysql_query($q,$db) 
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());

	$num_rows = mysql_num_rows($result);
	if ($myrow = mysql_fetch_array($result)) 
	{
?>
<br>
Cuestionario para evaluar al médico <? $myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"] ?>:<em></em>
<form id="form1" name="form1" method="post" action="valida.php">
<table width="498" border="0">
  <tr>
    <td colspan="10"><strong>
      <input type="hidden" name="hd_name" value = "Calificar"/>
      <input type="hidden" name="hd_idMedico" value = "<? echo $idMedico; ?>"/>
      1. &iquest;C&oacute;mo calificar&iacute;as en general al m&eacute;dico? % </strong></td>
  </tr>
  <tr>
    <td width="42"><input name="rdPreg1" type="radio" value="1" id="radio1" />
        <label for="radio">1</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="2" id="radio2" />
      <label for="radiobutton">2</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="3" id="radio3" />
      <label for="radio2">3</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="4" id="radio4" />
      <label for="radio3">4</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="5" id="radio5" />
      <label for="radio4">5</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="6" id="radio6" />
      <label for="radio9">6</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="7" id="radio7" />
      <label for="radio5">7</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="8" id="radio8" />
      <label for="radio6">8</label>    </td>
    <td width="42"><input name="rdPreg1" type="radio" value="9" id="radio9" />
      <label for="radio7">9</label>    </td>
    <td width="56"><input name="rdPreg1" type="radio" value="10" id="radio10" />
      <label for="radio8">10</label>    </td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="10"><strong>2. &iquest;Resolvi&oacute; todas tus dudas o preguntas que le hac&iacute;as?</strong></td>
  </tr>
  <tr>
    <td><input name="rdPreg2" type="radio" value="1" id="radio11" />
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
    <td colspan="10">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="10"><strong>3. &iquest;Fue acertado en el diagn&oacute;stico de tu enfermedad?</strong></td>
  </tr>
  <tr>
    <td><input name="rdPreg3" type="radio" value="1" id="radio21" />
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
    <td colspan="10"></div></td>
    </tr>
  <tr>
    <td colspan="10"><strong>4. Por favor, califica al doctor en base a sus conocimientos</strong></td>
  </tr>
  <tr>
    <td><input name="rdPreg4" type="radio" value="1" id="radio31" />
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
    <td colspan="10"><p>Comentarios adicionales:
        <label for="textarea"></label>
      <textarea name="txtComentarios" id="txtComentarios"></textarea>
    </p>
      </td>
    </tr>
  <tr>
    <td colspan="10"><table width="184" border="0" align="center">
      <tr>
        <td width="85"><div align="center">
            <input name="BtnLogin" type="submit" id="BtnLogin" value="Registrar" />
        </div></td>
        <td width="89"><div align="center">
            <input name="BtnReset" type="reset" id="BtnReset" value="Cancelar" />
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
<? } ?>
</body>
</html>
