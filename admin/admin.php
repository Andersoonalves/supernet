<?php
require_once("conexaoBD.php");

$sql = "SELECT * FROM estados WHERE ID_ESTADO";
$sql = mysql_query($sql);

$row = mysql_num_rows($sql);
?>

<script language="JavaScript">

   function Dados(valor) {
      //verifica se o browser tem suporte a ajax
	  try {
         ajax = new ActiveXObject("Microsoft.XMLHTTP");
      } 
      catch(e) {
         try {
            ajax = new ActiveXObject("Msxml2.XMLHTTP");
         }
	     catch(ex) {
            try {
               ajax = new XMLHttpRequest();
            }
	        catch(exc) {
               alert("Esse browser não tem recursos para uso do Ajax");
               ajax = null;
            }
         }
      }
	  //se tiver suporte ajax
	  if(ajax) {
	     //deixa apenas o elemento 1 no option, os outros são excluídos
		 document.forms[0].listCidades.options.length = 1;
	     
		 idOpcao  = document.getElementById("opcoes");
		 
	     ajax.open("POST", "cidades.php", true);
		 ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		 
		 ajax.onreadystatechange = function() {
            //enquanto estiver processando...emite a msg de carregando
			if(ajax.readyState == 1) {
			   idOpcao.innerHTML = "Carregando...!";   
	        }
			//após ser processado - chama função processXML que vai varrer os dados
            if(ajax.readyState == 4 ) {
			   if(ajax.responseXML) {
			      processXML(ajax.responseXML);
			   }
			   else {
			       //caso não seja um arquivo XML emite a mensagem abaixo
				   idOpcao.innerHTML = "--Primeiro selecione o estado--";
			   }
            }
         }
		 //passa o código do estado escolhido
	     var params = "estado="+valor;
         ajax.send(params);
      }
   }
   
   function processXML(obj){
      //pega a tag cidade
      var dataArray   = obj.getElementsByTagName("cidade");
      
	  //total de elementos contidos na tag cidade
	  if(dataArray.length > 0) {
	     //percorre o arquivo XML paara extrair os dados
         for(var i = 0 ; i < dataArray.length ; i++) {
            var item = dataArray[i];
			//contéudo dos campos no arquivo XML
			var codigo    =  item.getElementsByTagName("codigo")[0].firstChild.nodeValue;
			var descricao =  item.getElementsByTagName("descricao")[0].firstChild.nodeValue;
			
	        idOpcao.innerHTML = "--Selecione uma das opções abaixo--";
			
			//cria um novo option dinamicamente  
			var novo = document.createElement("option");
			    //atribui um ID a esse elemento
			    novo.setAttribute("id", "opcoes");
				//atribui um valor
			    novo.value = codigo;
				//atribui um texto
			    novo.text  = descricao;
				//finalmente adiciona o novo elemento
				document.forms[0].listCidades.options.add(novo);
		 }
	  }
	  else {
	    //caso o XML volte vazio, printa a mensagem abaixo
		idOpcao.innerHTML = "--Primeiro selecione o estado--";
	  }	  
   }

</script>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Supernet - Admin</title>
</head>

<body>
<div id="cadastrar_regiao">
<h1>Administrador Supernet</h1>

<form id="form4" name="form4" method="post" action="funcoes.php?funcao=cadastrar">
		<p>Estado:&nbsp;
        <select name="listEstados" onChange="Dados(this.value);">
          	<option value="0">Selecione o estado...</option>
            <?php for($i = 0; $i < $row; $i++) { ?>
            <option value="<?php echo mysql_result($sql, $i, "id_estado"); ?>"><?php echo mysql_result($sql, $i, "dsc_estado"); ?></option><?php } ?>
        </select>
    
    	<br><br>
        Cidade:&nbsp;
        <!-- onChange="alert(this.value)" -->
        <select name="listCidades">
        	<option id="opcoes" value="0">Selecione a cidade...</option>
        </select>
        </p>
        <p>
   			<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" />
        </p>    
</form>

<table width="300" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td align="center" bgcolor="#999999">Cidade</td>
    <td align="center" bgcolor="#999999">Estado</td>
    <td align="center" bgcolor="#999999">Remover</td>
  </tr>
  <?php 
  include "conexaoBD.php";
  
  $sql_visualizar = mysql_query("SELECT * FROM cidades_cadastradas ORDER BY estado");
  while($linha = mysql_fetch_array($sql_visualizar)){
	  $id = $linha['id'];
	  $cidade = $linha['cidade'];
	  $estado = $linha['estado'];
  ?>
  <tr>
    <td align="center"><?php echo $cidade ?></td>
    <td align="center"><?php echo $estado ?></td>
    <td align="center"><a href="funcoes.php?funcao=excluir&id=<?php echo $id ?>">Excluir</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</div>
</body>
</html>