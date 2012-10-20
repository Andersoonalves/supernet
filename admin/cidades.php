<?php
require_once("conexaoBD.php");           
                   
$pEstado = $_POST["estado"];          

$sql = "SELECT id_cidade, dsc_cidade FROM cidades WHERE cod_estado = ".$pEstado." ORDER BY dsc_cidade";            

//EXECUTA A QUERY               
$sql = mysql_query($sql);       

$row = mysql_num_rows($sql);    

//VERIFICA SE VOLTOU ALGO 
if($row) {                
   //XML
   $xml  = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
   $xml .= "<cidades>\n";               
   
   //PERCORRE ARRAY            
   for($i=0; $i<$row; $i++) {  
      $codigo    = mysql_result($sql, $i, "id_cidade"); 
	  $descricao = mysql_result($sql, $i, "dsc_cidade");
      $xml .= "<cidade>\n";     
      $xml .= "<codigo>".$codigo."</codigo>\n";                  
      $xml .= "<descricao>".$descricao."</descricao>\n";         
      $xml .= "</cidade>\n";    
   }//FECHA FOR                 
   
   $xml.= "</cidades>\n";
   
   //CABEÇALHO
   Header("Content-type: application/xml; charset=iso-8859-1"); 
}//FECHA IF (row)                                               

//PRINTA O RESULTADO  
echo $xml;            
?>