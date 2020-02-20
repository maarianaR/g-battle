<?php 
require_once("funcoes.php");
?>

<html>
	<head>
		<title>Cadastro </title>
		

	<meta http-equiv="Content-Type" content="text/html"; charset=utf-8 />
   <link rel="icon" href="icon_gbattle.ico" type="image/x-icon" />

	
		<link rel = "stylesheet" type = "text/css" href = "estilocad.css"/>
		
	
	</head>
	
	<body>
	
	<?php

	if(isset($_POST["enviar"])){
		$nome = $_POST["nome_prod"];
		$preco = $_POST["preco_prod"];
		$tipo = $_POST["tipo"];
		$imagem = $_POST["imagem_prod"];
		$console = $_POST["console"];
		
		conexao();

		$sql_inserir = "insert into produtos (nome_prod , preco_prod , tipo , imagem_prod , console) values('$nome' , '$preco' , '$tipo' , '$imagem' , '$console')";
	
		if (inserir($sql_inserir)){
			echo ("Registro inserido com sucesso. Codigo: ".mysql_insert_id());
			}
			else{
			echo("Erro na inser��o.".mysql_error());
			}
		}
	/*if($nome.value != '' || $preco.value != '' || $tipo.value != '' || $imagem.value != '' || $console.value != '' ||
					($nome.value != '' && $preco.value != ''  || $tipo.value != '' || $imagem.value != '' || $console.value != '')){
					return false;
				}
	 && ($_POST["nome_prod"].value != '' || $_POST["preco_prod"].value != '' || $_POST["tipo"].value != '' || $_POST["imagem_prod"].value != '' || $_POST["console"].value != '' ||
					($_POST["nome_prod"] != '' && $_POST["preco_prod"].value != ''  || $_POST["tipo"].value != '' || $_POST["imagem_prod"].value != '' || $_POST["console"].value != ''))
	*/
	?>
	
	<form method = "post" enctype = "multpart/form-data" action = "" >
	<div id = "campos">
	<fieldset><legend id = "cadastro" >Cadastro</legend>
		Nome <br />
		<input type = "text" name = "nome_prod" id = "nome_prod" size = "40"/>
		<br />
		Preco <br />
		<input type = "text" name = "preco_prod" id = "preco_prod" />
		<br />
		Tipo<br />
		<input type = "text" name = "tipo" id = "tipo" size = "40"/>
		<br />
		<label for = "label" id= "label">Digite a primeira letra. <br />Ex: Jogos = J. </label><br />
		Imagem<br />
		<input type = "text" name = "imagem_prod" id = "imagem_prod" size = "40"/>
		<br />
		Console<br />
		<input type = "text" name = "console" id = "console" size = "40"/>
		<br /><br />
		<input type = "submit" class = "cont_compra" name = "enviar" value = "Cadastrar" id = "enviar" onClick = "verifica()"/>
		<br />	<label for = "label1" id= "label1"/>
		<br /> 
	</fieldset>	
		<br />
	
	</div>
	</form>
	
	</body>
	<!--$sql = "select * from where cod_prod = 1";
	$qr = mysql_query($sql) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){
	echo '<h2>'.$ln['imagem_prod'].'</h2> <br />';
	-->
</html>
	
