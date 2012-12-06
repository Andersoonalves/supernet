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
      <div id="frame1">
        <div id="conteudo_centro">
         <h2>Informa&ccedil;&otilde;es para Contato</h2>
            <div class="col_12 float_l">
                 <h4>Endere&ccedil;o</h4>
                 <h6><strong>Supernet Brasil</strong></h6>
                     AV. Tal de Tal e tal ,<br />
                   Tal de Tal e tal<br />
                       Tal de Tal e tal<br /><br />
        
              <strong>Telefone:</strong>  <br />
              <strong>E-mail:</strong> <a href="mailto:terciofelipe.com@gmail.com">terciofelipe.com@gmail.com</a>  <br />
        
                <div class="cleaner h40"></div>  
                  <h4>Nossa Localiza&ccedil;&atilde;o</h4>
           <iframe width="450" height="300" frameborder="0" scrolling="no" 
marginheight="0" marginwidth="0" 
src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;
q=Supernet+Rua+Das+Laranjeiras+Centro,+Jo%C3%A3o+Pessoa+-+PB&amp;aq=&amp;sll=-7.109751,-34.861164&amp;
sspn=0.136103,0.154324&amp;t=h&amp;ie=UTF8&amp;hq=Supernet+Rua+Das+Laranjeiras&amp;
hnear=Centro,+Jo%C3%A3o+Pessoa+-+Para%C3%ADba&amp;ll=-7.116809,-34.874435&amp;spn=0.004253,0.004823&amp;z=14&amp;
iwloc=A&amp;cid=16921075823078990459&amp;output=embed"></iframe><br />

              </div>
    <div class="col_12 float_r">
      <h4>Sinta-se a vontade para nos mandar uma mensagem.</h4>
        <p>Entre em contato com nossa equipe e tire d&uacute;vidas, 
              solicite informa;es ou mesmo envie suas sugest&otilde;es e cr&iacute;ticas para que possamos melhorar 
                nosso servi&ccedil;o e atend&ecirc;-lo sempre da melhor forma.</p>
            
          <div id="contact_form">
           <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">E-mail:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
            <label for="subject">Assunto:</label> <input type="text" name="subject" id="subject" class="input_field" />

            <div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
            <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
            </form>
        </div>
  </div>
        </div>
        <!-- conteudo cenntro --> 
      </div>
      <!-- frame -->
  </div>
  <!-- conteudo contato --> 
</div>
<!-- fundo_contato -->
</body>
</html>