<?php


// 13 de Octubre del 2014
// Post.php
// @brief esto es algo mucho mas magico

class Post {
	function __get($value){
		if(!$this->exist($value)){
			print "<b>POST ERROR</b> O Parametro <b>$value</b> que tentas chamar nao existe!";
			die();
		}
		return $_POST[$value];
	}

	function  exist($value){
		$found = false;
		if(isset($_POST[$value])){
			$found=true;
		}
		return $found;
	}
}



?>