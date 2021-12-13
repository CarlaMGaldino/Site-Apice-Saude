<?php
// Template Name: Corpo Clínico
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="corpo-clinico">
  <div class="container">

    <div class="corpo-clinico-clinico__conteudo">

      <div class="corpo-clinico__texto">
        <h3 class="corpo-clinico__titulo">CORPO CLÍNICO</h3>
        <p class="corpo-clinico__paragrafo1">O Grupo Ápice Saúde possui uma rede com mais de 90 médicos capacitados para melhor atender você em nossas três Unidades em São João de Meriti e na cidade do Rio de Janeiro.</p>
      </div>


      <div class="corpo-clinico__imagens">

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-1-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dr. André <br> Caldara</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Oftalmologista e <br> Diretor Responsável <br>do Hospital Ápice</p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-2-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dra. Luciana <br>Saraiva</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Dermatologista</p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-3-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dr. Bruno <br> Vargas</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Ortopedista </p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-4-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dra. Fernanda <br> Saraiva</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Gastroenterologista</p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-5-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dr. Christiano <br> de Assis</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Otorrinolaringologista</p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-6-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dra. Norma <br> Ferreira</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Pneumologista </p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-7-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dr. David <br> Nelson</h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Pediatra</p>
        </div>

        <div class="corpo-clinico__img">
          <div class="corpo-clinico__imagem">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-corpo-clinico/img-clinico-8-min.jpg" alt="Corpo Clinico">
            <h2 class="corpo-clinico__img-titulo">Dra. Shelly <br> Mogami </h2>
          </div>
          <p class="corpo-clinico__img-paragrafo">Ginecologista </p>
        </div>


      </div>

      <div class="corpo-clinico__button">
        <a href="" class="corpo-clinico__link">Ver mais</a>
      </div>

    </div>

  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>