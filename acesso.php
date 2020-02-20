<?php
	include("connect.php");

	//Recuperando dados do formulario de login
	if (function_exists("mysql_real_escape_string")){
	
		$login = mysql_real_escape_string($_POST['emailLogin']);
	
	}else{
		
		$login = mysql_escape_string($_POST['emailLogin']);
	
	}

	$senha = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($_POST['senha']) : mysql_escape_string($_POST['senha']);
	
	//Selecionando a base de dados
	mysql_select_db("gbattle",$conn) or die ("Nao foi possivel selecionar o banco de dados".mysql_error());

	//$sql = "select id from login where email = '$login' ";

	//$sqlRes = mysql_query($sql,$conn) or die (mysql_error());

$busca = "select * from login where email = '$login' and senha = MD5('$senha')";

//Executando a primeira consulta
$res = mysql_query($busca,$conn) or die ("Erro ao efetuar consulta: ".mysql_error());

$teste = mysql_fetch_assoc($res);

$busca2 = "select nome_cl from cliente where id = ".$teste['id'];

	
	//Executando a segunda consulta a base de dados	
$res2 = mysql_query($busca2,$conn ) or die ("Error: ".mysql_error());

$teste2 = mysql_fetch_array($res2);
	//Recuperando o numero de linhas
	$linhas = mysql_num_rows($res2);
	
	if($linhas != 0){
	
		//Iniciando uma nova sessao
		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $teste2['nome_cl'];

		header("Location: teste2.php");
	
	}else{
	
		header("Location: cadastro.php");
	
	}
	
		//Finalizando a conexao com o servidor
		mysql_close();


?>
