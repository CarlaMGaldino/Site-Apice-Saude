<?php
// Template Name: Ápice Odontologia
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="odontologia">
  <div class="container">

    <div class="odontologia-conteudo">

      <div class="odontologia-texto">
        <h4 class="odontologia-texto__titulo1">Ápice</h4>
        <h3 class="odontologia-texto__titulo2">ODONTOLOGIA</h3>
        <p class="odontologia-texto__paragrafo1">Nosso setor de Odontologia está totalmente equipado para receber você. A equipe dispõe de ótimos profissionais para ajudar no que você precisar.</p>
        <div class="odontologia-texto__lista-box">

          <ul class="odotologia-texto__lista">

            <li class="odotonlogia-texto__lista-li"> <strong>Serviços:</strong> </li>
            <li class="odotonlogia-texto__lista-li">Clínica Geral</li>
            <li class="odotonlogia-texto__lista-li">Ortodontia (aparelho) </li>
            <li class="odotonlogia-texto__lista-li">Estética (clareamento e outros) </li>
            <li class="odotonlogia-texto__lista-li">Endodontia (tratamento de canal) </li>
            <li class="odotonlogia-texto__lista-li">Cirurgia </li>
            <li class="odotonlogia-texto__lista-li">Implantes Dentários </li>
            <li class="odotonlogia-texto__lista-li">Próteses</li>
            <li class="odotonlogia-texto__lista-li">Odontopediatria.</li>
            <li class="odotonlogia-texto__lista-li_2"> <strong>Agendamento:</strong></li>
            <li class="odotonlogia-texto__lista-li">São João de Meriti: 3668-3113</li>
            <li class="odotonlogia-texto__lista-li">Guadalupe: 3106-5793</li>
          </ul>
        </div>

      </div>
    </div>
    <div class="odontologia-img">
      <div class="odontologia-img__imagem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odonto-min.jpg" alt="Profissional odontologia">
      </div>
    </div>



  </div>
</section>



<section class="odontologia-slide">
  <div class="container">
    <div class="odontologia-slide__box">
      <div class="apice-slider-for slider-for">
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-01-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-02-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-03-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-04-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-05-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-01-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-02-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-03-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-04-min.jpg" alt=""></div>
        <div class="hospital-conteudo__box4-forslide--img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-full-05-min.jpg" alt=""></div>
      </div>
      <ul class="apice-slider-nav slider-nav">
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-01-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-02-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-03-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-04-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-05-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-01-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-02-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-03-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-04-min.jpg" alt=""></li>
        <li class="hospital-conteudo__home-slide-g"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/odontologia-05-min.jpg" alt=""></li>
      </ul>
    </div>
  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>