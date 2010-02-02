<?php
require_once ('plantillas/proceso.php');

class JuegoCrear_process extends Proceso{
	function execute(){
		query('insert into juego (nombre,descripcion) values("'.$_POST['nombre'].'","'.$_POST['descripcion'].'")');
		header('Location:../');
	}
}
?>