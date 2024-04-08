<header class=" p-0">
  <div class="container">
    <nav class="navbar text-bg-white bg-white navbar-expand-sm ">

      <div class="justify-content-between w-100 flex-row d-flex align-items-center">

        <a href="home.php" class="d-inline-flex mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="./../img/site/bola2.png" class="img-fluid d-flex align-end logoNav navbar-brand" alt="">
        </a>
        <button class="navbar-toggler h-50" data-bs-toggle="collapse" data-bs-target="#navegacao">
          <img src="../img/site/hamburguer.png" alt="">
        </button>
      </div>

      <div class="flex-column">
        <div class="collapse navbar-collapse flex-column" id="navegacao">

          <div class="d-flex col-12 gap-2 flex-column">

            <div class="boxPesquisa align-items-center d-flex w-100">
              <form class="pesquisa form-inline my-lg-0">
                <div class="input-group align-items-center  justify-content-center">
                  <input type="text" class="form-control" placeholder="pesquisar">
                  <div class="input-group-append">
                    <a href="#"><button type="button" class="btn"> <img src="../img/site/lupa.png" style="width: 2rem; height: 2rem;" class="img-fluid" alt=""></button></a>
                  </div>
                </div>
              </form>


              <ul class="navbar-nav flex-row">
                <li class="nav-item" style="width: 60%;">
                  <a href="../area-admin/user/cadastro.php" class="nav-link">
                    <button class="btn ">
                      <div class="d-flex flex-column  align-items-center">

                        <img src="../img/site/registro.png" style="width: 2rem; height: 2rem;" class="img-fluid" alt="">
                        <strong class="mr-5"> Cadastre-se</strong>
                      </div>
                    </button>
                  </a>
                </li>
                <span><img style="height: 100%;" src="../img/site/linha.png" alt=""></span>
                <li class="nav-item">
                  <a href="../area-admin/user/login.php" class="nav-link">
                    <button class="btn ">
                      
                      <img src="../img/site/usuario.png" style="width: 2rem; height: 2rem;" class="img-fluid" alt="">
                      <strong class="ml-2 mr-5"> Entre</strong>
                    </button>
                  </a>
                </li>
              </ul>
            </div>

          </div>
          <div class="menu">
            <ul class="nav menu col-lg-auto mb-md-0">
              <li><a href="home.php" class="nav-link  text-dark">Home</a></li>
              <li><a href="loja.php" class="nav-link  text-dark">Loja</a></li>
              <!-- <li><a href="filme.php" class="nav-link  text-dark">Seleções</a></li> -->
              <li><a href="contato.php" class="nav-link  text-dark">Contato</a></li>
            </ul>
          </div>
        </div>

      </div>
  </div>
  </nav>
</header>