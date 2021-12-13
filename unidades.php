<?php
// Template Name: Unidades
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="unidades">
  <div class="container">
    <div class="unidades-conteudo">


      <div class="unidades-conteudo__texto">
        <p class="unidades-conteudo__sub-titulo">Grupo Ápice Saúde</p>
        <h3 class="unidades-conteudo__titulo">Unidades</h3>
      </div>

      <div class="unidades-conteudo-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/mapa-unidades-page.png" alt="Mapa Localização">
      </div>


    </div>
  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>