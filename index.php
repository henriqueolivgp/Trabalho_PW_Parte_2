<!DOCTYPE html>
<html lang="pt'pt">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- All Styles for -->
  <link rel="stylesheet" href="../../Style/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <title>Vascões</title>
</head>

<body >
  <!--Navbar Start here-->
  <?php
  include_once __DIR__ . '/APP/Compunents/navbar.php';
  ?>
  <!--Navbar finished here-->

  <div class="container vh-100">

    <!--
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->

    <!-- Mapa e Video c -->
    <div class="justify-content-center mt-5">
      <div class="row">
        <div class="col">
          <iframe class="mapa" style="border-radius: 0.5rem;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30406.375379111447!2d-8.521977968038772!3d41.90375041078295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25a0166ca81ea7%3A0x500ebbde4911390!2zVmFzY8O1ZXM!5e1!3m2!1spt-PT!2spt!4v1680804396099!5m2!1spt-PT!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
          <iframe class="video" width="100%" height="315" style="border-radius: 0.5rem;" src="https://www.youtube.com/embed/4s0CmCO-R7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-- Mapa e video acabam aqui-->

  </div>

  <!-- Site footer -->
  <footer class="site-footer mt-5 ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Website realizado com base na matéria aprendida nas aulas de Programação Web.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Link</h6>
          <ul class="footer-links">
            <li><a href="https://github.com/henriqueolivgp/Trabalho_PW_Parte_2" target="_blank">Repositório</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 Este trabalho foi realizado por
            <a href="https://github.com/henriqueolivgp">Henrique Oliveira</a> e <a href="https://github.com/pedrof04">Pedro Ferreira</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>