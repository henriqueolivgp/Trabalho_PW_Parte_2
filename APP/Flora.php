<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = '- Flora';
require_once __DIR__ . '/Compunents/header.php';

?>

<body>

  <div id="preloader"></div>

  <!--Navbar Start here-->
  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>
  <!--Navbar finished here-->

  <h1 class="page-title text-center mt-4 mb-4">Flora</h1>

  <div class="container">
    <div class="card mb-4 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-1"></div>
              <div class="flip-card-back">
                <h1>Drosera rotundifolia</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
            <div class="card-text">
              <p>
                Drosera rotundifolia é uma planta carnívora encontrada em regiões frias do hemisfério norte,
                incluindo América do Norte, Europa e Ásia. A planta cresce em áreas húmidas, alimentado-se
                de pequenos insetos e artrópodes. As suas folhas produzem uma
                substância pegajosa e viscosa que atrai e captura as presas. Uma vez capturada, a planta
                libera enzimas digestivas para digerir a presa e absorver os nutrientes. Pode ser usada
                para o tratamento de tosse, asma e outras doenças respiratórias, com cautela.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-2"></div>
              <div class="flip-card-back">
                <h1>Azevinho (Ilex aquifolium)</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
            <div class="card-text">
              <p>
                O azevinho (Ilex aquifolium) é nativo da Europa, Norte da África e Oeste da Ásia. É conhecido
                por ser frequentemente usado em decorações natalícias. O azevinho é uma planta muito resistente
                e pode ser encontrado em diversos tipos de solo, incluindo solos húmidos, secos, ácidos ou
                alcalinos. Tem sido usado em medicamentos tradicionais para tratar a febre, tosse e dor de garganta.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-4 align-items-center">
      <div class="row d-flex align-items-center w-100">
        <div class="col-lg-4 col p-4">
          <div class="flip-card w-100">
            <div class="flip-card-inner">
              <div class="flip-card-front-3"></div>
              <div class="flip-card-back">
                <h1>Carvalheira</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-4 d-flex justify-align-center">
          <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
            <div class="card-text">
              <p>
                Carvalheira é uma floresta ou bosque de carvalhos. São importantes ecossistemas que abrigam
                uma grande variedade de flora e fauna. As carvalheiras têm grande valor económico e cultural,
                fornecendo madeira para a produção de móveis, construção e outras aplicações. Além disso, as
                carvalheiras são importantes na produção de alimentos, como bolotas, que são consumidas por
                porcos e outros animais. Enfrentam ameaças como a degradação ambiental, a urbanização e a
                agricultura intensiva.
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