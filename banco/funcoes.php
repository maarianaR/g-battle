
<?php

		//Fun��o para contectar com o banco de dados.
		function conexao(){
			//Constantes da conex�o.
			$database = "gbattle";
			$usuario = "root";
			$senha = "102102";
			$host = "localhost"; //Nome do servidor.
			
			//Conex�o.
			$conn = mysql_connect($host,$usuario,$senha) or die ("Erro na rotina de conex�o: ".mysql_error());
			
			//Seleciona a database.
			mysql_select_db($database) or die ("Erro ao selecionar a database: ".mysql_error());
			//or die : Caso houver erros na conex�o ele emite essa mensagem junto com o alerta erros do mysql.
			
			//Solucionar os erros de acentua��o no banco
			mysql_query("set names 'utf8'");
			mysql_query("set character_set_connection=utf8");
			mysql_query("set character_set_client=utf8");
			mysql_query("set character_set_results=utf8");

			
		}
		
	//Fun��o para inserir no banco
		function inserir($sql){
			if(mysql_query($sql)){
				return true;
			}
			else{
				return false;
			}
		
		}
?>
