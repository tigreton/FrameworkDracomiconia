<?php
require_once ('plantillas/proceso.php');

class UsuarioRegistrar_process extends Proceso{
	function execute(){
		if(!$this->getParam('usuario')) $this->formError('registrar','Debe escoger un nombre de usuario');
	
		try{
			$usuario=new Usuario(new EqualCondition('nombre',$this->getParam('usuario')));
			$this->formError('registrar','Este usuario ya existe');
		}
		catch(NotExistException $ex){}
		
		if(!$this->getParam('clave')) $this->formError('registrar','Debe escribir una clave');
		if($this->getParam('repetir_clave')!=$this->getParam('clave')) $this->formError('registrar','Las claves no coinciden');
		
		$usuario=new Usuario();
		$usuario->nombre=$this->getParam('usuario');
		$usuario->password=$this->getParam('clave');
		$usuario->save();
		$_SESSION['id']=$usuario->id;
		header('Location:../');
	}
}
?>