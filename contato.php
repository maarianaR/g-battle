<?php
	session_start();
	
	//$_SESSION["tabela"] = "J";
	//$aux = 0;
	//if ($aux == 0){
		$_SESSION["lblcarrin"] = "00";
	//	$aux++;
	//}
	//if(isset($_POST['logout'])){
	//		 session_destroy();
	//}
	
?>

<?php

	if(isset($_POST['enviar'])){
		$nome = $_POST['seunome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];
		$para = "kleber@gbattle.com.br";
		mail($para, $assunto, $mensagem, "from: $email\n");
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G-Battle | Contato</title>
<link rel="stylesheet" type="text/css" href="arquivos/organizacao.css"  />
  <link rel="icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
</head>
<body background="imagens/bg.png">
  <div id="principal" >
   <div id="alinha" >
    <div  id="banner">
	<p><img src="imagens/x.gif" width="953" height="93" border="0" usemap="#Map"/>
      <map name="Map" id="Map">
        <area shape="rect" coords="37,1,364,94" href="index.php" />
        <area shape="rect" coords="718,11,920,65" href="cadastro.php" />
      </map>
 <?php
		echo ('<label class = "lblcarrinho"> <a id = "carrinho" href = "carrinho.php"> '.$_SESSION["lblcarrin"].'</a></label>');
	?>
	  <p><img src="imagens/x.gif" width="981" height="89" border="0" usemap="#Map2"/>
        <map name="Map2" id="Map2">
          <area shape="rect" coords="4,2,232,44" href="PgPlay2.php" />
          <area shape="rect" coords="234,3,406,43" href="PgPlay3.php" />
          <area shape="rect" coords="416,4,645,41" href="PgXBox360.php" />
          <area shape="rect" coords="654,4,808,41" href="PgWii.php" />
          <area shape="rect" coords="814,4,966,39" href="PgPC.php" />
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
   <br />
	<center><div id= "img_grupo">
  <div id = "dados">
        	<h4><center>Escola Técnica SENAI Areias<br />
				(Joseph Turton Júnior)<br /><br />
                UC: Programação de páginas WEB <br /><br />
                Docente: Alberto Rogério </center><br /><br />
                Equipe:<br />
        	    Kleber Monte<br />
        	    Mariana Ramos<br />
        	    Otávio Alves<br />
       	      Washington Ferreira</h4>
      </div>

        <img src="imagens/grupo.png" />
   		
    </div></center>
    <br /><br />
    <div id="emails" >
     <img src="imagens/contato.png" width="970" height="45"/>
     <br /><br />
    	<form action = "" method = "post" >
		
		Nome:<br /><input type = "text" name = "seunome" /><br />
		E-mail:<br /><input type = "text" name = "email" /><br />
		Assunto:<br /><input type = "text" name = "assunto" /><br />
		Mensagem:<br /><textarea name = "mensagem" ></textarea><br />	
		
		<input type = "submit" class = "comprar" name = "enviar" value = "Enviar e-mail" />
		
	</form>

    </div>

    <br />

    <div id="rodape">
      <p><img src="imagens/rodape.png" border="0" usemap="#orodapeMap" class="img" id="orodape" />
        <map name="orodapeMap" id="orodapeMap">
          <area shape="rect" coords="316,83,473,122" href="equipe.php" />
        </map>
      </p>
</div>
    
   </div>
  </div>



</body>
</html>
