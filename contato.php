<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato</title>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<?php
include "css.php";
?>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<body>
<div id="fundo_contato">
  <div id="conteudo_contato">
    <center>
      <div id="frame">
        <div id="conteudo_centro">
          <h3 style="text-align:center">
          Fale Conosco
          </h1>
          <div class="textojustificado">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entre em contato com nossa equipe e tire dúvidas, 
            	solicite informações ou mesmo envie suas sugestões e críticas para que possamos melhorar 
                nosso serviço e atendê-lo sempre da melhor forma:</p>
            </br>
          </div>
          <center>
            <form action="form.php" method="POST">
              <input type="hidden">
              <!-- e-mail do destinatario -->
              
              <table width="39%" border="0" align="left" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="60" style="color:#fff">Nome:<br>
                  <span id="validadarNome">
                  <input name="nome" type="text" value="" size="30" maxlength="20" />
                  <span class="textfieldMaxCharsMsg">Excedido o número máximo de caractéres</span>Campo Obrigatório. </span></td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">E-mail:<br>
                  <span id="validarEmail">
                  <input type="text" size="30" name="email" value="" />
                  <span class="textfieldInvalidFormatMsg">Invalid format.</span>Campo Obrigatório.</span></td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">Assunto:<br>
                    <span id="sprytextfield3">
                    <input type="text" size="30" name="assunto" value="" />
                    E-mail inválido. Campo Obrigatório.
                    </span></td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">Mensagem:<br>
                    <textarea cols="40" rows="10" name="mensagem"></textarea></td>
                </tr>
                <tr>
                  <td height="60"><input name="submit" type="submit" value=" Enviar ">
                    &nbsp;
                    <input name="reset" type="reset" value=" Limpar "></td>
                </tr>
              </table>
            </form>
          </center>
        </div>
        <!-- conteudo cenntro --> 
      </div>
      <!-- frame -->
    </center>
  </div>
  <!-- conteudo contato --> 
</div>
<!-- fundo_contato -->

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("validadarNome", "none", {maxChars:50});
var sprytextfield2 = new Spry.Widget.ValidationTextField("validarEmail", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
</script>
</body>
</html>