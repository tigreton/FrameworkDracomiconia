<?php
require_once ('proceso.php');
require_once ('librerias/view/HTMLRedirectGenerator.php');

class Pagina extends Proceso{
	protected $page;
	
	/*
		Creamos la p�gina web y la mostramos
	*/
	function execute(){
		// Creamos la p�gina con el t�tulo que nos devuelve el m�todo "title"
		$this->page=new vPage($this->title());
		$this->page->addCSS('css/index.css');
		
		// A�ade el contenido del m�todo cabecera a la p�gina
		$this->page->add($this->cabecera());
		
		// A�ade el contenido del m�todo content a la p�gina (este se redefinir� en las p�ginas hijas)
		$this->page->add($this->content());
				
		// Generamos el c�digo HTML
		$htmlgenerator = new HTMLRedirectGenerator($this->page);
		echo $htmlgenerator->generate();
	}
	
	function cabecera(){
		// Generamos el bloque cabecera
		return new vDiv(array(
			// Si no hay usuario (no est� identificado)
			(!$this->usuario?new vContainer(array(
				// Mostramos el formulario de identificaci�n
				new vForm(array(
					new vInputText('usuario','Usuario'),
					new vInputPassword('clave','Clave')
				),$this->getRelativeDir('usuario/identificar_process')),
				// Mostramos el enlace de registro
				new vLink('usuario/registrar','Nuevo usuario')
			// Si el usuario est� identificado
			)):new vContainer(array(
				// Mostramos su nombre
				'Usuario: '.$this->usuario->nombre.' ',

new vLink($this->getRelativeDir('usuario/mensajes'),'Mensajes'),

				new vLink($this->getRelativeDir('usuario/cerrar_sesion_process'),'Cerrar sesi�n')
			)))
		),'cabecera');
	}
}
?>