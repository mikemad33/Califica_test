<?php

//require_once( './my_twitter.php' );


//if (!isset($_POST['submit'])) 
//{
// Se conecta a la BD
$db = mysql_connect("mysql6.000webhost.com", "a3530152_root", "gre081pwd");
mysql_select_db("a3530152_medico2",$db) or die ('<b>No se pudo conectar a la BD<b>');
$hd_name = $_POST['hd_name'];

//echo "Valor de campo: ".$hd_name ."<br>";

?>