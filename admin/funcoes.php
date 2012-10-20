<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php

require_once("conexaoBD.php");

function verifica_tabela($estado, $cidade){
	$cont = 0;
	
	$sql_verifica_estado = mysql_query("SELECT * FROM cidades_cadastradas WHERE estado = '$estado'");
	
	if(mysql_num_rows($sql_verifica_estado) >= 1) {
		$cont++;
	}
	
	$sql_verifica_cidade = mysql_query("SELECT * FROM cidades_cadastradas WHERE cidade = '$cidade'");
	
	if(mysql_num_rows($sql_verifica_cidade) >= 1) {
		$cont++;
	}
	
	if($cont == 2) {
		echo "<meta http-equiv='refresh' content='0; URL= ././admin.php'>
		
		<script type=\"text/javascript\">
		alert(\"Estado e cidade já cadastrados.\");
		</script>";
	} else {
		$sql_gravar = mysql_query("INSERT INTO cidades_cadastradas (cidade, estado) value ('$cidade', '$estado')");
		header("Location:admin.php");	
	}
}

if($_GET['funcao'] == "cadastrar"){

$estado_post = $_POST['listEstados'];
$cidade_post = $_POST['listCidades'];

$sql_busca_estado = mysql_query("SELECT * FROM estados WHERE ID_ESTADO = '$estado_post'");
while($linha = mysql_fetch_array($sql_busca_estado)){
	$estado = $linha['DSC_ESTADO'];
}

$sql_busca_cidade = mysql_query("SELECT * FROM cidades WHERE ID_CIDADE = '$cidade_post'");
while($linha_ = mysql_fetch_array($sql_busca_cidade)){
	$cidade = $linha_['DSC_CIDADE'];
}

verifica_tabela($estado, $cidade);

}

if($_GET['funcao'] == "excluir"){
	$id = $_GET['id'];
	$sql_alterar = mysql_query("DELETE FROM cidades_cadastradas WHERE id = '$id'");
	header("Location:admin.php");
}
?>