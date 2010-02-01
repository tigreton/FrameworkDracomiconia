<?php
require_once ('plantillas/proceso.php');

class UsuarioCerrar_sesion_process extends Proceso{
	function execute(){
		unset($_SESSION['id']);
		header('Location:../');
	}
}
?>