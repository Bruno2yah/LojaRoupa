<?php

require_once('../area-admin/user/processLogin.php');


require_once __DIR__ . '/../dao/avaliacaoDao.php';

require_once '../dao/userDao.php';
$user = UserDao::selectById($_SESSION['idUsuario']);



$avaliacao = avaliacaoDao::selectById($_SESSION['idUsuario']);
// var_dump($avaliacao);


?>

<style>
  #modalPerfil {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    outline: none;
    border: none;
    border-radius: 10px;
    height: 60vh;
  }

  #modalPerfil::backdrop {
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

  .boxPf {
    background-color: #4400c2;
    border: 1px solid #4400c2;
    border-bottom-left-radius: 7rem;
    border-top-left-radius: 7rem;
  }

  .endereco {
    border-right: 3px solid #fff;

  }

  

  @media (max-width: 1000px) {
    #modalPerfil {
      width: 80vw !important;
      height: 50vh !important;
      background-color: white !important;
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<dialog id="modalPerfil" class=" w-75">


  <div class="h-100 w-100" style="overflow-x:hidden ;">
    <div class="d-flex justify-content-end">
      <button id="btClosePerfil" type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="row">

      <div class=" col-md-3 col-sm-12 h-75">
        <div class="d-flex justify-content-start align-items-center flex-column">
          <div class="rounded d-flex justify-content-end align-items-end my-3">
            <img id="preview" src="../img/user/<?php echo $_SESSION['foto']; ?>" alt="..." class="rounded-circle img-fluid " style="height:200px; width: 200px; object-fit: cover; border:4px solid #4400c2; margin:auto">
          </div>
          <div class="d-flex justify-content-end align-items-center w-75">
            <form action="../area-admin/user/process.php" method="post">
              <input type="hidden" class="form-control" id="id" name="id" value="<?= $user['idUsuario'] ?>">
              <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">

              <button type="submit" class="dropdown-item d-flex justify-content-end align-items-center"><i class="fas fa-edit fa-lg text-secondary"></i>
              </button>
            </form>

          </div>


          <p class="fw-bold text-center"><?php echo $_SESSION['nome']; ?> <?php echo $_SESSION['sobrenome']; ?></p>
          <p class="fw-bold"><?= $data = date('d/m/Y', strtotime($_SESSION['dataNascimento'])); ?></p>
          <p class="fw-bold"><?php echo $_SESSION['email']; ?></p>
          <p class="fw-bold"><?php echo $_SESSION['cpf']; ?></p>
        </div>
      </div>

      <div class="col-lg-9 col-sm-12 boxPf" style="background-color:#4400c2; height: 100%">
        <div class="w-100 h-100 boxPf">
          <div class="row">
            <div class="col-md-6 col-sm-12 text-white fw-bold endereco">
              <p class="text-center">Endereços: </p>
            </div>
            <div class="col-md-6 col-sm-12 text-white fw-bold">
              <p class="text-center">Histórico de Compras</p>
            </div>

          </div>

        </div>
      </div>
      <div class="col-12">
        <div class="container">
        <?php 
                if($avaliacao == null ){
                  ?>
                    <p class='text-center'>Você ainda não fez nenhuma avaliação</p>;
                  <?php } else{?>
          <div class="">
            <div class="swiper avacPerfil d-flex justify-content-center align-items-center" style="height: 23vh;" >
              <div class="swiper-wrapper " >
                <?php 
                foreach ($avaliacao as $avac) { ?>
                  <div class="swiper-slide d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-row justify-content-evenly align-items-center">

                      <div class="card shadow" style="width: 18rem; border: 1px solid #4400c2;">
                        <div class="card-body">
                          <div class="flex-row d-flex justify-content-around my-3">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $avac[0] ?>">
                            <button type="submit" onclick="modalRemover(<?= $avac[0] ?>,'idDeletar')" class="dropdown-item"><i class="fas fa-trash-alt fa-lg" style="color: #4400c2;"></i></button>
                            <div class="group-buttonPerfil flex-row d-flex">
                              <input type="hidden" class="estrelaPerfil" value="<?= $avac['estrela'] ?>">
                              <button class="border border-0 bg-white"><i class="avaliacaoVisuPerfil far fa-star" style="color: #4400c2;"></i></button>
                              <button class="border border-0 bg-white"><i class="avaliacaoVisuPerfil far fa-star" style="color: #4400c2;"></i></button>
                              <button class="border border-0 bg-white"><i class="avaliacaoVisuPerfil far fa-star" style="color: #4400c2;"></i></button>
                              <button class="border border-0 bg-white"><i class="avaliacaoVisuPerfil far fa-star" style="color: #4400c2;"></i></button>
                              <button class="border border-0 bg-white"><i class="avaliacaoVisuPerfil far fa-star" style="color: #4400c2;"></i></button>
                            </div>
                          </div>
                          <p class="card-text"><?= $avac['comentario'] ?></p>
                          <p class="fw-bold"><?= $data = date('d/m/Y', strtotime($avac['data'])); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }
                }?>
                </div>
              </div>
              
           
            </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class=" modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color: #4400c2;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Avaliação</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  ">
          <form action="../area-cliente/avaliacao/processoAvaliacao.php" method="post">
            <input type="hidden" class="form-control" id="idDeletar" name="idDeletar" type="text">
            <input type="hidden" class="form-control" value="DELETE" name="acao" type="text">
            <p>Tem certeza que deseja excluir o item selcionado?
            <div class=" text-end">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-warning ms-3">Sim </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</dialog>

<script defer src="../js/iconPerfil.js"></script>



<script defer>
  function modPerfil() {
    const botaoPerfil = document.querySelector("#btPerfilDropdown");
    const modalPerfil = document.querySelector("#modalPerfil");
    const closePerfil = document.querySelector("#btClosePerfil");

    botaoPerfil.onclick = function() {
      modalPerfil.showModal();
      
    }
    closePerfil.onclick = function() {
      modalPerfil.close();
      
    }
  }
</script>

<script defer type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>

<!-- Para usar Mascara  -->
<script defer type="text/javascript" src="../../js/jquery.mask.min.js"></script>
<script defer type="text/javascript" src="../js/personalizar.js"></script>

<script defer src="../js/carrouselPerfil.js"></script>