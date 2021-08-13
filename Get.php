<?php


// 13 de Octubre del 2014
// Get.php
// @brief esto es algo mucho mas magico

class Get {
	function __get($value){
		if(!$this->exist($value)){
			print "<b>GET ERROR</b> O Pararametro <b>$value</b> que tenta chamar nao existe!";
			die();
		}
		return $_GET[$value];
	}

	function  exist($value){
		$found = false;
		if(isset($_GET[$value])){
			$found=true;
		}
		return $found;
	}
}



?>