<?php require 'head.php'; ?>
<body id="body" class="page -produtos" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php require 'header.php'; ?>

  <main id="mainContent" class="main-content grid section -large" itemscope itemprop="mainContentOfPage" role="main">
    <div class="produtos -produtos">
      <aside class="aside aside-menu col s-1 m-1 l-4">
        <header class="aside-nav-header cf">
          <a class="btn-toggle-menu" data-href="#asideNav" role="button"><span class="fa fa-bars c-white" role="image"></span></a>
         
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
					
					$sql = Cms::conteudoCategoria(2, $_GET['slug']);
										
				}else{
					
					$condicao = NULL;
					if(isset($_POST['search'])){
						$condicao = "AND ctn.titulo LIKE '%".$_POST['search']."%'";
					}
					$sql = Cms::conteudoPrincipal(2, NULL, 12, 'ORDER BY RAND()', $condicao);
				}
				while($prod = mysql_fetch_array($sql)) {
		    ?>
          <li class="col s-2 m-3 l-3">
            <a class="produto -item" href="<?php echo URL.'produto/'.$prod['slug'].'/'; ?>" itemscope itemtype="http://schema.org/Product">
				  <div class="media">
					<div class="ratio"></div>
					<div class="content -thumbnail">
					  <img class="thumbnail -produto" itemprop="image" src="<?php echo $prod['dir'].$prod['img']; ?>" alt="<?php echo utf8_encode($prod['titulo']); ?>l" />
					</div>
				  </div>
				  <h5 class="title name" itemprop="name"><?php echo utf8_encode($prod['titulo']); ?></h5>
			</a>
          </li>
          <?php } ?>
        </ul>
      </section>
    </div>
  </main>

  <?php require 'footer.php'; ?>
</body>

</html>
