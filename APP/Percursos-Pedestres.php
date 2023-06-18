<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = ' - Percursos Pedestres';
require_once __DIR__ . '/Compunents/header.php';
?>

<body>

  <div id="preloader"></div>
  
  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>

  <!-- Card-1-->
  <div class="container">
    <h1 class="page-title mt-4 mb-4  text-center ">Percursos Pedestres</h1> 
      <div class="card p-4 mb-4">
        <div class="card-img"><img class="back-img" src="../IMG/PCR2938.jpg" alt=""></div>
        <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
          <h1 class="card-title">PR06 PRC</h1>
          <p class="card-sub-title">Trilho Megalítico de Vascões</p>
          <p class="card-info" style="text-align:justify">A Paisagem Protegida do Corno de Bico, situada no concelho de Paredes de Coura, apresenta um ambiente rural e florestal deslumbrante, que pode ser apreciado através deste agradável percurso de Pequena Rota. A maior parte do trilho está localizado na freguesia de Vascões e tem início no núcleo populacional da região, levando os visitantes a percorrer campos agrícolas e zonas arborizadas, além de passar por locais de interesse, como a antiga Colónia Agrícola da Chã de Lamas, o Centro de Educação e Interpretação Ambiental da Paisagem Protegida do Corno de Bico, os monumentos megalíticos da Chã de Lamas e o Miradouro do Alto do Crasto.</p>
          <a style="background-color: #3c6255; border: 0;" href="https://pt.wikiloc.com/trilhas-trekking/pr06-prc-trilho-megalitico-de-vascoes-13617377" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Ver mais...</a>
          </a>
        </div>
      </div>

  <!-- Card-2-->
    <div class="card p-4 mb-4">
      <div class="card-img-2"><img class="back-img" src="../IMG/Imagem 005-2.jpg" alt=""></div>
      <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
        <h1 class="card-title">PCR PR3</h1>
        <p class="card-sub-title">Trilho dos Miradouros</p>
        <p class="card-info" style="text-align:justify">Como o próprio nome sugere, este trilho pedestre é focado em proporcionar vistas panorâmicas das terras de Coura. Com um percurso de 12 km, este trajeto apresenta pouca dificuldade, mesmo que inclua algumas subidas. Alguns dos pontos mais destacados deste trilho incluem o Lugar de Coutos, onde é possível avistar o rio Coura, o Corno do Bico (que é o ponto mais alto do concelho) e o Penedo do Rebolinho, uma formação rochosa em formato de bola que parece estar prestes a cair a qualquer momento.</p>
        <a style="background-color: #3c6255; border: 0;" href="http://www.walkingportugal.com/z_distritos_portugal/Viana_do_Castelo/Paredes_de_Coura/PCR_PR3_Trilho_dos_Miradouros.html" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Ver mais...</a>
        </a>
      </div>
    </div>
  </div>
</body>

  <?php

  require_once __DIR__ . '/Compunents/footer.php';

  ?>