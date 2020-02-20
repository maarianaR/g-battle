<?php

	session_start();
	
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	//Destruindo a sessão
	session_destroy();

	//Redirecionando o usuário
	header("Location: cadastro.php");
?>
