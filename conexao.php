<?php
	$conexao = mysql_connect("localhost", "root", "102102") or die(mysql_error());
	mysql_select_db("gbattle", $conexao) or die (mysql_error());
	
	
?>