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
    
    <div id="login">
      <?php
		session_start();
		
		$estado = $_SESSION['estado']; ;
		$cidade = $_SESSION['cidade']; ;
	  ?>
      
      
      <form class="form-2" method="post" action="">
        <h1><span class="log-in">Faça seu Login</span></h1>
        <p class="float">
          <label for="login"><i class="icon"><img src="imagens/user.png"/></i>Usuário</label>
          <input type="text" name="login" placeholder="login ou e-mail">
        </p>
        <p class="float">
          <label for="password"><i class="icon"><img src="imagens/senha.png" /></i>Senha</label>
          <input type="password" name="password" placeholder="Password" class="showpassword">
        </p>
        <!-- <p class="clearfix"> <a href="#" class="log-twitter">Cadastre-se</a> -->
          <input id="botaoEntrar" type="submit" name="submit" value="Entrar">
        </p>
      </form>
      
    </div>
    <!-- login --> 
    
  </div>
  <!-- bg --> 
  
</div>
<!-- tudo -->
</body>
	<!-- JQuery para mostrar a senha 
    
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Mostrar Senha")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>-->
</html>