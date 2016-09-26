<html>
<body>
<?php
//if (!isset($_POST['submit'])) 
//{
/* //Se conecta a la BD
$db = mysqli_connect("localhost", "root", "gre081");
mysqli_select_db($db,"medicos2") or die ('No se pudo conectar a la BD');
$hd_name = $_POST['hd_name'];

echo "Valor de campo: ".$hd_name ."<br>";
*/
//Valida tipo de ingreso a la BD

require("script/conexion.php");

switch($hd_name) {

Case "Login":
	$login = $_POST['txtlogin'] ;
  	$pwd = $_POST['txtPassword'] ;

	$q="SELECT Nombre FROM Usuarios where login = '$login' and Pwd = '$pwd'";

	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute; el query:<br><pre> $q </pre><br>Error:". mysqli_error());

	$num_rows = mysqli_num_rows($result);
	if ($myrow = mysqli_fetch_array($result)) 
	{
		echo "<br>Bienvenido ".$myrow["Nombre"]."!!!";
		
		echo "<br><a href='Buscar_med.php'>Buscar m&eacute;dico</a>";
	} else {
	echo "<br>El registro no se pudo leer";
	} 

	$result = mysqli_query( $db, $q) or die("Falla al buscar en la BD:<br><pre>$q</pre><br>Error: " . mysqli_error());
	
	//mysqli_free_result($q);
//mysqli_close($db);

	break; //Termina "Ingresa"


//********************************************************************************************
//Inicia Registro

Case "Registro":

	require("script/header_links.html");
	
	$Login = $_POST['txtLogin'] ;
	$Pwd = $_POST['txtPwd'] ;
	$Sexo = $_POST['rd_Sexo'] ;
	$Nombre = $_POST['txtNombre'] ;
	$ApPaterno = $_POST['txtApPaterno'] ;
	$ApMaterno = $_POST['txtApMaterno'] ;
	$Direccion = $_POST['txtDireccion'] ;
	$Colonia = $_POST['txtColonia'] ;
	$Delegacion = $_POST['cmbDelegacion'] ;
	$CP = $_POST['txtCP'] ;
	$Tel = $_POST['txtTel'] ;
	$Ciudad = $_POST['txtCiudad'] ;
	$Estado = $_POST['cmbEstado'] ;
	$Correo = $_POST['txtCorreo'] ;
	
	$Tipo_usuario = $_POST['rd_Tipo_usuario'] ;
	
	//var_dump ($_POST);
	//Inserta valores en tabla USUARIOS
	$q = "insert into usuarios (Login, Pwd, Nombre, Ap_Paterno, Ap_Materno, Calle,
	Colonia, Delegacion, CP, Tel_contacto, Cd, Estado, email, Tipo_usuario, Sexo ) 
	values ( '$Login', '$Pwd', '$Nombre', '$ApPaterno', '$ApMaterno', '$Direccion', '$Colonia', 
	'$Delegacion', '$CP', '$Tel', '$Ciudad', '$Estado', '$Correo', '$Tipo_usuario', '$Sexo')";
	
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
	//echo $q;	
	//echo "<br>$Tipo_usuario";
	if ($Tipo_usuario == "1")
	{
		require("Registro_medico.php");
	}
	else {
		echo "<br>Hola <b>".$Nombre." ".$ApPaterno." ".$ApMaterno."</b>, tus datos se guardaron correctamente<br>";
	}
	
	break;
	
//********************************************************************************************
//Inicia Registro m&eacute;dico
case "Medico_registro":
	
	require("script/header_links.html");
	
	echo "<br>Pas&oacute registro m&eacutedico";	
	
	$idTwitter = $_POST['txtId_Twitter'] ;
	$idFacebook = $_POST['txtId_Facebook'] ;
	$Cedula = $_POST['txtCedula'] ;
	$Esp = $_POST['cmbEspecialidad'] ;
	$Otra_esp = $_POST['txtOtra_esp'] ;
	$Egresa = $_POST['txtUniv'] ;
	$SubEsp = $_POST['txtSubEspecialidad'] ;
	$EgresaSubEsp = $_POST['txtEgresaSubEspecialidad'] ;
	$Hospital = $_POST['txtHospital'] ;	
	$CalleCons = $_POST['txtCalleCons'] ;	
	$ColoniaCons = $_POST['txtColoniaCons'] ;
	$DelegacionCons = $_POST['cmbDelegacionCons'] ;	
	$CPCons = $_POST['txtCPCons'] ;	
	$TelCons1 = $_POST['txtTelCons1'] ;	
	$TelCons2 = $_POST['txtTelCons2'] ;	
	$CiudadCons = $_POST['txtCiudadCons'] ;
	$EstadoCons = $_POST['cmbEstadoCons'] ;


	//var_dump ($_POST);
	/*echo "<br><br>Especialidad: ".$Esp;
	echo "<br>Otra Esp: ".$Otra_esp;
	echo "<br>cmbEspecialidad: ".$_POST['cmbEspecialidad'] ;
	echo "<br>txtOtra_esp: ".$_POST['txtOtra_esp'] ;*/
	
	//Inserta valores en tabla ESPECIALIDADES
	if (!empty($Otra_esp)) {
		
		$q = "insert into especialidades (id_Especialidad, Especialidad) 
		values (null,'$Otra_esp')";
		
		//echo "<br><br>".$q;
		$result = mysqli_query($connection,$q)
		or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
			
		$q = "select * from Especialidades where Especialidad = '$Otra_esp'";
		
		$result = mysqli_query($connection,$q)
		or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
		
		$row = mysqli_fetch_array($result);
		$Esp = $row["id_Especialidad"];		
	}
	
	
	//Identifica el id_usuario que le corresponde al m&eacute;dico
	$q="select max(id_usuario) as Maximo from usuarios";
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
		
	$row = mysqli_fetch_array($result);
	$ultimo = $row["Maximo"];
	//echo "<br>El valor es: " .$row["maximo"];
	
	//Inserta valores en tabla TIPO_USUARIO
	$q = "insert into tipo_usuario (id_medico, id_Especialidad, cve_Twitter, cve_Facebook,
	SubEspecialidad, ced_prof, egresado, egresado_subesp, hospital_labora, calle_cons, 
	col_cons, del_cons, cp_cons, tel_cons1, tel_cons2, cd_cons, estado_cons) 
	values ('$ultimo','$Esp', '$idTwitter', '$idFacebook', '$SubEsp', '$Cedula', '$Egresa', 
	'$EgresaSubEsp', '$Hospital', '$CalleCons', '$ColoniaCons', '$DelegacionCons', '$CPCons', 
	'$TelCons1', '$TelCons2', '$CiudadCons', '$EstadoCons')";
	
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
	//echo "<br>". $q;

	$q="select Nombre, Ap_Paterno, Ap_Materno, Sexo from usuarios where id_usuario = $ultimo";
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
	
	$row = mysqli_fetch_array($result);
	$Nombre = $row["Nombre"];
	$Nombre = $row["Nombre"];
	$Ap_Paterno = $row["Ap_Paterno"];
	$Ap_Materno = $row["Ap_Materno"];
	$Sexo = $row["Sexo"];

	if ($Sexo == "Hombre") {
		echo "<br>Estimado Dr. <b>".$Nombre." ".$Ap_Paterno." ".$Ap_Materno."</b>, sus datos se guardaron correctamente<br>";
	}
	else  {
		echo "<br>Estimada Dra. <b>".$Nombre." ".$Ap_Paterno." ".$Ap_Materno."</b>, sus datos se guardaron correctamente<br>";
		}
	
/*
	$q=//"select * from datos_usuario";	
	"insert into Tipo_usuario (id_medico, id_medico, Especialidad, Ced_prof1, 
	Egresado1, Subespecialidad, Ced_prof2, Egresado2, Hospital_laboral, Horarios_consulta) 
	values ( '$Nombre', '$ApPaterno', '$ApMaterno', '$Direccion', '$Colonia', 
	'$Delegacion', '$CP', '$Tel', '$Estado', '$Ciudad', '$Correo')";
*/	
	break; //Termina "Registro"

//********************************************************************************************
//Inicia Buscar
case "Buscar":
	//echo "<br>Pasó a buscar<br>";
	
	require("script/header_links.html");
	
	$Nombre_med = $_POST['txtNombre'] ;
  	$ApPaterno_med = $_POST['txtApPaterno'] ;
  	$ApMaterno_med = $_POST['txtApMaterno'] ;
  	$id_Especialidad_med= $_POST['cmbEspecialidad'] ;
  	$Estado= $_POST['cmbEstadoCons'] ;

	$q = "SELECT b.id_medico, a.Nombre, a.Ap_Paterno, a.Ap_Materno, cve_Twitter, cve_Facebook,
	count(c.id_medico) as Evaluaciones, d.Especialidad, b.SubEspecialidad, b.Calle_cons, 
	b.Col_cons, b.Del_cons, b.CP_cons, b.Cd_cons, b.Estado_cons, b.Tel_cons1, b.Tel_cons2, 
	avg(c.Pregunta1 + c.Pregunta2 + c.Pregunta3 + c.Pregunta4)/4 as Prom, b.cve_Twitter, b.cve_Facebook 
	FROM usuarios a inner join tipo_usuario b on a.id_usuario = b.id_medico 
	inner join especialidades d on b.id_Especialidad = d.id_Especialidad 
	left join evaluacion c on b.id_medico = c.id_medico 
	
	WHERE a.tipo_usuario = 1 ";
	if (!empty($Nombre_med))
		$q = $q ."and a.Nombre like '%$Nombre_med%' ";
	
	if (!empty($ApPaterno_med))
		$q = $q ."and a.Ap_Paterno like '%$ApPaterno_med%' ";
				
	if (!empty($ApMaterno_med))
		$q = $q ."and a.Ap_Materno like '%$ApMaterno_med%' ";
	
	if (!empty($id_Especialidad_med))
		$q = $q ."and d.id_Especialidad = '$id_Especialidad_med' ";	
		
	if (!empty($Estado))
		$q = $q ."and b.Estado_cons like '%$Estado%' ";							

	$q = $q ."group by b.id_medico order by a.Nombre ";
	
	/*
	// Busca los m&eacute;dicos que aún no han sido calificados
	$q = "SELECT a.Nombre, a.Ap_Paterno, a.Ap_Paterno, b.id_medico, b.Especialidad, b.Calle_cons, 
	b.Col_cons, b.Del_cons, b.CP_cons, b.Cd_cons, b.Estado_cons, b.Tel_cons1, b.Tel_cons2
	FROM usuarios a, tipo_usuario b, Evaluacion c
	WHERE a.tipo_usuario = 1 and b.id_medico = c.id_medico and a.id_usuario = b.id_medico ";
	if (!empty($Nombre_med))
		$q = $q ."and a.Nombre like '%$Nombre_med%' ";
	
	if (!empty($ApPaterno_med))
		$q = $q ."and a.Ap_Paterno like '%$ApPaterno_med%' ";
				
	if (!empty($ApMaterno_med))
		$q = $q ."and a.Ap_Paterno like '%$ApPaterno_med%' ";
	
	if (!empty($Especialidad_med))
		$q = $q ."and b.Especialidad like '%$Especialidad_med%' ";						

	$q = $q ."group by c.id_medico";
	*/
	
	//echo "<br>$q";
	
	$result = mysqli_query($connection,$q) 
	or die("<br>Fall&oacute; el query buscar:<br><pre> $q </pre><br>Error:". mysqli_error());	
	
	$num_rows = mysqli_num_rows($result);	

	if ($myrow = mysqli_fetch_array($result)) 
	{
		echo "<br><br>Se encontraron <b>".$num_rows."</b> registros con los criterios seleccionados<BR><br>";
		echo "<form id='form1' method='Post' action='Califica.php'>";
		/*echo "<table width='100%' border=0>\n";
		echo "<tr><td>Se encontraron ".$num_rows." registros</td><tr>";
		echo "</table>";*/
		echo "<table width='100%' border=1>\n";
		echo "<tr><td></td>
		<td><b>Calificaci&oacute;n</td>
		<td width='5%'><b>Cantidad Evaluaciones</td>
		<td width='30%'><b>Nombre</td>
		<td><b>Especialidad</td>
		<td width='25%'><b>Direcci&oacute;n</td>
		<td><b>Tels. Consultorio</td>
		</tr>\n";
		do {
			$prom = round($myrow["Prom"],2);
			echo "<tr><td>
			<input type='radio' name='id_medico' value = ".$myrow["id_medico"]."></td>
			<td><div align='center'>$prom</div></td>
				<td><div align='center'>".$myrow["Evaluaciones"]."</div></td>
				<td valign='center'>".$myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"];
				if ($myrow["Evaluaciones"] == 0) {
					echo "<br>El m&eacutedico no ha sido evaluado ";
				}
				else {
					echo "<br><a href='Ver_comentarios.php?id_medico=".$myrow["id_medico"]."&cve_Twitter=".$myrow["cve_Twitter"]."&cve_Facebook=".$myrow["cve_Facebook"]." '>Ver m&aacute;s comentarios</a>";
				}
				echo "<br>
				<!--Agrega botón de Facebook-->
				<a target='_blank' href='http://facebook.com/".$myrow["cve_Facebook"]."'><img src='img/img_facebook_small.png' width='16' height='16' alt='Sigue m&eacute;dico en Facebook'/></a>
				
				<!--Agrega botón de Twitter para Mencionar usuario-->
<a href= 'https://twitter.com/intent/tweet?screen_name=".$myrow["cve_Twitter"]."'&text=Este%20m%C3%A9dico%20me%20pareci%C3%B3%20(escribe%20un%20comentario%20aqu%C3%AD)' class='twitter-mention-button' data-lang='es'>Tweet to @".$myrow["cve_Twitter"]."</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>

				<!--Agrega botón de Twitter para Seguir usuario-->
					<!--a href='https://twitter.com/".
					//$myrow["cve_Twitter"].
					"' class='twitter-follow-button' data-show-count='true' data-show-screen-name='true' data-lang='es'>Seguir @".
					//$myrow["cve_Twitter"].
					"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script-->

				</td>
				<td>".$myrow["Especialidad"]."</td>					
				<td>".$myrow["Calle_cons"]."
						<br>Col. ".$myrow["Col_cons"]." 
						<br>Del. ".$myrow["Del_cons"]." 
						<br>CP ".$myrow["CP_cons"]."
						<br>".$myrow["Cd_cons"]." ".$myrow["Estado_cons"]."</td>
				<td>".$myrow["Tel_cons1"]." 
				<br>".$myrow["Tel_cons2"]."</td>
						
			</tr>\n";
			} while ($myrow = mysqli_fetch_array($result));
		echo "<table width='200' border='0'>
        <tr>
		  <td></td>
          <td><input name='BtnCalificar' type='submit' id='BtnCalificar' value='Calificar' /></td>
          <td><input name='BtnReset' type='reset' id='BtnReset' value='Cancelar' /></td>
        </tr>
      </table>";
		echo "</table></form>\n";
	} else {
	echo "<br><b>No se encontraron criterios de b�squeda, por favor refine su b�squeda <a href='Buscar_med.php'> ingresando aqu�</a>";
	} 
	break; //Termina Buscar



//********************************************************************************************
Case "Calificar":
	$Preg1 = $_POST['rdPreg1'] ;
	$Preg2 = $_POST['rdPreg2'] ;
	$Preg3 = $_POST['rdPreg3'] ;
  	$Preg4 = $_POST['rdPreg4'] ;
  	$hd_idMedico = $_POST['hd_idMedico'] ;
	$Comentarios = $_POST['txtComentarios'] ;

	require("script/header_links.html");
	
	/*echo "<br>Preg1: " . $Preg1;
	echo "<br>Preg2: " . $Preg2;
	echo "<br>Preg3: " . $Preg3;
	echo "<br>Preg4: " . $Preg4;
	echo "<br>idMedico: " . $hd_idMedico;
	*/
	
	$fecha= date('Y-m-d');
	
	//Inserta valores en tabla EVALUACI�N
	$q=	"insert into evaluacion (id_medico, Pregunta1, Pregunta2, Pregunta3, Pregunta4, 
	Fecha_eval, Comentarios) 
	values ( '$hd_idMedico', '$Preg1', '$Preg2', '$Preg3', '$Preg4', '$fecha', '$Comentarios')";
	
	//echo "<br>Query: ".$q;
	
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());


	//Obtiene el nombre del usuario evaluado
	$q = "select * from usuarios where id_usuario = '$hd_idMedico' ";
	
	$result = mysqli_query($connection,$q)
	or die("<br>Fall&oacute el query:<br><pre> $q </pre><br>Error:". mysqli_error());
	
	$myrow = mysqli_fetch_array($result);
	
	echo "<br>El m&eacute;dico <b>".$myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"]."</b>, ha sido evaluado correctamente con la siguiente informaci�n:<br><br>";
	
	echo "<table border=0>
	<tr><td colspan='10' height='40'>1. &iquest;C&oacute;mo calificar&iacute;as en general al m&eacute;dico?</td><td><b>".$Preg1."</b></td></tr>
	<tr><td colspan='10' height='40'>2. &iquest;Resolvi&oacute; todas tus dudas o preguntas que le hac&iacute;as?</td><td><b>".$Preg2."</b></td></tr>
	<tr><td colspan='10' height='40'>3. &iquest;Fue acertado en el diagn&oacute;stico de tu enfermedad?</td><td><b>".$Preg3."</b></td></tr>
	<tr><td colspan='10' height='40'>4. Califica al doctor en base a sus conocimientos:</td><td><b>".$Preg4."<b></td></tr>
	<tr><td colspan='10' height='60'>Con los siguientes comentarios: <b>".$Comentarios."</b></td></tr>
	</tr></table>";

	break; //Termina "Calificar"

	mysqli_free_result($q);
}	


mysqli_close($connection);
/*else
	{ echo "No pasó"; }
}*/

?>
</body>
</html>
