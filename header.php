<header id="globalHeader" class="global-header grid" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <h1 class="brand-holder fade-in" itemscope itemtype="http://schema.org/Organization">
      <a href="<?php echo URL;?>" itemprop="url">
        <img class="logo -main" src="<?php echo URL;?>img/logo.png" alt="Logo, Varais Estilos" itemprop="image">
        <span class="invisible" itemprop="name">Varais Estilos</span>
      </a>
    </h1>
    <a class="btn-toggle-menu hidden-l" href="#mobileMenu" id="" role="button">
      <span class="invisible">Abrir o Menu Mobile</span>
      <i class="fa fa-bars" aria-hidden="true" role="img"></i>
    </a>

    <section class="main-nav mobile-menu bc-brand" id="mobileMenu" data-bc="bc-primary" role="navigation">
      <header class="mobile-menu--header">
        <h3 class="invisible">Menu mobile</h3>
        <a class="btn-toggle-menu btn-toggle-menu-close" href="#mobileMenu" role="button"><i class="fa fa-times c-white" role="img"></i></a>
        <span class="mobile-menu--title truncate">Varais Estilos</span>
      </header>

      <nav id="mobileMenuContainer" class="mobile-menu--container">
        <ul class="list -menu -inline main-navigation" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
          <?php require 'nav.php'; ?>
          <li class="menu-item--contatos" itemprop="name" role="menuitem">
            <a href="tel:+00000000" itemprop="telephone"><i class="img-holder fa fa-phone"></i>(62) 3280-1263 | (62) 98243-9028</a>
          </li>
        </ul>
      </nav>
      <footer class="mobile-menu--footer text-center"></footer>
    </section>
</header>
