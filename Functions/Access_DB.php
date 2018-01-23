<?php
/*
//Script : Access_DB.php

//-------------------------------------------------------

Script que realiza la conexion a la BD
*/
//funcion para conectar a la BD
function ConnectDB(){
   $conexion = mysqli_connect("localhost", "ccee", "ccee", "CCEE") or (echo 'ERROR: No se ha podido conectar con la base de datos'); //realiza la conexion

 if ($conexion->connect_errno) {//si se produce un error
    	return false;
 }else{
 	return $conexion;
 }
}
?>