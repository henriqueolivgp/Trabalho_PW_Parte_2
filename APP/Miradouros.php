<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = ' - Miradouros';
require_once __DIR__ . '/Compunents/header.php';
?>

<body>

  <div id="preloader"></div>

  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>
  <h1 class="page-title mt-4 mb-4  text-center ">Miradouros</h1>
  <!-- Container comtem todo o conteudo da pagina -->
  <div class="container ">
    <!-- Esta linha e responsavel por ajustar o card-4 -->
 
      <!-- Card-4-->
      <!-- Container-card contem o conteudo do card-4 -->
      <div class="container-card">
        <!-- Aqui o col-12 esta a dizer que o card-4 dentro da row ira ocupar todo o espaco ou seja as 12 colunas -->
        <div class="card-4 p-4 mb-4 col-12">
          <div class="card-img-1" style="background: blue,"></div>
          <div class="cards-body" style="border: 8px;">
            <h1 class="card-title-1">Miradouro</h1>
            <p class="card-sub-title-1">Miradouro do Alto do Crasto</p>
            <p class="card-info-1" style="text-align:justify">Localizado no lugar de Chão Longo, na freguesia de Vascões e a uma altitude de 612 metros, este miradouro oferece uma bela vista panorâmica dos campos cultivados em socalcos, que são delimitados por vegetação ou paredes de pedra solta. A partir deste ponto de observação, destacam-se as amplas pastagens da Colónia Agrícola de Chã de Lamas, criada durante o período do Estado Novo.</p>
            <a style="background-color: #3c6255; border: 0; width: 100px;" href="https://www.paredesdecoura.pt/locais/miradouro-do-alto-do-crasto/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Ver mais...</a>
            </a>
          </div>
        </div>
    </div>
  </div>

<?php

require_once __DIR__ . '/Compunents/footer.php';

?>