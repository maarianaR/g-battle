<html>
	<head>
		
		<link rel = "stylesheet" type = "text/css" href = "estilos.css" />
	
		<script type = "text/javascript" src = "scripts.js">
		
		</script>
	
	</head>
	<body>
		
		<div id = "tudo">
		
			<?php
			
				include("verifica.php");
				include("connect.php");

				echo"<h5> Olá ".$_SESSION['nome'].", seja bem vindo ! </h5>";
				
				$categoria = $_POST['categorias'];
				$nomeProd = $_POST['nomeProd'];
				
				mysql_select_db("gbattle",$conn) or die("Error:".mysql_error());

				if(isset($_POST['selecionar'])){
				   if($categoria == "Play2"){

		      		  //enquanto nao chega ao fim do vetor!				      
				      

					      $sql = "select * from produtos where console = 'play2' and nome_prod = '$nomeProd'";
					      $res = mysql_query($sql,$conn) or die("Erro ao buscar produto".mysql_error());
					      $vetor = mysql_fetch_assoc($res);

						$nome=$vetor['nome_prod'];
						$preco=number_format($vetor['preco_prod'],2,',','.');
						$imagem=$vetor['imagem_prod'];
						echo('<div id="produtos2"><table><tr><td id="img2"><img id="imagem2" src="'.$imagem.'" /></td><td id="nome">'.$nome.'</td><td id="preco">'.$preco.'</td></tr></table></div>');
 

					
				      

				   }
				

				}
			

			?>
			<div id = "buscar">
			
					<form id = "frm3" enctype = "multipart/form-data" method = "post" action = "">
					
						<input type = "text" id = "nomeProd" name = "nomeProd" size = "50px" value ="Buscar produto" 
							onfocus = "if(document.getElementById('nomeProd').value == 'Buscar produto')
										document.getElementById('nomeProd').value = '';
										else if((document.getElementById('nomeProd').value != 'Buscar produto')&&(document.getElementById('nomeProd').value != ''))
										return true;" 
							onblur = "if(document.getElementById('nomeProd').value == '')
										document.getElementById('nomeProd').value = 'Buscar produto';" 
							/>
						<select id = "categorias" name = "categorias">
						
							<option id = "-1"> Categoria </option>
							<option id = "0" name = "play2"> Play2 </option>
							<option id = "1" name = "play3"> Play3 </option>
							<option id = "2" name = "wii"> Wii </option>
						
						</select>
						
						<input type = "submit" id = "selecionar" name = "selecionar" value = "Buscar" />
					</form>
			
			</div>
				
			<a id = "sair" href = "sair.php">Sair</a>
		</div>
	</body>
</html>
