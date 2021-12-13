<?php
// Template Name: Beauty Concept
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="beauty">
  <div class="container">

    <div class="beauty-conteudo">

      <div class="beauty-conteudo__texto">
        <h4 class="beauty-conteudo__titulo">BEAUTY</h4>
        <h3 class="beauty-conteudo__titulo">CONCEPT</h3>
        <p class="beauty-conteudo__paragrafo1">Beauty concept é um conceito de beleza integral, que aborda os tratamentos dermatológicos para todas as camadas daface, desde as mais superficiais como a pele, passando pelos coxins de gordura, músculos da expressão facial, até o osso.
        </p>
        <p class="beauty-conteudo__paragrafo1">Colocamos isso em prática através da realização da Beautification, que consiste no embelezamento facial global, visando criar uma harmonia na face, deixando-a com aspecto mais atraente, leve e menos cansada. A principal ideia é realçar as características naturais do paciente, destacando os pontos mais favoráveis e suavizando aqueles menos favoráveis, além de minimizar assimetrias existentes.
        </p>

        <p class="beauty-conteudo__paragrafo1">O objetivo é oferecer um resultado natural, que valorize a sua beleza genuína e torne o seu semblante mais suave e harmonioso.
        </p>

        <p class="beauty-conteudo__paragrafo1">Incluir carrossel de imagens desse conceito de beleza.
        </p>

      </div>

      <div class="beauty-conteudo__img">
        <div class="beauty-conteudo__img-imagem">

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-min.png" alt="Tratamento na pele">

        </div>
      </div>

    </div>
  </div>

</section>

<section class="beauty-slide">

  <div class="container">
    <div class="beauty-slide__box">
      <div class="apice-slider-for slider-for">
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-01-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-02-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-03-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-04-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-05-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-01-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-02-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-03-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-04-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-full-05-min.jpg" alt=""></div>
      </div>
      <ul class="apice-slider-nav slider-nav">
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-01-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-02-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-03-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-04-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-05-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-01-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-02-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-03-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-04-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/beauty-05-min.jpg" alt=""></li>
      </ul>
    </div>
  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>