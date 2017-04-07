<?php require 'head.php'; ?>

<body id="body" class="page -contato" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php require 'header.php'; ?>

  <main id="mainContent" class="main-content grid section -large" itemscope itemprop="mainContentOfPage" role="main">
    <div class="contato-business gutter-l _mb-xxl" itemscope itemtype="http://schema.org/LocalBusiness">
      <div class="col s-1 m-1 l-4x2 _mb-xl">
        <h4 class="page-title">Fale conosco</h4>
        <p>Para esclarecer dúvidas, pedir mais detalhes sobre os produtos da Varais Estilos ou enviar sugestões à nossa equipe, entre em contato conosco. Estamos sempre prontos para atendê-lo e retornaremos sua mensagem o mais breve possível.</p>
      </div>

      <div class="col s-2 m-2 l-4">
        <h4 class="page-title">Endereço</h4>
        <address class="address -footer business-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="streetAddress">Avenida Goitacazes qd 42 Lt 40,  <br> Jardim Eldorado</span><br>
          <span itemprop="postalCode">74993-090</span><br>
          <span itemprop="addressLocality">Aparecida de Goiânia - GO</span>
        </address>
      </div>

      <div class="col s-2 m-2 l-4">
        <h4 class="page-title">Contatos</h4>
        <ul class="list -links">
          <li><a href="tel:+00000000" itemprop="telephone">(62) 3280-1263</a></li> 
          <li><a href="tel:+00000000" itemprop="telephone">(62) 98243-9028</a></li>
          <li class="text-medium"><a href="mailto:contato@varaisestilos.com.br" itemprop="email">contato@varaisestilos.com.br</a></li>
        </ul>
      </div>
    </div>

    <section class="google-map gutter-l">
      <div class="col s-1 m-1 l-2">
        <div class="media -anime">




          <div class="ratio ratio-map ratio-16by9"></div>
          <div class="content content-photo" id="contactMap" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4541.927093735602!2d-49.218558150892356!3d-16.81195293493086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDQ4JzMzLjAiUyA0OcKwMTMnMDguMiJX!5e0!3m2!1spt-BR!2sbr!4v1484331631660" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <hr class="hidden-l col s-1 m-1 l-2" style="opacity:0;">
      <div class="col s-1 m-1 l-2">
        <?php require 'form-contato.php'; ?>
      </div>
    </section>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
