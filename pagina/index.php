<?php
require_once ('plantillas/pagina.php');

class Index extends Pagina{
	function content(){
		return new vContainer(array(
			new vHeader('Portada Dracomiconia framework'),
			new vPreformatedText($this->contenido())
		));
	}
	
	function contenido(){
		// Si el usuario está identificado, ponemos el enlace a crear juego
		if(isset($_SESSION['id']))
			return '<a href="juego/crear">Crear un nuevo juego</a>';
		else return '<b>Hola mundo</b>';
	}
}
?>