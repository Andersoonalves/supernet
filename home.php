<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<?php
include "css.php";
?>
</head>

<body>
<div id="fundo_home">
  <div id="conteudo_home">
    <div id="banner">
      <object type="application/x-shockwave-flash" data="swf/banner.swf" width="100%" height="100%">
        <param name="allowScriptAccess" value="sameDomain" />
        <param name="movie" value="swf/banner.swf" />
      </object>
    </div>
    <!-- banner -->
    
    <div id="conteudos"> <!-- Conteudos abaixo do banner -->
      <section class="ib-container" id="ib-container">
        <article>
          <header>
            <h3><a href="#">Teste de Velocidade</a></h3>
            <span>Teste sua velocidade</span> </header>
          <p>Essa porra vai ficar fodaaaaaa</p>
        </article>
        <article> 
			<header>
            <h3><a href="#">Escolha o melhor Plano</a></h3>
            <span>Planos</span> </header>
          <p>Temos os melhores planos para voce economizar</p>    
       </article>
        <article> 
			<header>
            <h3><a href="#">Acorda Dhuy</a></h3>
            <span>Acordandoooo</span> </header>
          <p>Fome do caralhoo</p>    
       </article>
        <article> 
			<header>
            <h3><a href="#">Acorda Dhuy</a></h3>
            <span>Acordandoooo</span> </header>
          <p>Fome do caralhoo</p>    
       </article>
        <article> 
			<header>
            <h3><a href="#">Acorda Dhuy</a></h3>
            <span>Acordandoooo</span> </header>
          <p>Fome do caralhoo</p>    
       </article>
        <!-- fim dos conteudos --> 
      </section>
    </div>
     <!-- conteudos -->
  </div>
  <!-- conteudo_home --> 
  
</div>
<!-- fundo_home -->
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var $container	= $('#ib-container'),
					$articles	= $container.children('article'),
					timeout;
				
				$articles.on( 'mouseenter', function( event ) {
						
					var $article	= $(this);
					clearTimeout( timeout );
					timeout = setTimeout( function() {
						
						if( $article.hasClass('active') ) return false;
						
						$articles.not( $article.removeClass('blur').addClass('active') )
								 .removeClass('active')
								 .addClass('blur');
						
					}, 65 );
					
				});
				
				$container.on( 'mouseleave', function( event ) {
					
					clearTimeout( timeout );
					$articles.removeClass('active blur');
					
				});
			
			});
		</script>




</html>