<?php

if (isset($_GET['pg'])) {

switch ($_GET['pg']){
	
	case 'empresa';
	include "empresa.php";
	break;
	
	case 'parceiros';
	include "parceiros.php";
	break;
	
	case 'planos';
	include "planos.php";
	break;
	
	case 'servicos';
	include "servicos.php";
	break;
	
	case 'contato';
	include "contato.php";
	break;
	
	default:
	include "home.php";
	break;
}
	} else {
		include "home.php";		
	}
?>
