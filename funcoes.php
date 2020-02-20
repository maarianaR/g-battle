<?php

	function conexao(){

		$banco = 'gbattle';
		$usuario = 'root';
		$senha = '02042012';
		$host = 'localhost';
		
		$con = mysql_connect($host, $usuario, $senha) or die ('Erro na conexão :'.mysql_error());
		mysql_select_db($banco) or die ('Erro na conexao : '.mysql_error());
		mysql_query("set names 'utf8'");
		mysql_query("set character_set_connection=utf8");
		mysql_query("set character_set_client=utf8");
		mysql_query("set character_set_results=utf8");
	}

	function inserir($sql){
	
		if (mysql_query($sql)){
			return true;
		}else{
			return false;
		}

	}
	
	function selecionar($sql){

		return mysql_query($sql);

	}

	function atualizar($sql){

		if (mysql_query($sql)){

			return true;

		}else{

			return false;

		}

	}

?>
