<?php
// Template Name: Código Ética e Conduta
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="codigo-etica">
  <div class="container">
    <div class="codigo-etica__box-principal">
      <div class="codigo-etica__conteudo-box">
        <div class="codigo-etica__conteudo">
          <h3>CÓDIGO ÉTICA
            E CONDUTA</h3>
        </div>

        <div class="codigo-etica__lista">
          <ul>
            <a href="">
              <li class="codigo-etica__lista-li">Ética e Conduta no Trabalho</li>
              <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/icone-download.svg" alt="Download"></span>
            </a>
            <a href="">
              <li class="codigo-etica__lista-li">Código de Ética e Conduta</li>
              <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/icone-download.svg" alt="Download"></span>
            </a>
            <a href="">
              <li class="codigo-etica__lista-li">Guia do Beneficiário</li>
              <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/icone-download.svg" alt="Download"></span>
            </a>
          </ul>
        </div>

      </div>

      <div class="codigo-etica__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/codigo-etica-min.png" alt="Imagem ilustrativa de download">
      </div>
    </div>
  </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>