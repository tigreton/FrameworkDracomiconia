<?php
require_once ('plantillas/pagina.php');

class UsuarioIdentificar extends Pagina{
	function content(){
		return new vForm(array(
				new vHeader('Identificaci�n'),
				($this->getParam('error')?
					new vDiv($this->getParam('error'),'error')
				:''),
				new vInputText('usuario','Usuario'),
				new vInputPassword('clave','Clave'),
			),'identificar_process');
	}
}
?>