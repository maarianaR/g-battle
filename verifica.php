<?php

	session_start();
	
	if(empty($_SESSION['login']) || empty($_SESSION['senha'])){

		header("Location: cadastro.php");

	}

?>
