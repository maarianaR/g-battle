<?php
session_start();
if(isset($_POST['logout'])){
			 session_destroy();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G-Battle - Jogos | PlayStation 3</title>
<link rel="stylesheet" type="text/css" href="arquivos/organizacao.css"  />
  <link rel="icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />

</head>

<body background="imagens/bg.png">
  <div id="principal" >
   <div id="alinha" >
    <div  id="banner">
    <br />
    <img src="imagens/x.gif" width="954" height="71" border="0" usemap="#Map"/>
    <map name="Map" id="Map">
      <area shape="rect" coords="24,0,426,78" href="index.php" />
      <area shape="rect" coords="711,6,920,64" href="cadastro.php" />
    </map>
         <?php
		echo ('<label class = "lblcarrinho"> <a id = "carrinho" href = "carrinho.php"> '.$_SESSION["lblcarrin"].'</a></label>');
	?>
  <br />
		<br />
		<img src="imagens/x.gif" width="981" height="89" border="0" usemap="#Map2"/>
        <map name="Map2" id="Map2">
          <area shape="rect" coords="8,14,224,45" href="PgPlay2.php" />
          <area shape="rect" coords="237,14,403,44" href="PgPlay3.php" />
          <area shape="rect" coords="418,9,648,42" href="PgXBox360.php" />
          <area shape="rect" coords="657,13,802,42" href="PgWii.php" />
          <area shape="rect" coords="805,13,962,45" href="PgPC.php" />
        </map>
    
                  <?php
		echo ('<div id="busca"><input type = "text" class = "busca" name = "nomeprod" id = "nomeprod" size = "90" />
        		 <select id = "categorias" name = "categorias" size = "1">
				   <option value  = "-1"> &nbsp &nbsp &nbsp &nbsp &nbsp Escolha a categoria &nbsp &nbsp &nbsp &nbsp &nbsp</option>
				   <option value  = "0"> PS2 </option>
				   <option value  = "1"> PS3 </option>
				   <option value  = "2"> XBOX 360 </option>
				   <option value  = "3"> WII </option>
				   <option value  = "4"> PC </option>
				 </select></div>');
		?>
    </div>
	<br /> <br />
	  <form action="" method = "post" >
    <div id="barralat">
    <img src="imagens/categorias.png"  />
    <img src="imagens/play3.png" />
    <a href="PgPlay3.php"><img src="imagens/jogos.png"
    	 onmouseover="this.src='imagens/jogos2.png'"
         onmouseout="this.src='imagens/jogos.png'"
		 /></a>
    <a href="PgPlay3A.php"><img src="imagens/acessorios.png"
    	 onmouseover="this.src='imagens/acessorios2.png'"
         onmouseout="this.src='imagens/acessorios.png'"
		 /></a>
    <a href="PgPlay3C.php"><img src="imagens/console.png"
    	 onmouseover="this.src='imagens/console2.png'"
         onmouseout="this.src='imagens/console.png'"
		  /></a>
    </div>
  
	
	<div id="conteudo" >
			<?php
			require("conexao.php");

			$sql = "SELECT * FROM produtos WHERE tipo = 'J' AND console = 'PS3'";
			$qr = mysql_query($sql) or die(mysql_error());
			while($ln = mysql_fetch_assoc($qr)){
			$nome = $ln['nome_prod'];
			$preco = number_format($ln['preco_prod'], 2, ',', '.');
			
			$imagem = $ln['imagem_prod'];
			echo ('<div id ="produtos" ><table><tr><td id="img"><img id = "imagem" src="'.$imagem.'" /></td><td id="nome">'.$nome. '</td><td id = "preco">R$ ' .$preco. '</td><br /></tr></table><a class="comprar" href="carrinho.php?acao=add&id='.$ln['cod_prod'].'">Comprar</a></div>');
			
			}
			//echo '<input type = "submit" name = "logout" value = "Logout"/>';
			?>
			
		  <br /> <br /> <br />
    </div>
    </form>
    <div id="rodape">
     <img src="imagens/rodape.png" border="0" usemap="#orodapeMap" class="img" id="orodape" />
     <map name="orodapeMap" id="orodapeMap">
       <area shape="rect" coords="317,81,473,123" href="contato.php" />
     </map>
    </div>
   
   </div>
  </div>
  
</body>
</html>
