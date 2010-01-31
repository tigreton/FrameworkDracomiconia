<?php
require_once ('plantillas/pagina.php');

class Index extends Pagina{
	function content(){
		return new vContainer(array(
			new vHeader('Portada Dracomiconia framework'),
			new vPreformatedText('<b>Hola mundo</b>')
		));
	}
}
?>