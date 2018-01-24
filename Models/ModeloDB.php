<?php
/*
	script: ModeloDB.php

	Script que almacena en la BD los datos de los formularios

*/

class MODELO_DB{
	var $titulacion;
	var $lista;
	var $mysqli;

	function __construct($titulacion, $lista){	
		$this->titulacion = $titulacion;
		$this->lista = $lista;

		switch ($titulacion) {
			case 'trabajosocial':
				$this->ADD_TS();
				break;
			case 'educacionsocial':
				$this->ADD_ES();
				break;
			case 'infantil':
				$this->ADD_EI();
				break;
			case 'primaria':
				$this->ADD_EP();
				break;
		}
	// incluimos la funcion de acceso a la bd
	include_once '../Functions/Access_DB.php';
	// conectamos con la bd y guardamos el manejador en un atributo de la clase
	$this->mysqli = ConnectDB();

	}

	function ADD_TS(){

			$sql = "INSERT INTO TRABAJO_SOCIAL VALUES(
												`titulacion` = '$this->titulacion',
												`nombre` = '$this->lista['nombre']' , 
												`apellidos` = '$this->lista['']', 
												`dni` = '$this->lista['']', 
												`provincia` = '$this->lista['']' , 
												`localidad`  = '$this->lista['']' , 
												`direccion` = '$this->lista['']' , 
												`cp` = '$this->lista['']', 
												`telefono` = '$this->lista['']', 
												`email` = '$this->lista['']' , 
												`tutorA` = '$this->lista['']'  , 
												`horasT`  = '$this->lista['']' , 
												`nombreIns` = '$this->lista['']', 
												`cif` = '$this->lista['']', 
												`provinciaIns` = '$this->lista['']', 
												`localidadIns` = '$this->lista['']', 
												`direccionIns` = '$this->lista['']', 
												`cpIns` = '$this->lista['']',
												`telefonoIns` = '$this->lista['']', 
												`emailIns` = '$this->lista['']', 
												`fechaIni` = '$this->lista['']', 
												`fechaFin` = '$this->lista['']', 
												`horasPrac` = '$this->lista['']')";
	}

	function ADD_ES(){

	}

	function ADD_EI(){

	}

	function ADD_EP(){

	}


}

?>