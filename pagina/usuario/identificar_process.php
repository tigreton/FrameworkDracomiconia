<?php
require_once ('plantillas/proceso.php');

class UsuarioIdentificar_process extends Proceso{
	function execute(){
		try{
			$usuario=new Usuario(new EqualCondition('nombre',$this->getParam('usuario')));
		}
		catch(NotExistException $ex){
			$this->formError('identificar','No existe un usuario con ese nombre');
		}
		
		if(md5($this->getParam('clave'))!=$usuario->password) $this->formError('identificar','La clave es incorrecta');
		
		$_SESSION['id']=$usuario->id;
		header('Location:../');
	}
}
?>