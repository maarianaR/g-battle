<?php

	require_once('funcoes.php');

?>

<html>
	
	<head>
	
		<title> Cadastro </title>
		
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	
		<script type = "text/javascript" src = "scripts3.js">
		
		</script>
	
	</head>
	<body>	
	
		<?php
		
			if((isset($_POST['enviar'])) && ($_POST['nome'] != "")&&($_POST['sobrenome'] != "")&&($_POST['nascimento'] != "")&&($_POST['email'] != "")&&($_POST['cpf'] != "")&&($_POST['rua'] != "")&&($_POST['cep'] != "")&&($_POST['num'] != "")&&($_POST['bairro'] != "")&&($_POST['cidade'] != "")&&($_POST['uf'] != "")&&($_POST['email2'] != "")&&($_POST['loginSenha'] != ""))
			//if((isset($_POST['enviar'])) && ($_POST['nome'] != "")&&($_POST['sobrenome'] != "")&&($_POST['nascimento'] != "")&&($_POST['email'] != "")&&($_POST['cpf'] != "")&&($_POST['rua'] != "")&&($_POST['cep'] != "")&&($_POST['num'] != "")&&($_POST['bairro'] != "")&&($_POST['cidade'] != "")&&($_POST['uf'] != "")&&($_POST['email2'] != "")&&($_POST['loginSenha'] != "")&&($_POST['lb1'] == "*")&&($_POST['lb2'] == "*")&&($_POST['lb3'] == "*")&&($_POST['lb4'] == "*")&&($_POST['lb5'] == "*")&&($_POST['lb6'] == "*")&&($_POST['lb7'] == "*")&&($_POST['lb8'] == "*")&&($_POST['lb9'] == "*")&&($_POST['lb10'] == "*")&&($_POST['lb11'] == "*")&&($_POST['lb12'] == "*")&&($_POST['lb13'] == "*")&&($_POST['lbl1'] == "*")&&($_POST['lbl2'] != "*"))
			{
				
					$nome = $_POST['nome'];
					$sobrenome = $_POST['sobrenome'];
					$data = $_POST['nascimento'];
					$email = $_POST['email'];
					$cpf = $_POST['cpf'];
				
					$sql_inserir="insert into cliente(nome_cl,sobrenome,data,email,cpf) values('$nome', '$sobrenome', '$data', '$email', '$cpf')";
					
					$rua = $_POST['rua'];
					$cep = $_POST['cep'];
					$num = $_POST['num'];
					$bairro = $_POST['bairro'];
					$cidade = $_POST['cidade'];
					$uf = $_POST['uf'];
					$com = $_POST['com'];
				
					$sql_inserir2 = "insert into endereco(rua,cep,num,bairro,cidade,uf,complemento) values('$rua', '$cep', '$num', '$bairro', '$cidade', '$uf','$com')";

					$email2 = $_POST['email2'];
					$loginSenha = $_POST['loginSenha'];
				
					$sql_inserir3="insert into login(email, senha) values('$email2', MD5('$loginSenha'))";

					conexao();
				
					if(inserir($sql_inserir) && inserir($sql_inserir2) && inserir($sql_inserir3)){
				
						echo('Registrado com sucesso !');
				
					}else{
					
						echo ('Erro na inserção no banco de dados !' .mysql_error());
				
					}


			}

		?> 
	
		<div id = "tudo">
			
		<div id="cadastro">
			<h3 id = "titulo">Cadastro de Clientes </h3>
			
			
			<form id = "frm" enctype = "multipart/form-data" method = "post" action = "" >	
				<fieldset id = "dados_pessoais"><legend>Dados pessoais:</legend>

						<label id = "lb0">   </label><br />
						Nome:<br /><input type = "text" name = "nome" title = "Seu nome aqui" size = "40px" onblur = "validaNome()" />
						<label id = "lb1">*</label>
						<br /><br />
						Sobrenome:<br /><input type = "text" name = "sobrenome" title = "Seu sobrenome aqui" size = "40px" onblur = "validaSobrenome()"/>
						<label id = "lb2">*</label>
						<br /><br />
						Nascimento:<br /><input type = "text" name = "nascimento" title = "Seu nascimento aqui" size = "10px"	onblur = "validaData()" />
						<label id = "lb3">*</label>
						<br /><br />
						Email:<br /><input type = "text" name = "email" title = "Seu email aqui" size = "40px" onblur = "validaEmail()" />
						<label id = "lb4">*</label>
						<br /><br />
						CPF:<br /><input type = "text" name = "cpf" title = "Seu CPF aqui" size = "13px" onblur = "validaCPF()" />
						<label id = "lb5">*</label>
				
				</fieldset>
				
				<br />
				<br />
				
				<fieldset id = "endereco"><legend>Endereço:</legend>
				
						Rua:<br /><input type = "text" name = "rua" title = "Seu nome aqui" onblur = "validaRua()"/>
						<label id = "lb6">*</label>
						<br /><br />
						CEP:<br /><input type = "text" name = "cep" title = "Seu CEP aqui" size = "10px" onblur = "validaCEP()" />
						<label id = "lb7">*</label>
						<br /><br />
						Número:<br /><input type = "text" name = "num" title = "Seu Nº aqui" size = "10px" onblur = "validaNum()" />
						<label id = "lb8">*</label>
						<br /><br />
						Complemento:<br /><input type = "text" name = "com" title = "Coplemento" size = "10px" onblur = "validaCom()" />
						<label id = "lb9"></label>
						<br /><br />
						Bairro:<br /><input type = "text" name = "bairro" title = "Seu bairro aqui" size = "30px" onblur = "validaBairro()" />
						<label id = "lb10">*</label>
						<br /><br />
						Cidade:<br /><input type = "text" name = "cidade" title = "Sua cidade aqui" size = "30px" onblur = "validaCidade()" />
						<label id = "lb11">*</label>
						<br /><br />
						UF:<br /><select name = "uf" size = "1px" onblur = "validaUF()">
						<label id = "lb12">*</label>
						   <option id="-1"></option>
						   <option id="0">AC</option>
						   <option id="1">AL</option>
						   <option id="2">AP</option>
						   <option id="3">AM</option>
						   <option id="4">BA</option>
						   <option id="5">CE</option>
						   <option id="6">DF</option>
						   <option id="7">ES</option>
						   <option id="8">GO</option>
						   <option id="9">MA</option>
						   <option id="10">MT</option>
						   <option id="11">MS</option>
						   <option id="12">MG</option>
						   <option id="13">PA</option>
						   <option id="14">PB</option>
						   <option id="15">PR</option>
						   <option id="16">PE</option>
						   <option id="17">PI</option>
						   <option id="18">RJ</option>
						   <option id="19">RN</option>
						   <option id="20">RS</option>
						   <option id="21">RO</option>
						   <option id="22">RR</option>
						   <option id="23">SC</option>
						   <option id="24">SP</option>
						   <option id="25">SE</option>
						   <option id="26">TO</option>
						</select>

						<br />
						
				</fieldset>
				<br />
				<br />
				
				<fieldset id = "conta"><legend>Dados do login:</legend>
				
					Email Novamente:<br /><input type = "text" id = "email2" name = "email2" title = "Digite seu email novamente aqui !" onblur = "validaLogin()" />
					<label id = "lbl1">*</label>
					<br />
					<br />
					Digite a Senha:<br /><input type = "password" id = "loginSenha" name = "loginSenha" title = "Digite sua senha aqui !"  onblur = "validaLogin2()"/>
					<label id = "lbl2">*</label>
					<br />

				
				</fieldset>
				
				<br />
				<label id = "lb13">Os campos com (*) são de preenchimento obrigatório !</label>
				<br />
				
				<div id = "divEnviar">
					<input type = "submit" name = "enviar" value = "Cadastrar" onClick = " validaEnvio() " />
				</div>
			</form>
		</div>
		
			<div id = "acesso">
			
				<form id = "frm2" method = "post" action = "acesso.php">
			
					<fieldset id = "Login"><legend>Login:</legend>
				
						Email:<br />
						<input type = "text" id = "emailLogin" name = "emailLogin" title = "Seu email aqui !" size = "40px" />
						<br />
						<br />
						Senha:<br />
						<input type = "password" id = "senha" name = "senha" />
						<br />
						<br />
						<input type = "submit" id = "entrar" name = "entrar" value = "Entrar" />

				
					</fieldset>
			
				</form>
			
			</div>
			
		</div>
	
	</body>

</html>
