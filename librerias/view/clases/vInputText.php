<?php
require_once("vInput.php");

class vInputText extends vInput{
	private $maxLength;

	/*
	El text field te genera automaticamente una label a su derecha, el contenido de esa label es el segundo parametro que recibe el constructor
	*/
	function __construct($id, $label, $value='',$class=''){
		parent::__construct($id,$label,$value,$class);
		$this->maxLength=255;
	}

	function getMaxLength(){
		return $this->maxLength;
	}
	
	function setMaxLength($value){
		$this->maxLength = $value;
	}
}
?>