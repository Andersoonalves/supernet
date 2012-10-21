<?php
require_once("conexaoBD.php");

$sql = "SELECT DISTINCT estado FROM cidades_cadastradas ORDER BY estado" ;
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
			var descricao =  item.getElementsByTagName("descricao")[0].firstChild.nodeValue;
			
	        idOpcao.innerHTML = "- Selecione uma das cidades abaixo -";
			
			//cria um novo option dinamicamente  
			var novo = document.createElement("option");
			    //atribui um ID a esse elemento
			    novo.setAttribute("id", "opcoes");
				//atribui um valor
			    novo.value = descricao;
				//atribui um texto
			    novo.text  = descricao;
				//finalmente adiciona o novo elemento
				document.forms[0].listCidades.options.add(novo);
		 }
	  }
	  else {
	    //caso o XML volte vazio, printa a mensagem abaixo
		idOpcao.innerHTML = "- Primeiro selecione o estado -";
	  }	  
   }

</script>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Supernet</title>
<link href="../css/init.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="fundo_init">
	  <div id="init">
            <div id="box_regiao">
               <h1>&nbsp;ONDE VOCÊ ESTÁ?</h1>
                  <form id="form4" name="form4" method="post" action="funcoes.php">
        		    <select name="listEstados" onChange="Dados(this.value);">
                    	<option value="0">Selecione o estado...</option>
                    	<?php for ($i = 0; $i < $row; $i++) { ?>
                        <option value="<?php echo mysql_result($sql, $i, "estado"); ?>">
						<?php echo mysql_result($sql, $i, "estado"); ?></option>
						<?php } ?>
      		        </select>
                    
                    <br>
                    
        		    <select name="listCidades">
                    	<option id="opcoes" value="0">Selecione a cidade...</option>
      		        </select>
                    
                    <input type="submit" name="enviar" id="enviar" value="Entrar" />
      		   </form>
          </div><!-- box_regiao -->
        </div><!-- init -->
	</div> <!-- fundo_init -->
</body>
</html>