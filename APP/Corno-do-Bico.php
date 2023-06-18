<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = '- Corno do Bico';
require_once __DIR__ . '/Compunents/header.php';
?>

<body>

  <div id="preloader"></div>

  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>

  <div class="container">

    <h1 class="page-title mt-4 mb-4  text-center ">Corno do Bico</h1>

    <div class="row row-cols-1 ">

      <div class="card mb-3">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col p-4">
            <img src="../recursos/IMG/Fauna/Fauna_Square.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7 p-4">
            <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Fauna</h3>
              <p class="card-text">No corno do bico encontramos uma fauna diversificada e com isto
                refiro-me à vida animal e ao seu ambiente ou região. Podemos então
                encontrar 188 espécies de vertebrados. O destaque desta fauna é o
                lobo-ibérico ( Canis lupus signatus ), a salamandra-lusitânica (
                Chioglossa lusitanica ), , a víbora-de-seoane (Vipera seoanei), a
                toupeira-de-água (Galemys pyrenaicus) e o tartaranhão-caçador
                (Circus pygargus).</p>
              <a style="background-color: #3c6255; border: 0;" href="/APP/Fauna.php" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col p-4">
            <img src="../recursos/IMG/Flora/Flora_Square.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7 p-4">
            <div class="card-body " style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Flora</h3>
              <p class="card-text">No corno do bico encontramos uma flora diversificada ou seja um
                conjunto de plantas presentes nesta região ou ecossistema. Podemos
                encontrar 439 espécies de flora, incluindo plantas raras como o
                musgo Bruchia vogesiaca e o narciso-trombeta, manchas de
                pinhal, lameiros e uma turfeira. As espécies dominantes incluem o
                carvalho-alvarinho e o azevinho nos bosques mistos e o
                freixo-de-folha-estreita e o amieiro nos bosques ripícolas.</p>
              <a style="background-color: #3c6255; border: 0;" href="/APP/Flora.php" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/Astrocamp_Square.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Astrocampo</h3>
              <p class="card-text">O AstroCamp é um projeto académico voltado para o estudo da astronomia e física, que oferece
                aos participantes uma formação de alta qualidade e inspiradora, além de um ambiente tranquilo
                e isolado. O programa é direcionado a estudantes do ensino secundário, que serão selecionados com base na sua
                motivação e desempenho académico. A participação para alunos portugueses no programa tem
                zero custos adicionais.</p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>


  <?php

  require_once __DIR__ . '/Compunents/footer.php';

  ?>