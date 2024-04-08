<?php
require_once('../area-admin/user/processLogin.php');
?>


<style>
  @media(max-width: 1300px) {
    .boxPesquisa {
      flex-direction: column-reverse !important;
    }
  }

  .modalPerfil {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    outline: none;
    border: none;
    border-radius: 10px;
    height: 35vh;
  }

  .modalPerfil::backdrop {
    backdrop-filter: blur(3px);
    /* background-color: white;
        opacity: 50%; */
  }

  input[type="radio"] {
    display: none;
  }

  /* Estilo para o ícone de estrela quando o radio button está marcado */
  input[type="radio"]:checked+i {
    color: #4400c2;
    /* Cor da estrela quando marcada */
  }

  @media (max-width: 1000px) {
    .modalAvaliacao {
      width: 80vw !important;
      height: 50vh !important;
      background-color: while !important;
    }
  }

  .btn-close {
    border: none !important;
    box-shadow: none;
  }

  .btn-close:focus {
    box-shadow: none;
  }

  textarea {
    border: 1px solid #000 !important;
    border-radius: 10px !important;
    resize: none;
  }

  textarea:focus {

    box-shadow: none !important;
  }
</style>


<header class=" p-0">
  <div class="container">
    <nav class="navbar text-bg-white bg-white navbar-expand-sm ">

      <div class="justify-content-between w-100 flex-row d-flex align-items-center">

        <a href="home.php" class="d-inline-flex mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="./../img/site/logo.png" class="img-fluid d-flex align-end logoNav navbar-brand" alt="">
        </a>
        <button class="navbar-toggler h-50" data-bs-toggle="collapse" data-bs-target="#navegacao">
          <img src="../img/site/hamburguer.png" alt="">
        </button>
      </div>

      <div class="flex-column">
        <div class="collapse navbar-collapse flex-column" id="navegacao">

          <div class="d-flex col-12 gap-2 flex-column">

            <div class="boxPesquisa align-items-center d-flex w-100 flex-row justify-content-around">
              <form class="pesquisa form-inline my-lg-0">
                <div class="input-group align-items-center  justify-content-center">
                  <input type="text" class="form-control" placeholder="pesquisar">
                  <div class="input-group-append">
                    <a href="#"><button type="button" class="btn"> <img src="../img/site/lupa.png" style="width: 2rem; height: 2rem;" class="img-fluid" alt=""></button></a>
                  </div>
                </div>
              </form>



              <div class="dropdown text-end">
                <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./../img/user/<?php echo $_SESSION['foto']!=""?$_SESSION['foto'] : 'padrao.png';?>" alt="mdo" width="60" height="60" class="border border-2  border-dark rounded-circle">
                  
                </a>
                <ul class="dropdown-menu text-small">
                  <li>
                    <a class="dropdown-item" id="btPerfilDropdown" onclick="modPerfil()">
                      <div class="d-flex flex-row justify-content-evenly align-items-center w-75">
                        <i class="fas fa-user-circle" style="width: 1.5rem; height: 1.5rem;"></i>
                        <strong class="text-center">Perfil</strong>
                      </div>
                    </a>
                  </li>
                  <li><a class="dropdown-item" href="#">
                      <div class="d-flex flex-row justify-content-evenly align-items-center w-75"><i class="fas fa-shopping-cart"></i><span class="text-center"><strong class="text-center">Carrinho</strong></span></div>
                    </a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../area-admin/user/logout.php">
                      <div class="d-flex flex-row justify-content-evenly align-items-center w-75"><i class="fas fa-sign-out-alt"></i><strong class="text-center"> Sair</strong></div>
                    </a></li>
                </ul>
              </div>
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


<?php require_once '../area-cliente/perfil.php'; ?>