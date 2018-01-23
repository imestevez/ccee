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
												`titulacion` = '$this->lista['']',
												`nombre` = '$this->lista['']' , 
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
												`localidadIns` = '$this->lista['']'VARCHAR(30) NOT NULL , 
												`direccionIns` = '$this->lista['']' VARCHAR(50) NOT NULL , 
												`cpIns` = '$this->lista['']' INT(5) NOT NULL ,
												`telefonoIns` = '$this->lista['']' INT(9) NULL , 
												`emailIns` = '$this->lista['']' VARCHAR(50) NULL , 
												`fechaIni` = '$this->lista['']' DATE NOT NULL , 
												`fechaFin` = '$this->lista['']' DATE NOT NULL , 
												`horasPrac` = '$this->lista['']' FLOAT(4,2) NOT NULL ) ENGINE = InnoDB;

		)";
	}

	function ADD_ES(){

	}

	function ADD_EI(){

	}

	function ADD_EP(){

	}


}




?>