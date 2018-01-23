<?php

include '../Models/ModeloDB.php'

//datos del formulario de Trabajo social
function get_data_from_TS(){

$titulacion = null;
$nombre = null;
$apellidos = null;
$dni = null;
$provincia = null;
$localidad = null;
$direccion = null;
$cp = null;
$email = null;
$tutorA = null;
$horasT = null;
$nombreIns = null;
$cif = null;
$provinciaIns = null;
$localidadIns = null;
$direccionIns = null;
$cpIns = null;
$telefonoIns = null;
$emailIns = null;
$fechaIni = null;
$fechaFin = null;
$horasPrac = null;


	if(isset($_REQUEST['titulacion'])){
		$titulacion = $_REQUEST['titulacion'];
	}
	if(isset($_REQUEST['nombre'])){
		$nombre = $_REQUEST['nombre'];
	} 
	if(isset($_REQUEST['apellidos'])){
		$apellidos = $_REQUEST['apellidos'];

	}
	if(isset($_REQUEST['dni'])){
		$dni = $_REQUEST['dni'];

	} 
	if(isset($_REQUEST['provincia'])){
		$provincia = $_REQUEST['provincia'];

	}
	if(isset($_REQUEST['localidad'])){
		$localidad = $_REQUEST['localidad'];

	} 
	if(isset($_REQUEST['direccion'])){
		$direccion = $_REQUEST['direccion'];

	} 
	if(isset($_REQUEST['cp'])){
		$cp = $_REQUEST['cp'];

	}
	if(isset($_REQUEST['telefono'])){
		$telefono = $_REQUEST['telefono'];

	} 
	if(isset($_REQUEST['email'])){
		$email = $_REQUEST['email'];

	}
	if(isset($_REQUEST['tutorA'])){
		$tutorA = $_REQUEST['tutorA'];

	}
	if(isset($_REQUEST['horasT' ])){
		$horasT = $_REQUEST['horasT'];

	}
	if(isset($_REQUEST['nombreIns'])){
		$nombreIns = $_REQUEST['nombreIns'];

	} 
	if(isset($_REQUEST['cif'])){
		$cif = $_REQUEST['cif'];

	}
	if(isset($_REQUEST['provinciaIns'])){
		$provinciaIns = $_REQUEST['provinciaIns'];

	}
	if(isset($_REQUEST['localidadIns'])){
		$localidadIns = $_REQUEST['localidadIns'];

	}
	if(isset($_REQUEST['direccionIns'])){
		$direccionIns = $_REQUEST['direccionIns'];

	} 
	if(isset($_REQUEST['cpIns'])){
		$cpIns = $_REQUEST['cpIns'];

	}
	if(isset($_REQUEST['telefonoIns'])){
		$telefonoIns = $_REQUEST['telefonoIns'];

	}
	if(isset($_REQUEST['emailIns'])){
		$emailIns = $_REQUEST['emailIns'];

	}
	if(isset($_REQUEST['fechaIni'])){
		$fechaIni = $_REQUEST['fechaIni'];

	}
	if(isset($_REQUEST['fechaFin'])){
		$fechaFin = $_REQUEST['fechaFin'];

	} 
	if(isset($_REQUEST['horasPrac'])){
		$horasPrac = $_REQUEST['horasPrac'];
	}

	$lista =array(
		'nombre' => $nombre,
		'apellidos' => $apellidos,
		'dni' => $dni,
		'provincia' => $provincia,
		'localidad' => $localidad,
		'direccion' => $direccion,
		'cp' => $cp,
		'email' => $email,
		'tutorA' => $tutorA,
		'horasT' => $horasT,
		'nombreIns' => $nombreIns,
		'cif' => $cif,
		'provinciaIns' => $provinciaIns,
		'localidadIns' => $localidadIns,
		'direccionIns' => $direccionIns,
		'cpIns' => $cpIns,
		'telefonoIns' => $telefonoIns,
		'emailIns' => $emailIns,
		'fechaIni' => $fechaIni,
		'fechaFin' => $fechaFin,
		'horasPrac' => $horasPrac,

	);

	$TS = new MODELO_DB($titulacion, $lista);

}

//datos del formulario de Educacion social
get_data_from_ES(){

if(isset($_REQUEST[]))

}
//datos del formulario de Educacion Primaria
get_data_from_EP(){

if(isset($_REQUEST[]))

}
//datos del formulario de Educacion Infantil
get_data_from_EI(){

if(isset($_REQUEST[]))

}

//Si trae post de un formulario
if(isset($_REQUEST["titulacion"])){
	$titulacion = $_REQUEST["titulacion"];
}else{
	$titulacion = '';
}


	switch ($titulacion) {
		case 'trabajosocial':
			get_data_from_TS();
			break;
		case 'educacionsocial':
			
			break;
		case 'infantil':
			
			break;
		case 'primaria':
			
			break;
		default:
			
			break;
	}
?>