<?php

if(isset($_REQUEST["selectTitulo"])){
	switch ($_REQUEST["selectTitulo"]) {
		case 'trabajosocial':
			header('Location:../Views/trabajosocial.html');
			break;
		case 'educacionsocial':
			header('Location:../Views/educacionsocial.html');
			break;
		case 'infantil':
			header('Location:../Views/infantil.html');
			break;
		case 'primaria':
			header('Location:../Views/primaria.html');
			break;
		default:
			header('Location:../index.php');
			break;
	}
}

?>
