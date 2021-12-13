<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ápice Saúde</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="scss/style.scss">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script src="https://kit.fontawesome.com/e87723997d.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <main>

    <header class="menu-nav">
      <div class="container">
        <div class="menu-nav__box">
          <div class="menu-nav__logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/apice saude logo-0001.svg" alt="Logo Ápice Saúde">
          </div>

          <div class="menu-nav__lista">

            <nav>
              <ul class="menu-nav__lista-box2">
                <li class="menu-nav__lista-box2-item">
                  <a href="">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li class="menu-nav__lista-box2-item">
                  <a href="">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="menu-nav__lista-box2-item">
                  <a href="">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="menu-nav__lista-box2-item">
                  <a href="">
                    <i class="fab fa-whatsapp"></i>Agendamento: 3668-3131 / 99457-2921
                  </a>
                </li>
                <a class="menu-nav__lista-box2-item__link" href="">Ouvidoria</a>
                <a class="menu-nav__lista-box2-item__link2" href=""><i class="fas fa-search"></i> Pesquisar</a>
              </ul>

            </nav>


            <?php
            $args = array(
              'menu' => 'principal',
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'menu_class' => 'menu-nav__lista-box1',
              'container_class' => 'menu-nav__lista-box1'
            );
            wp_nav_menu( $args );
            ?>

            <!-- <nav>
              <ul class="menu-nav__lista-box1">
                <a href="">
                  <li class="menu-nav__lista-box1-item">Home</li>
                </a>
                <a href="">
                  <li class="menu-nav__lista-box1-item">Quem somos</li>
                </a>
                <a href="">
                  <li class="menu-nav__lista-box1-item">Ápice Hospita</li>
                </a>
                <a href="">
                  <li class="menu-nav__lista-box1-item">Beauty Concept</li>
                </a>
                <a href="">
                  <li class="menu-nav__lista-box1-item">Odonto Ápice</li>
                </a>
                <a href="">
                  <li class="menu-nav__lista-box1-item">Laboratório</li>
                </a>
              </ul>
            </nav> -->
          </div>
        </div>
      </div>
    </header>