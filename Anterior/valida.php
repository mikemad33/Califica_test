<?php

$hd_name = $_POST['hd_name'] ;
echo "Valor de campo: ".$hd_name ."<br>";

//if (!isset($_POST['submit'])) 
//{
// Se conecta a la BD
$db = mysql_connect('a3530152_medicos', "mike33", "gre081");
mysql_select_db("medicos",$db) or die ('No se pudo conectar a la BD (valida.php)');

//Valida tipo de ingreso a la BD
switch($hd_name) {

Case "Login":
	$login = $_POST['txtlogin'] ;
  	$pwd = $_POST['txtPassword'] ;

	$q="SELECT Nombre FROM usuarios where login = '$login' and Pwd = '$pwd'";

	$result = mysql_query($q,$db) 
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());

	$num_rows = mysql_num_rows($result);
	if ($myrow = mysql_fetch_array($result)) 
	{
		echo "<br>Bienvenido ".$myrow["Nombre"]."!!!";
		
		echo "<br><a href='Buscar_med.html'>Buscar médico</a>";
	} else {
	echo "<br>El registro no se pudo leer";
	} 

	$result = mysql_query( $q, $db ) or die("Failed More Information:<br><pre>$q</pre><br>Error: " . mysql_error());
	
	//mysql_free_result($q);
//mysql_close($db);

	break; //Termina "Ingresa"


//********************************************************************************************
//Inicia Registro
Case "Registro":

	echo "<table width='281' border='0'>
	  <tr>
	    <th width='125' scope='col'><a href='Buscar_med.html'>Buscar m&eacute;dico</a></th>
	    <th width='104' scope='col'><a href='Registro.php'>Registrar</a></th>
	    <th width='30' scope='col'><a href='login.html'>Ingresar</a> </th>
	  </tr>
	</table>";
	
	$Login = $_POST['txtLogin'] ;
	$Pwd = $_POST['txtPwd'] ;
	$Nombre = $_POST['txtNombre'] ;
  	$ApPaterno = $_POST['txtApPaterno'] ;
  	$ApMaterno = $_POST['txtApMaterno'] ;
  	$Direccion = $_POST['txtDireccion'] ;
	$Colonia = $_POST['txtColonia'] ;
	$Delegacion = $_POST['txtDelegacion'] ;
	$CP = $_POST['txtCP'] ;
	$Tel = $_POST['txtTel'] ;
	$Ciudad = $_POST['txtCiudad'] ;
	$Estado = $_POST['txtEstado'] ;
	$Correo = $_POST['txtCorreo'] ;

	$Tipo_usuario = $_POST['rd_Tipo_usuario'] ;
	$Esp = $_POST['txtEspecialidad'] ;
	$Cedula = $_POST['txtCedula'] ;
	$Univ = $_POST['txtUniv'] ;
	$Hospital = $_POST['txtHospital'] ;	
	$CalleCons = $_POST['txtCalleCons'] ;	
	$ColoniaCons = $_POST['txtColoniaCons'] ;
	$DelegacionCons = $_POST['txtDelegacionCons'] ;	
	$CPCons = $_POST['txtCPCons'] ;	
	$CiudadCons = $_POST['txtCiudadCons'] ;
	$EstadoCons = $_POST['txtEstadoCons'] ;
	$TelCons1 = $_POST['txtTelCons1'] ;	
	$TelCons2 = $_POST['txtTelCons2'] ;	

	//Inserta valores en tabla USAURIOS
	$q = "insert into usuarios (Login, Pwd, Nombre, Ap_Paterno, Ap_Materno, Calle,
	Colonia, Delegacion, CP, Tel_contacto, Cd, Estado, email, Tipo_usuario ) 
	values ( '$Login', '$Pwd', '$Nombre', '$ApPaterno', '$ApMaterno', '$Direccion', '$Colonia', 
	'$Delegacion', '$CP', '$Tel', '$Ciudad', '$Estado', '$Correo', '$Tipo_usuario')";
	
	$result = mysql_query($q,$db)
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());
	

	$q="select max(id_usuario) as maximo from usuarios";
	$result = mysql_query($q,$db)
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());
	
	$num_rows = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$ultimo = $row["maximo"];
	//echo "<br>El valor es: " .$row["maximo"];
	
	if ($Tipo_usuario == 1) {
	//Inserta valores en tabla TIPO_USUARIO
	$q = "insert into tipo_usuario (id_medico, especialidad, ced_prof, egresado, 
	hospital_labora, calle_cons, col_cons, del_cons, cp_cons, tel_cons1, tel_cons2, 
	cd_cons, estado_cons) 
	values ('$ultimo', '$Esp', '$Cedula', '$Univ', '$Hospital', '$CalleCons', '$ColoniaCons', 
	'$DelegacionCons', '$CPCons', '$TelCons1', '$TelCons2', '$CiudadCons', '$EstadoCons')";

	$result = mysql_query($q,$db)
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());

	echo "<br>Hola <br>".$Nombre.", tus datos se guardaron correctamente<br>";
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
	
	echo "<table width='281' border='0'>
	  <tr>
	    <th width='125' scope='col'><a href='Buscar_med.html'>Buscar m&eacute;dico</a></th>
	    <th width='104' scope='col'><a href='Registro.php'>Registrar</a></th>
	    <th width='30' scope='col'><a href='login.html'>Ingresar</a> </th>
	  </tr>
	</table>";
	
	$Nombre_med = $_POST['txtNombre'] ;
  	$ApPaterno_med = $_POST['txtApPaterno'] ;
  	$ApMaterno_med = $_POST['txtApMaterno'] ;
  	$Especialidad_med= $_POST['txtEspecialidad'] ;
	
	
	$q = "SELECT a.Nombre, a.Ap_Paterno, a.Ap_Paterno, b.id_medico, b.Especialidad, b.Calle_cons, 
	b.Col_cons, b.Del_cons, b.CP_cons, b.Cd_cons, b.Estado_cons, b.Tel_cons1, b.Tel_cons2,
	avg(c.Pregunta1 + c.Pregunta2 + c.Pregunta3 + c.Pregunta4)/4 as Prom
	FROM usuarios a inner join tipo_usuario b on a.id_usuario = b.id_medico 
	left join evaluacion c on b.id_medico = c.id_medico 
	WHERE a.tipo_usuario = 1 ";
	if (!empty($Nombre_med))
		$q = $q ."and a.Nombre like '%$Nombre_med%' ";
	
	if (!empty($ApPaterno_med))
		$q = $q ."and a.Ap_Paterno like '%$ApPaterno_med%' ";
				
	if (!empty($ApMaterno_med))
		$q = $q ."and a.Ap_Paterno like '%$ApPaterno_med%' ";
	
	if (!empty($Especialidad_med))
		$q = $q ."and b.Especialidad like '%$Especialidad_med%' ";						

	$q = $q ."group by c.id_medico";
	
	/*
	// Busca los médicos que aún no han sido calificados
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
	
	$result = mysql_query($q,$db) 
	or die("<br>Falló el query buscar:<br><pre> $q </pre><br>Error:". mysql_error());	
	
	$num_rows = mysql_num_rows($result);	

	if ($myrow = mysql_fetch_array($result)) 
	{
		echo "<br>Resultado de la búsqueda<BR><br>";
		echo "<form id='form1' method='Post' action='Califica.php'>";
		echo "<table border=1>\n";
		echo "<tr><td></td>
		<td><b>Calificación</td>
		<td><b>Nombre</td>
		<td><b>Especialidad</td>
		<td><b>Dirección</td>
		<td><b>Tels. Consultorio</td>
		</tr>\n";
		do {
			$prom = round($myrow["Prom"],2);
			echo "<tr><td>
			<input type='radio' name='id_medico' value = ".$myrow["id_medico"]."></td>
			<td><div align='center'>$prom</div></td>
			<td>".$myrow["Nombre"]." ".$myrow["Ap_Paterno"]." ".$myrow["Ap_Materno"]."
					<td>".$myrow["Especialidad"]."</td>					
					<td>".$myrow["Calle_cons"]."
					    <br>Col. ".$myrow["Col_cons"]." 
					    <br>Del. ".$myrow["Del_cons"]." 
					    <br>CP ".$myrow["CP_cons"]."
					    <br>".$myrow["Cd_cons"]." ".$myrow["Estado_cons"]."</td>
					<td>".$myrow["Tel_cons1"]." 
					    <br>".$myrow["Tel_cons2"]."</td>
					</tr>\n";
			} while ($myrow = mysql_fetch_array($result));
		echo "<table width='200' border='0'>
        <tr>
		  <td></td>
          <td><input name='BtnCalificar' type='submit' id='BtnCalificar' value='Calificar' /></td>
          <td><input name='BtnReset' type='reset' id='BtnReset' value='Cancelar' /></td>
        </tr>
      </table>";
		echo "</table></form>\n";
	} else {
	echo "<br><b>No se encontraron criterios de búsqueda, por favor verifique los datos";
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

	echo "<table width='281' border='0'>
		  <tr>
		    <th width='125' scope='col'><a href='Buscar_med.html'>Buscar m&eacute;dico</a></th>
		    <th width='104' scope='col'><a href='Registro.php'>Registrar</a></th>
		    <th width='30' scope='col'><a href='login.html'>Ingresar</a> </th>
		  </tr>
		</table>";
	
	/*echo "<br>Preg1: " . $Preg1;
	echo "<br>Preg2: " . $Preg2;
	echo "<br>Preg3: " . $Preg3;
	echo "<br>Preg4: " . $Preg4;
	echo "<br>idMedico: " . $hd_idMedico;
	*/
	
	$fecha= date('Y-m-d');
	
	//Inserta valores en tabla EVALUACIÓN
	$q=	"insert into evaluacion (id_medico, Pregunta1, Pregunta2, Pregunta3, Pregunta4, 
	Fecha_eval, Comentarios) 
	values ( '$hd_idMedico', '$Preg1', '$Preg2', '$Preg3', '$Preg4', '$fecha', '$Comentarios')";
	
	//echo "<br>Query: ".$q;
	
	$result = mysql_query($q,$db)
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());


	//Obtiene el nombre del usuario evaluado
	$q = "select * from usuarios";
	
	$result = mysql_query($q,$db)
	or die("Falló el query:<br><pre> $q </pre><br>Error:". mysql_error());
	
	echo "<br>El médico ".$myrow["Nombre"]." ".$myrow["Ap_paterno"]." "
		.$myrow["Ap_materno"].", ha sido evaluado correctamente<br>";


	break; //Termina "Calificar"

	mysql_free_result($q);
}	


mysql_close($db);
/*else
	{ echo "No pasó"; }
}*/

?>