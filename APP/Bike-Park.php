<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = ' - Mountain Bike';
require_once __DIR__ . '/Compunents/header.php';
?>

<body>

  <div id="preloader"></div>

  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>
  <h1 class="page-title mt-4 mb-4  text-center ">Mountain Bike</h1>
  <!-- Container comtem todo o conteudo da pagina -->
  <div class="container ">
    <!-- Esta linha e responsavel por ajustar o card-3 -->
 
      <!-- Card-3-->
      <!-- Container-card contem o conteudo do card-3 -->
      <div class="container-card">
        <!-- Aqui o col-12 esta a dizer que o card-3 dentro da row ira ocupar todo o espaco ou seja as 12 colunas -->
        <div class="card-3 p-4 mb-4 col-12">
          <div class="card-img-1" style="background: blue,"></div>
          <div class="cards-body" style="border: 8px;">
            <h1 class="card-title-1">MB</h1>
            <p class="card-sub-title-1">Mountain Bike</p>
            <p class="card-info-1" style="text-align:justify">Nesta atividade que começa e termina no parque de merendas de Vascões, os participantes terão a oportunidade de explorar os caminhos da Paisagem Protegida de Corno de Bico, que é uma das áreas naturais protegidas mais preservadas de Portugal. Localizada no concelho de Paredes de Coura, esta região faz fronteira com Arcos de Valdevez.</p>
            <a style="background-color: #3c6255; border: 0; width: 100px;" href="https://www.adventours.pt/mountain-bike-tours-1/btt-corno-do-bico" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Ver mais...</a>
            </a>
          </div>
        </div>
    </div>
  </div>

<?php

require_once __DIR__ . '/Compunents/footer.php';

?>