<?php
// Template Name: Laboratório
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="laboratorio">

  <div class="container">


    <div class="laboratorio-conteudo">

      <div class="laboratorio-texto">
        <h3 class="laboratorio-titulo">LABORATÓRIO</h3>
        <p class="laboratorio-paragrafo1">Ápice LAB Análises Laboratoriais</p>
        <p class="laboratorio-paragrafo2">Nosso laboratório está totalmente equipado para receber você. A equipe dispõe de ótimos profissionais para ajudar no que você precisar. Realizamos mais de 2.000 exames laboratoriais, entre eles:</p>

        <ul>
          <li class="laboratorio-lista">Cálcio</li>
          <li class="laboratorio-lista">Creatinina</li>
          <li class="laboratorio-lista">Glicemia em jejum</li>
          <li class="laboratorio-lista">Potássio</li>
          <li class="laboratorio-lista">Sódio</li>
          <li class="laboratorio-lista">Ureia </li>
          <li class="laboratorio-lista">Proteínas totais e frações </li>
          <li class="laboratorio-lista">Provas de função hepática </li>
          <li class="laboratorio-lista">Lipidograma</li>
          <li class="laboratorio-lista">T4 livre</li>
          <li class="laboratorio-lista">TSH Ultra Sensível</li>
          <li class="laboratorio-lista">Hemoglobina Glicosilada </li>
          <li class="laboratorio-lista">Hemograma completo </li>
          <li class="laboratorio-lista">Vitamina B12</li>
        </ul>


      </div>

      <div class="laboratorio-img">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/laboratorio-min.png" alt="Exames laboratoriais">
      </div>


    </div>

  </div>

</section>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>