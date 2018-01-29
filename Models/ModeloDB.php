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

		// incluimos la funcion de acceso a la bd
		include_once '../Functions/Access_DB.php';
		// conectamos con la bd y guardamos el manejador en un atributo de la clase
		$this->mysqli = ConnectDB();


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

	}

	function ADD_TS(){
		$dni = $this->lista['dni'];
		$sql = "SELECT dni FROM TRABAJO_SOCIAL WHERE (dni = '$dni')";
		$result = $this->mysqli->query($sql);
		$num_rows = mysqli_num_rows($result); 
		if($num_rows > 0){
			echo "DNI duplicado";
		}else{

			$cursoAcademico = $this->lista['cursoAcademico'];
			$nombre = $this->lista['nombre'];
			$apellidos = $this->lista['apellidos'];
			$provincia = $this->lista['provincia'];
			$localidad = $this->lista['localidad'];
			$direccion = $this->lista['direccion'];
			$cp = $this->lista['cp'];
			$telefono = $this->lista['telefono'];
			$email = $this->lista['email'];
			$tutorA = $this->lista['tutorA'];
			$horasT = $this->lista['horasT'];
			$nombreIns = $this->lista['nombreIns'];
			$cif = $this->lista['cif'];
			$provinciaIns = $this->lista['provinciaIns'];
			$localidadIns = $this->lista['localidadIns'];
			$direccionIns = $this->lista['direccionIns'];
			$cpIns = $this->lista['cpIns'];
			$telefonoIns = $this->lista['telefonoIns'];
			$emailIns = $this->lista['emailIns'];
			$fechaIni = $this->lista['fechaIni'];
			$fechaFin = $this->lista['fechaFin'];
			$horasPrac = $this->lista['horasPrac'];

				$sql = "INSERT INTO TRABAJO_SOCIAL (
						titulacion,
						cursoAcademico,
						nombre,
						apellidos,
						dni,
						provincia,
						localidad,
						direccion,
						cp,
						telefono,
						email,
						tutorA,
						horasT,
						nombreIns,
						cif,
						provinciaIns,
						localidadIns,
						direccionIns,
						cpIns,
						telefonoIns,
						emailIns,
						fechaIni,
						fechaFin,
						horasPrac ) VALUES(
									'$this->titulacion',
									'$cursoAcademico',
									'$nombre' , 
									'$apellidos', 
									'$dni', 
									'$provincia' , 
									'$localidad' , 
									'$direccion' , 
									'$cp', 
									'$telefono', 
									'$email' , 
									'$tutorA'  , 
									'$horasT' , 
									'$nombreIns', 
									'$cif', 
									'$provinciaIns', 
									'$localidadIns', 
									'$direccionIns', 
									'$cpIns',
									'$telefonoIns', 
									'$emailIns', 
									'$fechaIni', 
									'$fechaFin', 
									'$horasPrac')";

						$result = $this->mysqli->query($sql);
						//echo $sql;
		}



	}

	function ADD_ES(){
		$dni = $this->lista['dni'];
		$sql = "SELECT dni FROM EDUCACION_SOCIAL WHERE (dni = '$dni')";
		$result = $this->mysqli->query($sql);
		$num_rows = mysqli_num_rows($result); 
		if($num_rows > 0){
			echo "DNI duplicado";
		}else{

			$cursoAcademico = $this->lista['cursoAcademico'];
			$nombre = $this->lista['nombre'];
			$apellidos = $this->lista['apellidos'];
			$tutorA = $this->lista['tutorA'];
			$tutorE = $this->lista['tutorE'];
			$nombreIns = $this->lista['nombreIns'];
			$fechaIni = $this->lista['fechaIni'];
			$fechaFin = $this->lista['fechaFin'];
			$horasPrac = $this->lista['horasPrac'];

				$sql = "INSERT INTO EDUCACION_SOCIAL (
						titulacion,
						cursoAcademico,
						nombre,
						apellidos,
						dni,
						practicum,
						tutorA,
						tutorE,
						horasT,
						nombreIns,
						fechaIni,
						fechaFin,
						horasPrac ) VALUES(
									'$this->titulacion',
									'$cursoAcademico',
									'$nombre' , 
									'$apellidos', 
									'$dni', 
									'$tutorA',
									'$tutorE', 
									'$nombreIns',
									'$fechaIni', 
									'$fechaFin', 
									'$horasPrac')";

						$result = $this->mysqli->query($sql);
						//echo $sql;
		}

	}

	function ADD_EI(){
		$dni = $this->lista['dni'];
		$sql = "SELECT dni FROM EDUCACION_INFANTIL WHERE (dni = '$dni')";
		$result = $this->mysqli->query($sql);
		$num_rows = mysqli_num_rows($result); 
		if($num_rows > 0){
			echo "DNI duplicado";
		}else{

			$cursoAcademico = $this->lista['cursoAcademico'];
			$nombre = $this->lista['nombre'];
			$apellidos = $this->lista['apellidos'];
			$mencion = $this->lista['mencion'];
			$tutorA = $this->lista['tutorA'];
			$tutorE = $this->lista['tutorE'];
			$nombreIns = $this->lista['nombreIns'];
			$cif = $this->lista['cif'];
			$provinciaIns = $this->lista['provinciaIns'];
			$localidadIns = $this->lista['localidadIns'];
			$direccionIns = $this->lista['direccionIns'];
			$cpIns = $this->lista['cpIns'];
			$emailIns = $this->lista['emailIns'];
			$fechaIni = $this->lista['fechaIni'];
			$fechaFin = $this->lista['fechaFin'];
			//$horasPrac = $this->lista['horasPrac'];

				$sql = "INSERT INTO EDUCACION_INFANTIL (
						titulacion,
						cursoAcademico,
						nombre,
						apellidos,
						dni,
						mencion,
						tutorA,
						tutorE,
						nombreIns,
						cif,
						provinciaIns,
						localidadIns,
						direccionIns,
						cpIns,
						fechaIni,
						fechaFin) VALUES(
									'$this->titulacion',
									'$cursoAcademico',
									'$nombre' , 
									'$apellidos', 
									'$dni', 
									'$tutorA', 
									'$tutorE',
									'$nombreIns', 
									'$cif', 
									'$provinciaIns', 
									'$localidadIns', 
									'$direccionIns', 
									'$cpIns',
									'$fechaIni', 
									'$fechaFin')";

						$result = $this->mysqli->query($sql);
						//echo $sql;
		}


	}

	function ADD_EP(){
		$dni = $this->lista['dni'];
		$sql = "SELECT dni FROM EDUCACION_PRIMARIA WHERE (dni = '$dni')";
		$result = $this->mysqli->query($sql);
		$num_rows = mysqli_num_rows($result); 
		if($num_rows > 0){
			echo "DNI duplicado";
		}else{

			$cursoAcademico = $this->lista['cursoAcademico'];
			$nombre = $this->lista['nombre'];
			$apellidos = $this->lista['apellidos'];
			$mencion = $this->lista['mencion'];
			$tutorA = $this->lista['tutorA'];
			$tutorE = $this->lista['tutorE'];
			$nombreIns = $this->lista['nombreIns'];
			$cif = $this->lista['cif'];
			$provinciaIns = $this->lista['provinciaIns'];
			$localidadIns = $this->lista['localidadIns'];
			$direccionIns = $this->lista['direccionIns'];
			$cpIns = $this->lista['cpIns'];
			$emailIns = $this->lista['emailIns'];
			$fechaIni = $this->lista['fechaIni'];
			$fechaFin = $this->lista['fechaFin'];
			//$horasPrac = $this->lista['horasPrac'];

				$sql = "INSERT INTO EDUCACION_PRIMARIA (
						titulacion,
						cursoAcademico,
						nombre,
						apellidos,
						dni,
						mencion,
						tutorA,
						tutorE,
						nombreIns,
						cif,
						provinciaIns,
						localidadIns,
						direccionIns,
						cpIns,
						fechaIni,
						fechaFin) VALUES(
									'$this->titulacion',
									'$cursoAcademico',
									'$nombre' , 
									'$apellidos', 
									'$dni', 
									'$tutorA', 
									'$tutorE',
									'$nombreIns', 
									'$cif', 
									'$provinciaIns', 
									'$localidadIns', 
									'$direccionIns', 
									'$cpIns',
									'$fechaIni', 
									'$fechaFin')";

						$result = $this->mysqli->query($sql);
						//echo $sql;
		}

	}


}

?>