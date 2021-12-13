<?php
// Template Name: Nossos Serviços
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="nossos-servicos__page">

  <div class="container">

    <div class="nossos-servicos__box1" id="page-consultas-servicos__1">
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

<section class="terapias" id="consultas-page">
  <div class="container">

    <div class="terapias-box">

      <div class="terapias-conteudo__img">
        <img id="consultas-page-img" src="imagens/imagens-banner/consultas-page-min.jpg" alt="Consultas">
      </div>

      <div class="terapias-conteudo__texto" id="consultas-page__text-01">
        <h4 class="terapias-conteudo__titulo"><strong>Consultas</strong></h4>



        <h5 class="terapias-conteudo__titulo3"> <strong>Angiologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo2">É a especialidade médica que cuida de doenças que acometem o sistema circulatório (veias e artérias) e o sistema vascular.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Alergologia ou Imunoalergologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Trata as doenças de natureza alérgicas. Principais doenças: Alergias,Asmas e Bronquites.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Cardiologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É a especialidade na medicina que trata das doenças do coração e da pressão arterial. Verifique sua pressão regularmente. Em caso de qualquer alteração, procure um cardiologista.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Cirurgia Plástica:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É o tratamento cirúrgico das deformidades decorrentes de doenças congênitas ou pós traumatismo. A cirurgia plástica reparadora requer um procedimento pós e pré operatório, feito por especialistas.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Clínica Médica:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É o campo da medicina que tem por objetivo ver o paciente como um todo, isto é, de forma geral, Também conhecida como clínica geral. Sempre indicado para uma primeira consulta com um médico ou ainda quando o paciente conhece apenas os sintomas, mas não consegue identificar perfeitamente o que está sentido.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Dermatologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Campo da medicina que se ocupa do estudo e tratamento da pele, unhas e cabelos. Principais doenças: Queda de cabelos, Coceiras e Câncer de pele.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Densitometria Óssea:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">A densitometria óssea é um exame de imagem muito utilizado para diagnóstico da osteoporose, pois permite avaliar a perda óssea.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Doppler:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">O ultrassom com Doppler serve para avaliar órgãos, estruturas, tecidos, a trama vascular e o fluxo sanguíneo que irradia a região em análise.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Endocrinologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Principais atuações: . Diabetes . Sobrepesos e obesidades . Doenças da tireoide.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Ecodoppler de Membros:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">O eco-Doppler é uma funcionalidade da ecografia (ou ultrassonografia, muitas vezes abreviado para ECO) que permite avaliar o fluxo dos vasos sanguíneos. Este exame serve para auxiliar o médico no diagnóstico de várias doenças de diferentes áreas anatômicas.</p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Eletrocardiograma:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">O eletrocardiograma, ou ECG, é um exame feito para avaliar a atividade elétrica do coração, observando, assim, o ritmo, a quantidade e a velocidade das suas batidas.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Estética Facial e Corporal:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Os tratamentos Corporais Estéticos têm como objetivo dar uma melhor definição aos contornos corporais através de redução de medidas, combate à celulite, flacidez, gordura localizada e todos os transtornos que comprometem a silhueta.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Fisioterapia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">A Fisioterapia pode ser definida como uma ciência aplicada à prevenção e tratamento da saúde por meio de recursos físicos. Sua aplicação necessita do entendimento das estruturas e funções do corpo humano. Ela estuda, diagnostica, previne e trata os distúrbios, entre outros, os cinético-funcionais (da biomecânica e funcionalidade humana) decorrentes de alterações de órgãos.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Fonoaudiologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É a ciência que se ocupa da prevenção, da habilitação e reabilitação da voz, da audição, da motricidade oral, da leitura e da escrita.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Gastroenterologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Se ocupa do tratamento clínico das doenças do aparelho digestiva, sendo as principais doenças: Gastrites. Úlceras gástricas. Refluxo.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Ginecologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">A ginecologia literalmente significa "a ciência da mulher", mas na medicina é a especialidade que trata de doenças do sistema reprodutor feminino, útero, vagina e ovários.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Neurologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Neurologia é a especialidade médica que trata dos distúrbios estruturais do sistema nervoso. Especificamente, ela lida com o diagnóstico e tratamento de todas as categorias de doenças que envolvem o sistema nervoso central, periférico e autônomo, incluindo os seus revestimentos, vasos sanguíneos, e todos os tecidos efetores, como os músculos.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Nutrição:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Também conhecido como exame de visão, é o teste mais comum realizado por oftalmologistas, pois ele indica como está a visão do paciente e se é necessário o uso de lentes corretivas. Esse teste pode identificar problemas como miopia, hipermetropia e astigmatismo.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Oftalmologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É uma especialidade da medicina que estuda e trata as doenças relacionadas ao olho, à refração e aos olhos e seus anexos.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Ortopedia e Traumatologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Se ocupa das doenças e deformidades dos ossos, músculos, ligamentos e articulações, como dores na coluna e fraturas.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Otorrino:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Campo de atuação envolve as doenças do ouvido, do nariz e garganta tendo como principais Doenças: Otites, laringites, faringites e Sinusites.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Pediatria:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">A pediatria é a especialidade médica dedicada à assistência à criança e ao adolescente, nos seus diversos aspectos, sejam eles preventivos ou curativos.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Pneumologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Tratamento clínico das doenças dos pulmões.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Proctologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É a especialidade médica responsável pelo diagnóstico e tratamento das afecções que acometem o trato digestório terminal, compreendendo os seguintes órgãos: cólons, reto e ânus.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Psicologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Estudo que objetiva a análise da vida humana mediante a visão do caráter e da consciência do indivíduo, que são para ela, partes da personalidade dos homens, ou seja, aquilo que diferencia uns dos outros, como os diversos modos de vida que adotam sem a escolha dos outros. Tem como derivados a psicanálise, a psiquiatria, a psicossomática e a psicopatologia.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Psiquiatria:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É o ramo da medicina que se ocupa do diagnóstico, da terapia medicamentosa e da psicoterapia de pacientes que apresentam problemas mentais.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Psiquiatria:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">É o ramo da medicina que se ocupa do diagnóstico, da terapia medicamentosa e da psicoterapia de pacientes que apresentam problemas mentais.
        </p>

        <h5 class="terapias-conteudo__titulo4"> <strong>Reumatologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Trata as doenças das articulações e dos tecidos conjuntivos relacionados a distúrbios imunológicos, tais como: lúpus, reumatismos, artrites.
        </p>


        <h5 class="terapias-conteudo__titulo4"> <strong>Urologia:</strong></h5>
        <p class="terapias-conteudo__paragrafo3">Tratamentos para as doenças das vias urinárias e do aparelho sexual masculino, exemplos: pedras nos rins, infecções urinárias e alterações nas próstatas.
        </p>


      </div>

    </div>
  </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>