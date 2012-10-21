<?php
$db = mysql_connect("localhost", "root", "") or die("Erro na conexão com a base de dados"); 
$dados = mysql_select_db("teste", $db) or die("Erro na seleção da base de dados");
//mysql_set_charset('latin1', $db);
?>