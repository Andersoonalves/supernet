<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato</title>
<?php
include "css.php";
?>
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
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entre em contato com nossa equipe e tire d&uacute;vidas, 
            	solicite informa&ccedil;&otilde;es ou mesmo envie suas sugest&otilde;es e cr&iacute;ticas para que possamos melhorar 
                nosso servi&ccedil;o e atend&ecirc;-lo sempre da melhor forma:</p>
            </br>
          </div>
          <center>
            <form action="form.php" method="POST">
              <input type="hidden">
              <!-- e-mail do destinatario -->
              
              <table width="39%" border="0" align="left" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="60" style="color:#fff">Nome:<br>
                    <input name="nome" type="text" value="" size="30" maxlength="20" /></td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">E-mail:<br>
                    <input type="text" size="30" name="email" value="" /></td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">Assunto:<br>
                    <input type="text" size="30" name="assunto" value="" />
                  </td>
                </tr>
                <tr>
                  <td height="60" style="color:#fff">Mensagem:<br>
                    <textarea cols="40" rows="10" name="mensagem"></textarea>
                  </td>
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
</body>
</html>