<?php
// Template Name: Perguntas Frequentes
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="perguntas-frequentes">
  <div class="container">


    <div class="perguntas-frequentes__conteudo">

      <div class="perguntas-frequentes__texto">

        <div class="perguntas-frequentes__titulos">
          <h4 class="perguntas-frequentes__titulo1">PERGUNTAS</h4>
          <h3 class="perguntas-frequentes__titulo2">FREQUENTES</h3>
        </div>

        <div class="perguntas-frequentes__lista">

          <div id="accordion">
            <h3>Qual é o diferencial do Ápice Hospital?</h3>
            <div>
              <p>A resolutividade é o rápido e efetivo diagnóstico dos
                pacientes, assim como a subsequente ação dirigida de
                saúde, fornecendo tratamento adequado ou o devido
                seguimento a casos de maior complexidade que devem
                ser encaminhados às unidades de saúde avançadas ou
                ao SUS para tratamentos, a exemplo de hemodiálise,
                quimioterapia, cirurgias complexas etc.</p>
            </div>

            <h3>É permitido fumar nas dependências do Hospital?</h3>
            <div>
              <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

            <h3>Como posso enviar um elogio, reclamação
              ou sugestão ao Hospital?</h3>
            <div>
              <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

            <h3>Onde o Hospital está localizado?</h3>
            <div>
              <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>

          </div>


        </div>

      </div>

      <div class="perguntas-frequentes__img">
        <div class="perguntas-frequentes__imagens-banner">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/perguntas-frequentes-min.png" alt="Perguntas frequentes">
        </div>
      </div>

    </div>


  </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>