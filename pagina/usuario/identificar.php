<?php
require_once ('plantillas/pagina.php');

class UsuarioIdentificar extends Pagina{
	function content(){
		return new vForm(array(
				new vHeader('Identificación'),
				($this->getParam('error')?
					new vDiv($this->getParam('error'),'error')
				:''),
				new vInputText('usuario','Usuario'),
				new vInputPassword('clave','Clave'),
			),'identificar_process');
	}
}
?>