<footer id="globalFooter" class="global-footer bc-brand" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

  <!--
  <div class="footer-content footer-nav section" role="navigation"></div>
  <div class="footer-content footer-social section" role="navigation"></div>
  <div class="footer-content footer-analytics section" role="complementary"></div>
  <div class="footer-content footer-business section" itemscope itemtype="http://schema.org/LocalBusiness"></div>
  <div class="footer-content footer-copyright section"></div>
  -->

  <div class="grid section -p -large">
    <div class="footer-content footer-navigation" role="navigation">
      <ul class="list -menu -inline -alt list-footer -navigation">
        <?php require 'nav.php'; ?>
      </ul>
    </div>
    <hr>
    <div class="footer-content footer-business" itemscope itemtype="http://schema.org/LocalBusiness">
      <div class="gutter-m">
        <div class="col s-1 m-3 l-6">
          <a class="brand-holder -footer fade-in" href="index.php">
            <img class="logo footer-logo" src="<?php echo URL; ?>img/logo-white.png" alt="Logo" width="128">
          </a>
        </div>

        <div class="col s-2 m-3 l-6">
          <h5>Endereço</h5>
          <address class="address -footer business-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Avenida Goitacazes qd 42 Lt 40, <br>Jardim Eldorado</span><br>
            <span itemprop="postalCode">74993-090</span><br>
            <span itemprop="addressLocality">Aparecida de Goiânia - GO</span>
          </address>
        </div>

        <div class="col s-2 m-3 l-6x2">
          <h5>Contatos</h5>
          <ul class="list -links">
            <li><a href="tel:+00000000" itemprop="telephone">(62) 3094-4504</a></li>
            <li><a href="tel:+00000000" itemprop="telephone">(62) 3280-1263</a></li>
            <li><a href="tel:+00000000" itemprop="telephone">(62) 98243-9028</a></li>
            <li class="text-medium"><a href="mailto:varaisestilos@varaisestilos.com.br" itemprop="email">varaisestilos@varaisestilos.com.br</a></li>
          </ul>
        </div>

        <div class="col s-1 m-1 l-6x2">
          <?php require 'form-newsletter.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-content footer-copyright">
    <div class="grid">
      <small class="copyright"><?php echo date("Y"); ?> © <strong itemprop="copyright">Varais Estilos</strong> </small></small>
      <span class="dev-author">
        <span class="invisible">Desenvolvido por</span>
        <a class="_ml-s" href="http://nextsites.com.br" target="_blank" title="Desenvolvido por Next, Solução para Web"><img alt="Logo, Next Solução para Web" src="<?php echo URL; ?>img/dev-logo.png" width="64"></a>
      </span>
    </div>
  </div>
</footer>

<!--<script id="loadCSS" type="text/javascript">
  loadCSS("css/style.min.css", document.getElementById("loadcss"));
</script>-->



<script id="loadJS" type="text/javascript" charset="UTF-8">
  (function() {
    //carregar um ficheiro e assim que terminar carregar o outro.
    loadJS("<?php echo URL; ?>js/scripts.min.js", function() {
      fadeIn(document.getElementById("html"));
    });
  }());
  //esconder o conteúdo e  mostrar apos carregado os scripts
  function fadeIn(el) {
    el.style.opacity = 0;
    var tick = function() {
      el.style.opacity = +el.style.opacity + 0.1;
      if (+el.style.opacity < 1) {
        (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
      }
    };
    tick();
  }
</script>
