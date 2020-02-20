
<?php

		//Função para contectar com o banco de dados.
		function conexao(){
			//Constantes da conexão.
			$database = "gbattle";
			$usuario = "root";
			$senha = "102102";
			$host = "localhost"; //Nome do servidor.
			
			//Conexão.
			$conn = mysql_connect($host,$usuario,$senha) or die ("Erro na rotina de conexão: ".mysql_error());
			
			//Seleciona a database.
			mysql_select_db($database) or die ("Erro ao selecionar a database: ".mysql_error());
			//or die : Caso houver erros na conexão ele emite essa mensagem junto com o alerta erros do mysql.
			
			//Solucionar os erros de acentuação no banco
			mysql_query("set names 'utf8'");
			mysql_query("set character_set_connection=utf8");
			mysql_query("set character_set_client=utf8");
			mysql_query("set character_set_results=utf8");

			
		}
		
	//Função para inserir no banco
		function inserir($sql){
			if(mysql_query($sql)){
				return true;
			}
			else{
				return false;
			}
		
		}
?>
