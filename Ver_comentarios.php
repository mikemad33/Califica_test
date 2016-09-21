<?php  	
$id_medico = $_GET['id_medico'] ;
$Twitter = $_GET['cve_Twitter'] ;
//$Facebook = $_GET['cve_Facebook'] ;
?>
<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
<script type="text/javascript" charset="utf-8">

getTwitters('tweet', {
    id: '<?php echo $Twitter; ?>',
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar mas comentarios</title>
</head>
<body>
<?php 

	require("script/header_links.html");
	require("script/conexion.php");

	$q = " select b.id_evaluacion, c.Login, b.id_medico, a.Nombre, a.Ap_Paterno, a.Ap_Materno,  b.Fecha_eval, b.Comentarios, cve_Twitter, cve_Facebook,
			avg(b.Pregunta1 + b.Pregunta2 + b.Pregunta3 + b.Pregunta4)/4 as Prom
			from usuarios a inner join tipo_usuario d on a.id_usuario = d.id_medico 
			inner join evaluacion b on a.id_usuario = b.id_medico 
			left join usuarios c on b.id_usuario = c.id_usuario
			where b.id_medico = $id_medico 
			group by b.id_evaluacion order by b.Fecha_eval";
	
	$result = mysql_query($q,$db) 
	or die("<br>Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());

	//echo "<br>".$q;
	$num_rows = mysql_num_rows($result);
	$myrow = mysql_fetch_array($result);

	if (!empty($myrow)) 
	{
?>
<br><br>
Otros comentarios que han realizado del médico: <strong>
<?php 
$Nombre = $myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"];
echo $Nombre; 
?> </strong><br><br>

<table width="60%" border="1">
<tr>
	<td width='10%' height='40'><b>Usuario que comenta</td>
	<td width='10%' height='40'><b>Fecha de registro</td>
	<td width='20%' height='40'><b>Comentarios</td>
	<td width='10%' height='40'><b>Calificación Promedio</td>
</tr>

   <?php
  do { 
	echo "
		  <tr>
		  	<td width='10%' height='40'>";
			if (empty($myrow["Login"])) {
				echo "Anónimo";
			}
			else {
				echo $myrow["Login"];
			}
			echo "</td>
			<td width='10%' height='40'>".$myrow["Fecha_eval"]."</td>
			<td width='10%' height='40'>".$myrow["Comentarios"]."</td>
			<td width='10%' height='40'>".number_format($myrow["Prom"],2)."</td>
    	  </tr>";
    
   } while ($myrow = mysql_fetch_array($result));
	}
   ?>
</table>
<table width="60%" border="1">
<tr>
    <td>Estos son los tweets de <strong> <?php echo $Nombre; ?> </strong> </td>
</tr>
<tr>
    <td><div id="tweet"></div></td>
</tr>
</table>    

</body>
</html>