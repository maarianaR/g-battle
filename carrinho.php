<?php
	session_start();
	

	if(!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}

	
	
	//adicionar produto
	//$_SESSION['carrinho'][$id] = 1;
	if(isset($_GET['acao']))
	{
		if($_GET['acao'] == 'add'){
			$id = intval($_GET['id']);
			if(!isset($_SESSION['carrinho'][$id])){
				$_SESSION['carrinho'][$id] = 1;
			}
			else 
			{
				$_SESSION['carrinho'][$id] += 1;
			}
		}
		//print_r($_SESSION['carrinho']);
	
	
	//remover carrinho
	
	if($_GET['acao'] == 'del'){
		$id = intval($_GET['id']);
		if(isset($_SESSION['carrinho'][$id])){
			unset($_SESSION['carrinho'][$id]);
		}
	}
	if($_GET['acao'] == 'up'){
		//if(is_array($_POST['prod'])){
			foreach($_POST['prod'] as $id => $qtd){
				$id = intval($id);
				$qtd = intval($qtd);
				if(!empty($qtd) || $qtd <> 0){
					$_SESSION['carrinho'][$id] = $qtd;
				}
				else{
					unset($_SESSION['carrinho'][$id]);
				}
			}
		}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G-Battle</title>
<link rel="stylesheet" type="text/css" href="arquivos/organizacao.css"  />
  <link rel="icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
</head>
<body background="imagens/bg.png">
  <div id="principal" >
  <form action="?acao=up" method="post">
   <div id="alinha" >
    <div  id="banner">
      <p><img src="imagens/x.gif" width="959" height="93" border="0" usemap="#Map" />
        <map name="Map" id="Map">
          <area shape="rect" coords="30,0,364,90" href="index.php" />
          <area shape="rect" coords="718,7,918,51" href="cadastro.php" />
        </map>
        <?php
		$qntprodutos = array_sum($_SESSION["carrinho"]);
		echo ('<label class = "lblcarrinho"> <a id = "carrinho" href = "carrinho.php">'.$qntprodutos.'</a></label>');
	?>

        <img src="imagens/x.gif" width="970" height="72" border="0" usemap="#Map2" />
        <map name="Map2" id="Map2">
          <area shape="rect" coords="2,9,228,55" href="PgPlay2.php" />
          <area shape="rect" coords="236,4,406,58" href="PgPlay3.php" />
          <area shape="rect" coords="414,2,650,57" href="PgXBox360.php" />
          <area shape="rect" coords="653,5,810,58" href="PgWii.php" />
          <area shape="rect" coords="816,3,966,55" href="PgPC.php" />
        </map>
      </p>
</div>
    
    
		<?php 
		 require("conexao.php");
			
			//$tipo = $_SESSION["tabela"];
			if(count($_SESSION['carrinho']) == 0){
				echo '<h1>Não há produtos no carrinho!</h1>';
			}
			else{
				//$aux = (int) $_SESSION["carrinho"];
				
				foreach($_SESSION['carrinho'] as $id => $qtd)
				{
				
					//$_SESSION["lblcarrin"] = $qtd;
					$sql =  "SELECT * FROM produtos WHERE cod_prod='$id'";
					$qr = mysql_query($sql) or die(mysql_error());
					$ln = mysql_fetch_assoc($qr);
					
					$nome = $ln['nome_prod'];
					$preco = number_format($ln['preco_prod'], 2, ',', '.');
					$sub = number_format($ln['preco_prod'] * $qtd, 2, ',', '.');
					$imagem = $ln['imagem_prod'];
					echo '<br /><br/>';
					echo ('<div id ="prod_carrinho" ><table><tr><td id="img"><img id = "imagem" src="'.$imagem.'" /></td><td id="nome">'.$nome. '</td><td id = "quant">Quantidade : <input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td><td id = "preco">' .$preco. '</td><td id = "subtotal"> ' .$sub . '</td><br /></tr></table></div>');
				}		
						echo '<br/><br/>';
						echo "<center><a class='cont_compra'href='PgPlay2.php'>Continuar comprando</a>";
						echo '<input class="atualizar" type="submit" value="Atualizar Carrinho"/></center>';
						echo '<br/><br/>';
					
						
						
						
			}
			
		?>
		
  </form>
    
    <div id="rodape">
     <img src="imagens/rodape.png" border="0" usemap="#orodapeMap" class="img" id="orodape" />
     <map name="orodapeMap" id="orodapeMap">
       <area shape="rect" coords="316,83,473,122" href="equipe.php" />
     </map>
    </div>
    </div>





</body>
</html>
