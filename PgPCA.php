﻿<?php
session_start();
if(isset($_POST['logout'])){
			 session_destroy();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G-Battle - Acessórios | PC</title>
<link rel="stylesheet" type="text/css" href="arquivos/organizacao.css"  />
  <link rel="icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />

</head>

<body background="imagens/bg.png">
  <div id="principal" >
   <div id="alinha" >
    <div  id="banner">
      <p><img src="imagens/x.gif" width="942" height="76" border="0" usemap="#Map"/>
        <map name="Map" id="Map">
          <area shape="rect" coords="34,-9,383,78" href="index.php" />
          <area shape="rect" coords="713,10,919,64" href="cadastro.php" />
        </map>
      </p>
         <?php
		echo ('<label class = "lblcarrinho"> <a id = "carrinho" href = "carrinho.php"> '.$_SESSION["lblcarrin"].'</a></label>');
	?>
    <img src="imagens/x.gif" width="981" height="84" border="0" usemap="#Map2"/>
    <map name="Map2" id="Map2">
      <area shape="rect" coords="8,18,230,48" href="PgPlay2.php" />
      <area shape="rect" coords="233,18,409,47" href="PgPlay3.php" />
      <area shape="rect" coords="414,19,647,47" href="PgXBox360.php" />
      <area shape="rect" coords="654,21,807,46" href="PgWii.php" />
      <area shape="rect" coords="808,20,967,46" href="PgPC.php" />
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
    <img src="imagens/pc.png" />
    <a href="PgPC.php"><img src="imagens/jogos.png"
    	 onmouseover="this.src='imagens/jogos2.png'"
         onmouseout="this.src='imagens/jogos.png'"
		 /></a>
    <a href="PgPCA.php"><img src="imagens/acessorios.png"
    	 onmouseover="this.src='imagens/acessorios2.png'"
         onmouseout="this.src='imagens/acessorios.png'"
		 /></a>

    </div>
  
	
	<div id="conteudo" >
			<?php
			require("conexao.php");

			$sql = "SELECT * FROM produtos WHERE tipo = 'A' AND console = 'PC'";
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
