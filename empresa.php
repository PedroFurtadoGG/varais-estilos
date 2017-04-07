<?php require 'head.php'; ?>

<body id="body" class="page -empresa" itemscope itemtype="http://schema.org/WebPage">
  <!--[if lt IE 8]><div class="grid container wrapper browserupgrade" id="browserupgrade" role="dialog" tabindex="-100"><p>Para melhorar a sua visita ao nosso site, por favor, <a class="link" href="http://browsehappy.com/" target="_blank">atualize o seu navegador</a>. Sem preocupações<button id='closebrowserupgrade' title="Fechar" onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>×</span></p></div><![endif]-->
  <?php require 'header.php'; ?>

  <!--<section class="hero -single -empresa">
    <figure class="media fade-in">
      <span class="ratio"></span>
      <img class="content -photo" style="background-image: url(img/empresa-banner.jpg)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Banner">
      <figcaption class="content -middle -caption">
        <div class="grid">
          <h2 class="page-title -xlarge">Excelência em distribuição de varais em Goiânia</h2>
        </div>
      </figcaption>
    </figure>
  </section>-->

  <main id="mainContent" class="main-content grid" itemscope itemprop="mainContentOfPage" role="main">
  <?php 
	/*
	1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
	2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
	3 - $limit = NULL - LIMITE DE REGISTROS; 
	4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
	5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
	*/
	$sql = Cms::conteudoPrincipal(1, NULL, 1, 'ORDER BY ctn.listorder ASC');
	$row = mysql_fetch_assoc($sql);
	
	?>
    <article class="article empresa col s-1 m-1 l-4x3 section">
      <p><?php echo utf8_encode($row['texto']); ?></p>
    </article>
    <hr class="col s-1 m-1 l-1">

    <ol class="list-vmv gutter-l section col">
	  <?php 
		/*
		1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
		2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
		3 - $limit = NULL - LIMITE DE REGISTROS; 
		4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
		5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
		*/
		$sql1 = Cms::conteudoPrincipal(1, NULL, 1, NULL, 'AND ctn.codconteudo = 2');
		$row1 = mysql_fetch_assoc($sql1);
	
		?>
      <!--<li class="vmv col s-1 m-3 l-3">
        <h4 class="page-title">Visão</h4>
        <p><?php echo utf8_encode($row1['texto']); ?></p>
      </li>
<?php 
		/*
		1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
		2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
		3 - $limit = NULL - LIMITE DE REGISTROS; 
		4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
		5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
		*/
		$sql2 = Cms::conteudoPrincipal(1, NULL, 1, NULL, 'AND ctn.codconteudo = 3');
		$row2 = mysql_fetch_assoc($sql2);
	
		?>
      <li class="vmv col s-1 m-3 l-3">
        <h4 class="page-title">Missão</h4>
        <p><?php echo utf8_encode($row2['texto']); ?></p>
      </li>
<?php 
		/*
		1 - $cod (obrigatório) = CODIGO DA PÁGINA CRIADA;
		2 - $slug = NULL - QUANDO PASSAR ALGUM PARAMETRO SLUG; 
		3 - $limit = NULL - LIMITE DE REGISTROS; 
		4 - $order = NULL - ORDENAÇÃO DOS REGISTROS; (EX: 'ORDER BY ctn.listorder ASC') => ctn.listorder = ordenação na listagem do ctn; 
		5 - $condicao = NULL - CONDIÇÃO SQL; (EX: 'AND ctn.titulo = "teste"');
		*/
		$sql3 = Cms::conteudoPrincipal(1, NULL, 1, NULL, 'AND ctn.codconteudo = 4');
		$row3 = mysql_fetch_assoc($sql3);
	
		?>
      <li class="vmv col s-1 m-3 l-3">
        <h4 class="page-title">Valores</h4>
        <p><?php echo utf8_encode($row3['texto']); ?></p>
      </li>-->
    </ol>
  </main>
  <?php require 'footer.php'; ?>
</body>

</html>
