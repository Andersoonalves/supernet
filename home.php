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

     <div id='coin-slider'>
     <a href="#" target="">
       <img src='imagens/1.jpg' >
        <span>
          <b>Imagem 1</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/2.jpg' >
        <span>
          <b> Imagem 2</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/3.jpg' >
        <span>
          <b> Imagem 3</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/4.jpg' >
        <span>
          <b> Imagem 4</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/5.jpg' >
        <span>
          <b> Imagem 5</b><br>
         Description for img01
         </span>
      </a>
       <a href="#">
       <img src='imagens/6.jpg' >
        <span>
          <b> Imagem 5</b><br>
         Description for img01
         </span>
      </a>
  </div> <!-- Slides -->
    </div>

    <!-- banner -->
    
     <div id="conteudos"> <!-- Conteudos abaixo do banner -->
      <section class="ib-container" id="ib-container">
        <article>
          <header>
          	<a href="#"><img id="velocimetro" src="imagens/CAA.png" />
            <h3>Teste de Velocidade</a></h3>
          </header>
        </article>
        <article> 
			<header>
            <a href="#"><img id="boleto" src="imagens/boleto.png" />
            <h3>2ª Via Boleto Bancário</a></h3>
            </header>   
       </article>
        <article> 
			<header>
            <a href="#"><img id="promocoes" src="imagens/raio.png" />
            <h3>Promoções Supernet</a></h3>
       </article>
       <article> 
			<header>
            <a href="#"><img id="internet" src="imagens/internet.png" />
            <h3>Assine e Navegue Já!</a></h3>
       </article>
      <!-- fim dos conteudos -->
      </section>
      </div>
   <!-- conteudos -->
     
  </div>
  <!-- conteudo_home --> 
  
</div>


<script type="text/javascript">
  $(document).ready(function() {
  $('#coin-slider').coinslider({ width: 1200, height:380, 
    navigation: true, delay: 5000, hoverPause: true, titleSpeed:1000, spw: 10, sph: 5});
         });
  </script>
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