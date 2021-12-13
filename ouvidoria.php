<?php
// Template Name: Ouvidoria
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="ouvidoria-page">
  <div class="container">

    <div class="ouvidoria-page__conteudo">
      <div class="ouvidoria-page__conteudo-texto">
        <h3 class="ouvidoria-page__conteudo-titulo"><?php the_title(); ?></h3>
        <p class="ouvidoria-page__conteudo-texto1">Elogios, dúvidas, sugestões e reclamações, <br> envie um e-mail: <br> <strong>ouvidoria@apicehd.com.br</strong></p>
      </div>
      <div class="ouvidoria-page__conteudo-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/ouvidoria.svg" alt="Icone Ouvidoria">
      </div>
    </div>
  </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>