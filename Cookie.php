<?php


// 13 de Octubre del 2014
// Cookie.php
// @brief esto es algo mucho mas magico

class Cookie {
	function __get($value){
		if(!$this->exist($value)){
			print "<b>COOKIE ERROR</b> O parametro <b>$value</b> que tenta chamar nao Existe!";
			die();
		}
		return $_COOKIE[$value];
	}

	function  exist($value){
		$found = false;
		if(isset($_COOKIE[$value])){
			$found=true;
		}
		return $found;
	}
}



?>