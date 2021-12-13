<?php
// Template Name: Terapias
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="nossos-servicos__page">

  <div class="container">
    <div class="nossos-servicos__box1" id="terapias-banner1__img">


      <div class="nossos-servicos__box1-texto">
        <h3 class="nossos-servicos__box1-titulo">NOSSOS SERVIÇOS</h3>
      </div>

      <div class="nossos-servicos__box2">

        <div class="nossos-servicos__imagem-conteudo">
          <div class="nossos-servicos__imagem-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/foto1-home-conheca-min.png" alt="Profissional saúde">
            <h4 class="nossos-servicos__imagem-paragrafo">Consultas médicas</h4>
          </div>
          <div class="button-servicos__page-servicos">
            <a class="nossos-servicos__imagem-button" href=""><span>Saiba mais</span></a>
          </div>
        </div>

        <div class="nossos-servicos__imagem-conteudo">
          <div class="nossos-servicos__imagem-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/foto2-home-conheca-min.png" alt="Sala de Exames">
            <h4 class="nossos-servicos__imagem-paragrafo">Exames</h4>
          </div>
          <div class="button-servicos__page-servicos">
            <a class="nossos-servicos__imagem-button" href=""><span>Saiba mais</span></a>
          </div>
        </div>

        <div class="nossos-servicos__imagem-conteudo">
          <div class="nossos-servicos__imagem-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/foto3-home-conheca-min.png" alt="Centro cirúrgico">
            <h4 class="nossos-servicos__imagem-paragrafo">Cirurgias</h4>
          </div>
          <div class="button-servicos__page-servicos">
            <a class="nossos-servicos__imagem-button" href=""><span>Saiba mais</span></a>
          </div>
        </div>

        <div class="nossos-servicos__imagem-conteudo">
          <div class="nossos-servicos__imagem-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/foto4-home-conheca-min.png" alt="Centro de terapia">
            <h4 class="nossos-servicos__imagem-paragrafo">Terapias</h4>
          </div>

          <div class="button-servicos__page-servicos">
            <a class="nossos-servicos__imagem-button" href=""><span>Saiba mais</span></a>
          </div>
        </div>

      </div>


    </div>


  </div>
</section>

<section class="terapias" id="terapia-page">
  <div class="container">

    <div class="terapias-box" id="terapia-page__conteudo">
      <div class="terapias-conteudo__img">
        <img id="terapia-img" src="imagens/imagens-banner/terapias-banner.jpg" alt="Centro de terapia">
      </div>
      <div class="terapias-conteudo__texto">
        <h4 class="terapias-conteudo__titulo"><strong>TERAPIAS</strong></h4>
        <h5 class="terapias-conteudo__titulo2"> <strong> Fisioterapia:</strong></h5>
        <p class="terapias-conteudo__paragrafo1">A Fisioterapia pode ser definida como uma ciência aplicada à prevenção e tratamento da saúde por meio de recursos físicos. Sua aplicação necessita do entendimento das estruturas e funções do corpo humano. Ela estuda, diagnostica, previne e trata os distúrbios, entre outros, cinético-funcionais (da biomecânica e funcionalidade humana) decorrentes de alterações de órgãos e sistemas humanos.</p>

        <h5 class="terapias-conteudo__titulo3"> <strong>Fonoaudiologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo2">É a ciência que se ocupa da prevenção, da habilitação e reabilitação da voz, da audição, da motricidade oral, da leitura e da escrita.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Psicologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Estudo que objetiva a análise da vida humana mediante a visão do caráter e da consciência do indivíduo, que são para ela, partes da personalidade dos homens, ou seja, aquilo que diferencia uns dos outros, como os diversos modos de vida que adotam sem a escolha dos outros. Tem como derivados a psicanálise, a psiquiatria, a psicossomática e a psicopatologia
        </p>

      </div>

    </div>

  </div>

</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>