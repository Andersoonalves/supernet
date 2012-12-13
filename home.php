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
       <img src='imagens/1.gif' >
        <span>
          <b>Imagem 1</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/2.gif' >
        <span>
          <b> Imagem 2</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/3.gif' >
        <span>
          <b> Imagem 3</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/4.gif' >
        <span>
          <b> Imagem 4</b><br>
         Description for img01
         </span>
      </a>
        <a href="#">
       <img src='imagens/5.gif' >
        <span>
          <b> Imagem 5</b><br>
         Description for img01
         </span>
      </a>
       <a href="#">
       <img src='imagens/6.gif' >
        <span>
          <b> Imagem 5</b><br>
         Description for img01
         </span>
      </a>
  </div> <!-- Slides -->
    </div><!-- banner -->

    
    
     <div id="conteudos"> <!-- Conteudos abaixo do banner -->

          <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1">        
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"></div>
                  <div class="ch-info-back">
                    <h3>Velocimetro</h3>
                    <p>by Josh Schott <a href="http://drbl.in/ewUW">View on Dribbble</a></p>
                  </div>  
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2">        
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back">
                    <h3>Bears Type</h3>
                    <p>by Josh Schott <a href="http://drbl.in/ewUW">View on Dribbble</a></p>
                  </div>  
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-3">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back">
                    <h3>Salon Spaces illustrations</h3>
                    <p>by Jeremy Slagle <a href="http://drbl.in/elmi">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-4">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-4"></div>
                  <div class="ch-info-back">
                    <h3>Leadership Series #3</h3>
                    <p>by Dustin Leer <a href="http://drbl.in/dfhn">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>




      </div><!-- conteudos -->
   
     
  </div><!-- conteudo_home --> 
  
  
</div>


<script type="text/javascript">
  $(document).ready(function() {
  $('#coin-slider').coinslider({ width: 1024, height:380, 
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