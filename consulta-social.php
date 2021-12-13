<?php
// Template Name: Consulta Social
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="consulta-social">
  <div class="container">

    <div class="consulta-social__banner">

      <div class="consulta-social__texto">
        <h3 class="consulta-social__titulo">CONSULTA SOCIAL</h3>
        <p class="consulta-social__paragrafo1">O Hospital Ápice lançou em agosto de 2019 o
          projeto Consulta Social. Esse projeto visa atender preferencialmente crianças que residam no entorno de São João de Meriti e Pavuna, com renda familiar até dois salários mínimos, podendo incluir demais pessoas em caso de disponibilidade de vagas.
        </p>
        <p class="consulta-social__paragrafo2">As consultas serão oferecidas na especialidade de Pediatria (6 aos 12 anos), sendo abertas 15 vagas para cada especialidade, aos domingos, das 7:30 às 10:30,
          na Unidade de São João de Meriti.
        </p>
        <p class="consulta-social__paragrafo3">Após a análise prévia dos inscritos, a Assistência
          Social do Hospital entrará em contato para o agendamento da consulta. </p>

      </div>

      <div class="consulta-social__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/consulta-social-min.png" alt="Profissional da saúde">
      </div>

    </div>

  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>