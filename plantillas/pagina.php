<?php
require_once ('proceso.php');
require_once ('librerias/view/HTMLRedirectGenerator.php');

class Pagina extends Proceso{
	protected $page;
	
	/*
		Creamos la página web y la mostramos
	*/
	function execute(){
		$this->page=new vPage($this->title());
		$this->page->addCSS('css/index.css');
		
		$this->page->add($this->cabecera());
		
		$this->page->add($this->content());
				
		$htmlgenerator = new HTMLRedirectGenerator($this->page);
		echo $htmlgenerator->generate();
	}
	
	function cabecera(){
		return new vDiv(array(
			(!$this->usuario?new vContainer(array(
				new vForm(array(
					new vInputText('usuario','Usuario'),
					new vInputPassword('clave','Clave')
				),$this->getRelativeDir('usuario/identificar_process')),
				new vLink('usuario/registrar','Nuevo usuario')
			)):new vContainer(array(
				'Usuario: '.$this->usuario->nombre
			)))
		),'cabecera');
	}
}
?>