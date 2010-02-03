<?php
require_once ('proceso.php');
require_once ('librerias/view/HTMLRedirectGenerator.php');

class Pagina extends Proceso{
	protected $page;
	
	/*
		Creamos la página web y la mostramos
	*/
	function execute(){
		// Creamos la página con el título que nos devuelve el método "title"
		$this->page=new vPage($this->title());
		$this->page->addCSS('css/index.css');
		
		// Añade el contenido del método cabecera a la página
		$this->page->add($this->cabecera());
		
		// Añade el contenido del método content a la página (este se redefinirá en las páginas hijas)
		$this->page->add($this->content());
				
		// Generamos el código HTML
		$htmlgenerator = new HTMLRedirectGenerator($this->page);
		echo $htmlgenerator->generate();
	}
	
	function cabecera(){
		// Generamos el bloque cabecera
		return new vDiv(array(
			// Si no hay usuario (no está identificado)
			(!$this->usuario?new vContainer(array(
				// Mostramos el formulario de identificación
				new vForm(array(
					new vInputText('usuario','Usuario'),
					new vInputPassword('clave','Clave')
				),$this->getRelativeDir('usuario/identificar_process')),
				// Mostramos el enlace de registro
				new vLink('usuario/registrar','Nuevo usuario')
			// Si el usuario está identificado
			)):new vContainer(array(
				// Mostramos su nombre
				'Usuario: '.$this->usuario->nombre.' ',

new vLink($this->getRelativeDir('usuario/mensajes'),'Mensajes'),

				new vLink($this->getRelativeDir('usuario/cerrar_sesion_process'),'Cerrar sesión')
			)))
		),'cabecera');
	}
}
?>