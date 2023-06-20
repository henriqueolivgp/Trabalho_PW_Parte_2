<nav style="background-color: #81a05a; height: 65PX;" class="navbar navbar-expand-lg navbar-#81a05a ">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-light" href="/APP/index.php">Vascões</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div style="background-color: #81a05a;" class="offcanvas-header text-light">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Vascões</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div style="background-color: #81a05a;" class="offcanvas-body">
                    <ul class="nav navbar-nav ml-auto mb-lg-0 d-flex justify-content-center">
                        <li class="nav-item me-2">
                            <a href="/APP/index.php">
                                <button class="btn btn-warning" type="button">Home</button>
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a href="/APP/perfil.php">
                                <button class="btn btn-secondary" type="button">Edit Profile</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="../../src/controllers/aplicacao/controlar-autenticacao.php" method="post">
                                <button class="btn btn-danger " type="submit" name="utilizador" value="logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>