<?php
require_once ('plantillas/pagina.php');

class UsuarioRegistrar extends Pagina{
	function content(){
		return new vForm(array(
				new vHeader('Registro'),
				($this->getParam('error')?
					new vDiv($this->getParam('error'),'error')
				:''),
				new vInputText('usuario','Usuario'),
				new vInputPassword('clave','Clave'),
				new vInputPassword('repetir_clave','Repetir clave')
			),'registrar_process');
	}
}
?>