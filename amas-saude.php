<?php
// Template Name: Amas Saúde
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="amas-saude__banner">

  <div class="container">

    <div class="amas-saude__banner-conteudo">

      <div class="amas-saude__banner-box-texto">
        <h3 class="amas-saude__banner-box-titulo1">A.M.A.S</h3>
        <h4 class="amas-saude__banner-box-titulo1">Assistência Médica Ápice Saúde </h4>

        <p class="amas-saude__banner-paragrafo1">A assistência médica AMAS oferece aos nossos
          pacientes instalações modernas e atendimento
          realizado por profissionais especialistas de saúde altamente qualificados e experientes. Em 2018,
          iniciamos nossa operação de Assistência Médica,
          de A a Z, buscando atender e cobrir ao máximo as necessidades de seus beneficiários.
        </p>
        <p class="amas-saude__banner-paragrafo2">De Consultas pediátricas a Cirurgias oftalmológicas, nossos serviços permitem prevenir quaisquer problemas de saúde que nossos pacientes possam estar enfrentando.
        </p>
        <p class="amas-saude__banner-paragrafo3">Pensando no seu conforto, estamos sempre
          melhorando e crescendo, com mais tecnologia, equipamentos de ponta e ampliando nossa rede atendimento que agora conta com as Unidade de Guadalupe e Jardim Botânico, além do Ápice Hospital,
          em São João de Meriti. </p>
        <p class="amas-saude__banner-paragrafo4">Pensando no seu conforto, estamos sempre
          melhorando e crescendo, com mais tecnologia, equipamentos de ponta e ampliando nossa rede atendimento que agora conta com as Unidade de Guadalupe e Jardim Botânico, além do Ápice Hospital,
          em São João de Meriti. </p>
        <p class="amas-saude__banner-paragrafo5"> Somos do tamanho que sonhamos. </p>

      </div>

      <div class="amas-saude__banner-box-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-site/AMAS.png" alt="Profissional da saúde">

      </div>

    </div>
  </div>
</section>

<section class="guia">
  <div class="container">

    <div class="guia-befeficiario">

      <h3 class="guia-beneficiario__titulo">Guia do Beneficiário</h3>

      <p class="guia-beneficiario__paragrafo1">Amas Multi Saúde administra e comercializa o <span style="text-transform:uppercase"> CARTÃO DE DESCONTO AMAS MULTI SAÚDE,</span> elaborado
        sob medida PAra os seus beneficiários. A assistência prestada permite consultas médicas em diversas especialidades e serviços predeterminados contratualmente, como exames, procedimentos, terapias e cirurgias, mediante pagamento de mensalidade, descontos e coparticipação por uso.
      </p>

      <p class="guia-beneficiario__paragrafo2"><span style="text-transform:uppercase">CARTÃO DE DESCONTO AMAS MULTI SAÚDE,O CARTÃO DE DESCONTO AMAS MULTI SAÚDE</span> não é um plano de saúde,mas um Cartão de Desconto
        em Assistência Médica que opera a bandeira <span style="text-transform:uppercase">AMAS</span> Cartão Fidelidade, propiciando mais saúde e proteção através de serviços básicos e essenciais, um novo modo de vida, além de cuidados especiais com os pacientes e suas famílias. Você conta ainda com um programa de descontos que abrange: ótica, farmácia, serviço odontológico, entre outros. Veja em nosso site: www.amasmultisaude.com.br.
      </p>
      <p class="guia-beneficiario__paragrafo3">Um dos benefícios da Assistência é a confiança na solidez de um hospital referenciado. Escolhemos o Ápice Hospital que iniciou sua história em 1989 e tornou-se referência em São João de Meriti, com mais de 20 Serviços Ambulatoriais Especializados, um moderno Centro Cirúrgico, um Centro de Radiologia e Imagens, Serviços de Pronto Socorro (Infantil, Adulto, Ortopedia, Oftalmologia e Caridologia) , Setor de Saúde Mental
        com Neurologia, Paicologia e Paiquiatria, Serviço Odontológico, Núcleo de Fisioterapia e Laboratório de Análises Clínicas, disponibilizando mais de 800 exames em diferentes especialidades, sendo sempre reconhecido pelo excelente corpo clínico próprio de que dispõe.
      </p>

      <p class="guia-beneficiario__paragrafo4">Além da reputada qualidade do Hospital, conferida pela <span style="text-transform:uppercase">CATEGORIA “A”</span> dada pela Comissão da AHCRJ,
        sua localização é um diferencial, estando realmente próxima ao Terminal Rodoviário e aos Terminais de Metrô e Trem da pavuna. Distante cerca de 28 km do Centro do Rio de Janeiro, o Hospital pode ser acessado pela Linha Vermelha, em um trajeto de, aproximadamente, 30 minutos.
      </p>

      <a href="">
        <p><strong>Baixe completo o </strong>Guia do Beneficiário</p> <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/imagens-icone/icone-download.svg" alt="Downdload guia"></span>
      </a>

    </div>
  </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>