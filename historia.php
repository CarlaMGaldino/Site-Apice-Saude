<?php
// Template Name: História, Direção, Missão
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="historia-banner">
  <div class="container">
    <div class="historia-banner__conteudo">
      <div class="historia-banner__conteudo-texto">
        <h3> <strong> HISTÓRIA <br> </strong> </h3>
        <h3> <strong> DIREÇÃO <br> </strong> </h3>
        <h3> <strong> MISSÃO </strong> </h3>
        <h4> <strong> História: </strong></h4>
        <p>Ápice Hospital teve seu embrião
          no ano de 1989, com um pequeno consultório na especialidade de dermatologia, já na avenida
          Automóvel Clube, 63 - São João
          de Meriti. Inicialmente com uma
          sala de apenas 35 m2.
        </p>
        <p>Com o crescimento daquele consultório, inicialmente a ideia foi transformá-lo numa clínica <br> dermatológica a qual recebeu o nome de sua médica fundadora - Centro Médico Claudia Barros. <br> Em um segundo momento, em 2005, já ocupando uma área 10 vezes maior que a inicial, a atividade recebeu nova denominação: Apelle Clínica Médica.</p>
      </div>

      <div class="histoaria-banner__conteudo-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/shutterstock_1637163520 copiar-min.png" alt="Profissional da saúde">
      </div>

    </div>
  </div>
</section>


<Section class="historia-conteudo__box">

  <div class="container">

    <div class="historia-conteudo__box-texto">
      <p>Em 2008, consolidando o projeto de expansão, já contando com cerca de 12 especialidades médicas e uma área <br> de 1500m2, com um relevante conjunto de exames complementares, cunhou-se novo nome ÁPICE HOSPITAL DIA, por conta <br> do novo desafio que se apresentava à época, a construção de um complexo de saúde que pudesse oferecer atendimento, <br> também na modalidade day hospital. Conta também com um centro cirúrgico moderno, com acomodações confortáveis, <br> cuidadosamente desenhadas para fornecer toda assistência a quem precise realizar procedimentos cirúrgicos na <br> modalidade day clinic. <br>
        Com expansão da atividade, Ápice conta, atualmente, com cerca de 25 especialidades médicas, 2000 exames <br> complementares e 1200 procedimentos cirúrgicos.
      </p>

      <h4><strong> Direção Hospitalar:</strong></h4> <br>

      <p class="paragrafo-texto1"><strong> Diretor Médico Responsável</strong></p>
      <p>
        Dr. Andre Caldara - Oftalmologista – CRM: 52-90335-3 <br>
        Formado em 2010 pela Fundação Técnico Educacional Souza Marques (FTESM). Especialização no Hospital/Banco de Olhos, <br> em Sorocaba, onde foi residente de 2011 a 2013 com o reconhecimento pelo MEC e pelo Conselho Brasileiro de <br> Oftalmologia (CBO).
      </p>
      <p class="paragrafo-texto2"><strong>Diretor Administrativo:</strong></p>

      <p>
        Alexandre Formozinho de Sá - Diretor de Operações <br>
        Formado em 1992 pela PUC-RJ em Administração de Empresas. Pós-graduado em 1997 pelo IAG Master – PUC RJ em <br> Finanças Corporativas. Mestrado em 2001 pela FGV-RJ EM Executivo em Administração.
      </p>


      <h4><strong>Missão:</strong></h4> <br>
      <ul class="historia-conteudo__lista">
        <li class="historia-conteudo__lista-li">•Perseguimos humanização, resolutividade e resultados! Excelência não é acaso, é o nosso hábito!
        </li>
        <li class="historia-conteudo__lista-li">•Ser referência em saúde em toda Baixada Fluminense, reconhecido pela capacidade de diferenciação e qualidade na prestação de serviços</li>
        <li class="historia-conteudo__lista-li">•Investir para Crescer! Humanização - Resolutividade - Qualidade - Modernização</li>
      </ul>



    </div>
  </div>

</Section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>