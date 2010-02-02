<?php
require_once ('plantillas/pagina.php');

class JuegoCrear extends Pagina{
	function content(){
		return new vPreformatedText(
			'<h1>Crear nuevo juego</h1>
			<form method="post" action="crear_process">
				<div>Nombre: <input type="text" name="nombre" id="nombre" /></div>
				<div>Descripción: <textarea name="descripcion" id="descripcion" ></textarea></div>
				<input type="submit" value="Guardar" />
			</form>'
		);
	}
}
?>