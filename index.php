<?php require 'head.php'; ?>
<body id="body" class="page -home" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php require 'header.php'; ?>

  <section class="hero -single -home slider">
   <figure class="media">
      <span class="ratio"></span>
      <img class="content -photo" style="background-image: url(img/home-banner1.jpg)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Banner">
      <figcaption class="content -middle -caption">
        <div class="grid">
          
        </div>
      </figcaption>
    </figure>


    <figure class="media">
      <span class="ratio"></span>
      <img class="content -photo" style="background-image: url(img/home-banner.jpg)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Banner">
      <figcaption class="content -middle -caption">
        <div class="grid">
          <h1 class="page-title -large">Produtos com durabilidade, <br>praticidade e resistência.</h1>
        </div>
      </figcaption>
    </figure>
<figure class="media">
      <span class="ratio"></span>
      <img class="content -photo" style="background-image: url(img/home-banner2.jpg)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Banner">
      <figcaption class="content -middle -caption">
        <div class="grid">
        
        </div>
      </figcaption>
    </figure>


  
  </section>

  <main id="mainContent" class="main-content" itemscope itemprop="mainContentOfPage" role="main">

    <div class="produtos -home grid section -large">
      <aside class="aside aside-menu col s-1 m-1 l-4">
        <header class="aside-nav-header cf">
          <a class="btn-toggle-menu" data-href="#asideNav" role="button"><span class="fa fa-bars c-white" role="image"></span></a>
          <h3 class="aside-nav-header--title">Categorias</h3>
        </header>
        <div class="title -aside hidden-s hidden-m">Nossos produtos</div>

        <nav class="aside-nav" id="asideNav" role="navigation">
          <ul class="list -menu" role="menu">
            <?php 			
			$sqlcat = Cms::categoria(2);
			while($cat = mysql_fetch_array($sqlcat)) {
				?>
            <li class="option -brand" itemprop="name" role="menuitem">
              <a href="<?php echo URL.'produtos/'.$cat['slug'].'/'; ?>" itemprop="url"><?php echo utf8_encode($cat['categoria']); ?></a>
            </li>
            <?php } ?>
          </ul>
        </nav>
      </aside>

      <section class="col s-1 m-1 l-4x3">
        <h3 class="invisible">Lista de produtos</h3>
        <ul class="list-produtos gutter-l grid-inline">
          <?php 						
			  if(isset($_GET['slug']) && $_GET['slug'] != ''){								
				  $condicao = NULL;				
				  if(isset($_POST['search'])){					
					$condicao = "AND ctn.titulo LIKE '%".$_POST['search']."%'";				
				  }								
				  $sql = Cms::conteudoCategoria(2, $_GET['slug'], NULL, $condicao);			
			  }else{				
				  $condicao = NULL;				
				  if(isset($_POST['search'])){					
					$condicao = "AND ctn.titulo LIKE '%".$_POST['search']."%'";				
				  }								
				  $sql = Cms::conteudoPrincipal(2, NULL, 9, 'ORDER BY RAND()', $condicao);			
			  }		  			
			  while($prd = mysql_fetch_array($sql)) {			
		  ?>
          <li class="col s-2 m-3 l-3">
            <a class="produto -item" href="<?php echo URL.'produto/'.$prd['slug'].'/'; ?>" itemscope itemtype="http://schema.org/Product">
				  <div class="media">
					<div class="ratio"></div>
					<div class="content -thumbnail">
					  <img class="thumbnail -produto" itemprop="image" src="<?php echo $prd['dir'].$prd['img']; ?>" alt="<?php echo utf8_encode($prd['titulo']); ?>"/>
					</div>
				  </div>
				  <h5 class="title name" itemprop="name"><?php echo utf8_encode($prd['titulo']); ?></h5>
			</a>
          </li>
          <?php } ?>
        </ul>
      </section>
    </div>

    <div class="parallax -home" data-stellar-background-ratio="0.4">
      <div class="grid section -xlarge fade-in">
        <article class="article fade-in">
          <h2 class="page-title -line">Varais estilos</h2>
          <p>A Carisma Box e Decorações, desde 1997 atua na fabricação de Varais para Roupas, trabalhando com afinco para produzir a melhor mercadoria, a fim de satisfazer as necessidades de seus clientes.</p>
          <p>Instalada estrategicamente no Distrito Agro Industrial do município de Aparecida de Goiânia, a empresa funciona em uma área repleta de indústrias e comércios, facilitando, assim, o percurso dos interessados.</p>
          <p>Contamos com equipe especializada e matéria prima de excelente qualidade. A crescente demanda do mercado, exige que novos investimentos em tecnologias e aprimoramento dos produtos sejam constantes.</p>
          <p>Os Varais Estilos são produtos duráveis, práticos e resistentes.</p>
        </article>
      </div>
    </div>

    <div class="contato -home grid section -large">
      <div class="col s-1 m-2 l-2">
        <h2 class="page-title">Fale conosco</h2>
        <table class="table-contato">
          <tr>
            <td><i class="fa fa-2x fa-phone img-holder c-contrast"></i></td>
            <td>
              <span class="_d-b"><a class="link" href="tel:+00000000" itemprop="telephone">(62) 3094-4504</a></span>
              <span class="_d-b"><a class="link" href="tel:+00000000" itemprop="telephone">(62) 3280-1263</a></span>
            </td>
          </tr>
          <tr>
            <td><i class="fa fa-2x fa-whatsapp img-holder c-contrast"></i></td>
            <td>
              <span class="_d-b"><a class="link" href="tel:+00000000" itemprop="telephone">(62) 98569-5452</a></span>
            </td>
          </tr>
          <tr>
            <td><i class="fa fa-2x fa-envelope-o img-holder c-contrast"></i></td>
            <td>
              <span class="_d-b"><a class="link" href="mailto:contato@varaisestilos.com.br" itemprop="email">contato@varaisestilos.com.br </a></span>
            </td>
          </tr>
        </table>
      </div>
      <div class="col s-1 m-2 l-2">
        <p class="caption">Se deseja maiores informações, ou quer esclarecer suas dúvidas, entre em contato conosco! Teremos prazer em atendê-lo!</p>
        <?php require 'form-contato.php'; ?>
      </div>
    </div>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
