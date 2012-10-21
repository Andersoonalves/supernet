<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Supernet - Banda Larga</title>
<?php
include "css.php";
?>
</head>
<body>
<div id="tudo">
  <div id="bg">
    <div id="logo"> <a href="index.php"><img src="imagens/logo.png"/></a> </div>
    <!-- logo -->
    
    <div id="menu">
      <object type="application/x-shockwave-flash" data="swf/menu.swf" width="100%" height="130">
        <param name="allowScriptAccess" value="sameDomain" />
        <param name="movie" value="swf/menu.swf" />
        <param name="wmode" value="transparent" />
      </object>
    </div>
    <!-- menu -->
    
    <div id="busca">
      <?php
		session_start();
		
		$estado = $_SESSION['estado']; ;
		$cidade = $_SESSION['cidade']; ;
	  ?>
      <table width="100" border="0" cellpadding="3" cellspacing="3">
        <tr>
          <p id="primeira_linha">Você está em:</p>
        </tr>
        <tr>
          <td style="color:#fff; text-align:center; font-size:10px;
          font-weight:bold; line-height:1%; padding-left:4%;" id="cidade"><?php echo $cidade; ?></td>
          <td style="color:#fff; text-align:center; font-size:10px;
          font-weight:bold; line-height:1%; padding-left:1%;" id="estado"><?php echo $estado; ?></td>
        </tr>
      </table>
      
      <table id="formulario" width="170" border="0" cellpadding="0" cellspacing="0">
      <form action="" method="post" name="login">
      		<tr>
          		<td>
                <label id="label_login" for="login">Login: </label>
                <input id="login" name="" type="text" />
                </td>
            </tr>
            <tr>
            	<td>
                <label id="label_senha" for="senha">Senha: </label>
                <input type="password" id="senha" name="" type="text" />
                </td>
            </tr>
            <tr>
            	<td>
                <input id="logar" name="entrar" type="submit" value="Entrar" />
                </td>
            </tr>
      </form>
      </table>
    </div>
    <!-- busca --> 
    
  </div>
  <!-- bg --> 
  
</div>
<!-- tudo -->
</body>
</html>