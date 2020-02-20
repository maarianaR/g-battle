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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="imagens/icon_gbattle.ico" type="image/x-icon" />
<title>G-Battle</title>
<link rel="stylesheet" type="text/css" href="arquivos/organizacao.css"  />
</head>
<body background="imagens/bg.png">
  <div id="principal" >
   <div id="alinha" >
 
     <div  id="banner">
       <p><img src="imagens/x.gif" width="945" height="91" border="0" usemap="#Map" />
         <map name="Map" id="Map">
           <area shape="rect" coords="12,-31,363,76" href="index.php" />
           <area shape="rect" coords="718,11,917,64" href="cadastro.php" />
         </map>
         <?php
		echo ('<label class = "lblcarrinho"> <a id = "carrinho" href = "carrinho.php"> '.$_SESSION["lblcarrin"].'</a></label>');
	?>
       </p>
       <p><img src="imagens/x.gif" width="981" height="89" border="0" usemap="#Map2" />
        <map name="Map2" id="Map2">
           <area shape="rect" coords="809,-14,967,44" href="PgPC.php" />
           <area shape="rect" coords="652,-18,807,44" href="PgWii.php" />
           <area shape="rect" coords="408,-17,649,44" href="PgXBox360.php" />
           <area shape="rect" coords="232,-15,408,46" href="PgPlay3.php" />
           <area shape="rect" coords="1,-14,230,46" href="PgPlay2.php" />
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
			 <!--
         <input type = "text" name = "nomeprod" id = "nomeprod" size = "95" />
         <select id = "categorias" name = "categorias" size = "1">
           <option value  = "-1"> Escolha a categoria</option>
           <option value  = "0"> PS2 </option>
           <option value  = "1"> PS3 </option>
           <option value  = "2"> XBOX 360 </option>
           <option value  = "3"> WII </option>
           <option value  = "4"> PC </option>
         </select>-->
     
     </div>
    
    <br />
    <div id="animacao" >
    <img src="imagens/anigif.gif" width="969" height="299" />
    </div>
    <div id="lancamentos" >
     <p><img src="imagens/lancamentos.png" width="970" height="45"/>
       <br />
     </p>
     <div id="jg1" >
          <center><img src="imagens/pc-jogos-1.JPG"  />
          <br />
          <h4>PC  ASSASSINS CREED</h4>
          <h4>R$ 89,91 </h4>
          <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
            <br/ >
          </h4>
        </center>
</div>
          
        <div id="jg2" >
        <center><img src="imagens/pc-jogos-3.JPG"  />
        <br /><h4>PC  SPLIT SECOND</h4>
        <h4>R$ 43,90 </h4>
        <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
        </h4>
        </center>
        </div>
        
<div id="jg3" >
          <center><img src="imagens/pc-jogos-5.JPG"  />
          <br />
          <h4>PC THE SIMS 3</h4>
           <h4>R$ 53,90 </h4>
           <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
           </h4>
          </center>
</div>
          
        <div id="jg4" >
        <center><img src="imagens/pc-jogos-6.JPG"  />
        <br /><h4>PC FIFA MANAGER 12</h4>
        <h4> R$ 89,90</h4>
        <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
        </h4>
        </center>
        </div>
      
     </div>

</div>
    <div id="promocoes" >
     <img src="imagens/promocoes.png" width="970" height="45"/><br />
      <br />
      <div id="jg1" >
      <center><img src="imagens/pc-jogos-2.jpg"  />
      <br /><h4>PC THE SIMS MEDIEVAL</h4>
      <h4>R$ 59,90 </h4>
      <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
      </h4>
      </center>
      </div>
      
        <div id="jg2" >
        <center><img src="imagens/pc-acessorio-1.JPG"  /></center>
        <center><h4> PC  MOUSE PAD </h4> 
        <h4>R$ 125,10</h4>
        <h4>
          <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
        </h4>
        </center>
      </div>
      
      <div id="jg3" >
      <center><img src="imagens/play2-acessorios-3.jpg"  />
      <br /><h4>PS2 GUITAR HERO 5</h4>
      <h4>R$ 269,50</h4>
      <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
      </h4>
      </center>
      </div>
      
          <div id="jg4" >
          <center><img src="imagens/pc-acessorio-4.jpg"  />
          <br /><h4>PS2 VOLANTE RALLY</h4>
          <h4>R$ 218,00</h4>
          <h4>
  <input type = "submit" class = "comprar" name = "comprar" value = "Comprar" id = "comprar"/>
  <br/ >
          </h4>
          </center>
          </div>
        
    </div>
    <br />
    <div id="rodape">
      <p>&nbsp;</p>
      <p><img src="imagens/rodape.png" border="0" usemap="#orodapeMap" class="img" id="orodape" />
        <map name="orodapeMap" id="orodapeMap">
          <area shape="rect" coords="316,83,473,122" href="contato.php" />
        </map>
      </p>
    </div>
    
   </div>
  </div>



</body>
</html>
