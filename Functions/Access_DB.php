<?php
/*
//Script : Access_DB.php

//-------------------------------------------------------

Script que realiza la conexion a la BD
*/
//funcion para conectar a la BD
function ConnectDB(){
   $conexion = mysqli_connect("localhost", "ccee", "ccee", "CCEE"); //realiza la conexion
   mysqli_query($conexion, "SET NAMES 'utf8'");

 if ($conexion->connect_errno) {//si se produce un error
    	return false;
 }else{
 	return $conexion;
 }
}
?>