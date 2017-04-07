<?php require 'head.php'; ?>
<body id="body" class="page -produto" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php require 'header.php'; ?>
   

  <main id="mainContent" class="main-content grid section -large" itemscope itemprop="mainContentOfPage" role="main">

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
    <div class="produto -main col s-1 m-1 l-4x3" itemscope itemtype="http://schema.org/Product">
      <header class="cf gutter-m">
        <figure class="media -anime col s-2 m-2 l-2">
          <span class="ratio -product"></span>
		  <?php
			/*	1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
				2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
				3 - $limit = NULL - LIMITE DE REGISTROS; 
				4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
				5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
		*/
		

				$slug = $_GET['slug'];
				$sql = Cms::conteudoPrincipal(2, $slug);
				$row = mysql_fetch_array($sql);
		?>
          <div class="content -thumbnail" >
            <img class="thumbnail -product" itemprop="image" src="<?php echo $row['dir'].$row['img']; ?>" alt="<?php echo utf8_encode($row['titulo']); ?>" />
          </div>
        </figure>
        <div class="produto-ifo c-grey col s-2 m-2 l-2"> 
		
          <h1 class="name -product c-brand" itemprop="name"><?php echo utf8_encode($row['titulo']); ?></h1>
          <ol class="list -styled">
            <li>Resistência a variações de temperatura</li>
            <li>Resistência mecânica e abrasiva</li>
            <li>Qualidade no acabamento</li>
            <li>Facilidade para limpeza e manutenção</li>
          </ol>
          <hr>
          <div class="rating">
            <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
            <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
            <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
            <i class=" fa fa-star-o img-holder" aria-hidden="true" role="img"></i>
            <i class=" fa fa-star-o img-holder" aria-hidden="true" role="img"></i>
            <!--<small class="rating-count">17 Avaliacoes</small>-->
          </div>
          <ul class="social-share -product">
            <li class="social-share-item">
              <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
            </li>
            <li class="social-share-item">
              <div class="g-plus" data-action="share" data-annotation="bubble"></div>
            </li>
          </ul>

          <div id="fb-root"></div>
          <script type="text/javascript" async defer>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
          </script>
          <script src="https://apis.google.com/js/platform.js" async defer>
            {lang: 'pt-BR'}
          </script>
        </div>
      </header>

      <div class="product-list-details" data-collapse-list role="tablist">
        <h3 class="page-title" data-target="listDetails">Detalhes do Produto <i class="fa fa-angle-down" role="image"></i></h3>
        <section class="product-details article in" id="listDetails" data-collapse>
          <p><?php echo utf8_encode($row['texto']); ?></p>
        </section>

        <!--<h3 class="page-title" data-target="listReview">Avaliações <i class="fa fa-angle-down" role="image"></i></h3>
        <section class="product-review in" id="listReview" data-collapse>
          <ul class="list-product-review">
            <?php for($i=0; $i<3; $i++) { ?>
            <li class="product-review-item">
              <h6 class="review-title">Fulano e Tal</h6>
              <figure class="rating">
                <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
                <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
                <i class=" fa fa-star img-holder" aria-hidden="true" role="img"></i>
                <i class=" fa fa-star-o img-holder" aria-hidden="true" role="img"></i>
                <i class=" fa fa-star-o img-holder" aria-hidden="true" role="img"></i>
              </figure>
              <p class="review-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </li>
            <?php } ?>
          </ul>
        </section>-->

        <!--<h3 class="page-title" data-target="listAvalicao">Avaliar Produto <i class="fa fa-angle-down" role="image"></i></h3>
        <section class="product-Avalicao in" id="listAvalicao" data-collapse>
          <form class="form form-avalicao c-brand" id="formAvalicao" action="" method="" accept-charset="utf-8">
            <fieldset class="rating avaliacao cf" name="avaliarProduto">
    					<input class="invisible" type="radio" id="avaliacao5" name="rating" value="5"/>
    					<label class="rate fa fa-star-o img-holder" for="avaliacao5"></label>
    					<input class="invisible" type="radio" id="avaliacao4" name="rating" value="4"/>
    					<label class="rate fa fa-star-o img-holder" for="avaliacao4"></label>
    					<input class="invisible" type="radio" id="avaliacao3" name="rating" value="3"/>
    					<label class="rate fa fa-star-o img-holder" for="avaliacao3"></label>
    					<input class="invisible" type="radio" id="avaliacao2" name="rating" value="2"/>
    					<label class="rate fa fa-star-o img-holder" for="avaliacao2"></label>
    					<input class="invisible" type="radio" id="avaliacao1" name="rating" value="1"/>
    					<label class="rate fa fa-star-o img-holder" for="avaliacao1"></label>
  					</fieldset>
            <div class="input-group">
              <label for="nome">Digite seu nome</label>
              <input class="input -text" id="nome" name="nome" type="text" aria-required="true">
            </div>
            <div class="input-group">
              <label for="mensagem">Faça uma avaliação: </label>
              <textarea class="input -textarea" id="mensagem" name="mensagem" aria-required="true"></textarea>
            </div>
            <div class="actions">
              <button id="btnSubmit" class="btn -primary" type="submit">Avaliar</button>
            </div>
          </form>
        </section>-->
      </div>
    </div>

    <hr class="col s-1 m-1 l-1">

    <section class="produtos -relacionados col s-1 m-1 l-1" role="complementary">
      <h3 class="page-title">Produtos relacionados</h3>
      <ul class="list-produtos gutter-l grid-inline">
         <?php
				/*	1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
					2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
					3 - $limit = NULL - LIMITE DE REGISTROS; 
					4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
					5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
				*/
		
		
				$sql2 = Cms::conteudoPrincipal(2, NULL, 4, 'ORDER BY RAND()');
				while($row2 = mysql_fetch_assoc($sql2)){
			
		
			?>
        <li class="col s-2 m-4 l-4">
          <a class="produto -item" href="<?php echo URL.'produto/'.$row2['slug'].'/'; ?>" itemscope itemtype="http://schema.org/Product">
			  <div class="media">
				<div class="ratio"></div>
				<div class="content -thumbnail">
				  <img class="thumbnail -produto" itemprop="image" src="<?php echo $row2['dir'].$row2['img']; ?>" alt="<?php echo utf8_encode($row2['titulo']); ?>" />
				</div>
			  </div>
			<h5 class="title name" itemprop="name"><?php echo utf8_encode($row2['titulo']); ?></h5>
		  </a>

        </li>
				<?php }?>
      </ul>
    </section>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
