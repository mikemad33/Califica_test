<?php

//require_once( './my_twitter.php' );


//if (!isset($_POST['submit'])) 
//{
// Se conecta a la BD 

/*$db = mysql_connect("mysql12.000webhost.com", "a4974403_root", "gre081");
mysql_select_db("a4974403_medico2",$db) or die ('<b>No se pudo conectar a la BD<b>');
$hd_name = $_POST['hd_name'];
*/

    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "Gre081";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

//echo "Valor de campo: ".$hd_name ."<br>";

?>