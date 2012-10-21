<?php
$db = mysql_connect("localhost", "root", "") or die("Erro na conexão com a base de dados"); 
$dados = mysql_select_db("supernet", $db) or die("Erro na seleção da base de dados");
?>