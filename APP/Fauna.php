<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = '- Fauna';
require_once __DIR__ . '/Compunents/header.php';

?>

<body>

  <!--Navbar Start here-->
  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>
  <!--Navbar finished here-->

  <div class="container">

    <h1 class="page-title text-center">Fauna</h1>

    <!-- lobo -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-1"></div>
              <div class="flip-card-back">
                <h1>Lobo Ibérico (Canis lupus signatus)</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                O lobo-ibérico (Canis lupus signatus) é uma subespécie de lobo nativa da Península Ibérica. São animais
                solitários e territoriais, que habitam principalmente em áreas montanhosas e florestais. O lobo-ibérico é um
                predador de topo que se alimenta principalmente de cervos, javalis e pequenos roedores. Infelizmente, a
                população de lobo-ibérico foi severamente reduzida no século XX devido à caça excessiva e à perda de habitat,
                o que levou a espécie a estar em risco de extinção. Atualmente, existem esforços de conservação em andamento
                para proteger e aumentar a população de lobo-ibérico.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Aguia -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; ">
            <div class="card-text">
              <p>
                A águia-de-asa-redonda (Buteo buteo), também conhecida como bútio-comum. É uma ave de rapina de porte médio,
                que vive em habitats diversos, mas sempre na orla de povoamentos florestais.
                Tem a silhueta compacta, de asas amplas e pescoço largo e curto. A plumagem apresenta normalmente tons escuros
                (sobretudo castanho), mas com manchas claras, na cauda e em forma de colar, no peito, que são identificáveis
                em pleno voo.
              </p>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-2"></div>
              <div class="flip-card-back">
                <h1>Águia de asa redonda<br>(Buteo buteo)</h1>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Coruja -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-fron-3"></div>
              <div class="flip-card-back">
                <h1>Coruja do mato (Strix aluco)</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                A coruja-do-mato é uma ave de rapina de dimensão média e aspecto compacto. Possui asas relativamente curtas,
                largas e arredondadas e o seu corpo tem uma coloração geral acastanhada. Tem uma cabeça grande e arredondada,
                sem penachos. Possui olhos e garras escuras e bico amarelado. Nesta espécie ocorre dimorfismo sexual, sendo a
                fêmea maior e mais pesada que o macho.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- garrano -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                Garrano é uma raça de cavalo nativa do norte de Portugal, conhecida pela sua resistência e adaptabilidade a
                climas frios e montanhosos. Eles são geralmente pequenos em tamanho, com uma altura média de cerca de 1,25
                metros, e têm o espesso e áspero que os protege das condições climáticas adversas. Garranos são conhecidos por
                serem animais muito resistentes e foram usadostradicionalmente para trabalhar em terrenos íngremes e
                transportar cargas pesadas em áreas rurais. Hoje em dia são usados para fins recreativos como equitação e
                corridas.
              </p>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-4"></div>
              <div class="flip-card-back">
                <h1>Garrano<br>(Equus caballus)</h1>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Javali -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-5"></div>
              <div class="flip-card-back">
                <h1>Javali<br>(Sus scrofa scrofa)</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                "Javali-europeu" é o nome comum dado à subespécie Sus scrofa, que é uma das várias subespécies de javali
                encontradas na Europa. O javali-europeu é caracterizado por sua pelagem escura e presas longas e curvas. Eles
                são omnívoros e alimentam-se de frutas, nozes, insetos e pequenos animais.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Corco -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                O corço (Capreolus capreolus) é uma espécie de cervo encontrado na Europa, Ásia Ocidental e Ásia Central. É um
                animal de porte médio, com peso médio de 15 a 30 quilos. Os machos têm chifres curtos e pontiagudos que
                crescem anualmente e são usados durante a temporada de acasalamento para lutar com outros machos e conquistar
                as fêmeas. As fêmeas não têm chifres. O corço alimenta-se de brotos, folhas, frutos e ervas. É um animal
                solitário e territorial, que passa grande parte do tempo escondido na vegetação para evitar predadores como
                lobos e ursos.
              </p>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-6"></div>
              <div class="flip-card-back">
                <h1>Corço<br>(Capreolus capreolus)</h1>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Noitibo -->

    <div class="card mb-3 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class=" col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-7"></div>
              <div class="flip-card-back">
                <h1>Noitibó-da-Europa <br>(Caprimulgus europaeus) </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
            <div class="card-text">
              <p>
                O noitibó-da-europa (Caprimulgus europaeus) é uma ave noturna encontrada em grande parte da Europa, norte da
                África e sudoeste da Ásia. É conhecido pelo seu canto noturno, que é uma série de assobios. Eles têm uma
                aparência discreta, com plumagem acinzentada, o que os torna excelentes para se camuflarem durante o dia.
                Alimentam-se principalmente de insetos voadores, que capturam durante o voo. O noitibó-da-europa é considerado
                uma espécie de baixa preocupação em termos de conservação, apesar de ser afetado por ameaças no seu dia-a-dia
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php

  require_once __DIR__ . '/Compunents/footer.php';

  ?>