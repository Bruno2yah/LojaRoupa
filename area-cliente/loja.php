<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once '../dao/PaisDao.php';
$pais = PaisDao::selectAll();


require_once '../dao/ProdutoDao.php';
$produto = ProdutoDao::selectAllProd();

$countProd = ProdutoDao::count();


// Adicione esta linha para obter o valor de 'pagina'
$pagina = isset($_GET['pagina']) ? filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT) : 1 ?? null;




$limit = $countProd / 9;




if ($limit % $countProd != 0) {
  $limit = round($limit);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutTorcida - Loja</title>
  <link rel="short icon" href="./../img/site/bola2.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body style="justify-content: center; align-items: center; height: 100% ">

  <?php
  if (isset($_SESSION['idUsuario'])) {
    include('./../componentes/header-cliente-logado.php');
  } else {
    include('./../componentes/header-cliente.php');
  }
  ?>
  <div class=" w-100">
    <div class="container">
      <p class="h1 mt-5 text-center">
        Países
        <hr class="d-flex mx-auto my-0">
      </p>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($pais as $pais) { ?>
            <div class="swiper-slide" style=" margin:auto">
              <div class=" h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $pais['idPais'] ?>">
                <img id="preview" src="../img/product/pais/<?= $pais['foto'] ?>" alt="..." class="rounded-circle img-fluid " style="height:150px; width: 150px; object-fit: cover; border:4px solid #4400c2;">
              </div>
            </div>
          <?php
            // var_dump($pais['foto']);
          } ?>
        </div>
      </div>
    </div>
    <div class="w-100">

      <div class="container">
        
      <p class="h1 mt-5 text-center">
        Geral
        <hr class="d-flex mx-auto my-0">
      </p>
      <div class="px-lg-5 py-lg-2">
        <div class="row py-5 justify-content-evenly gap-5">
          <?php foreach ($produto as $produto) { ?>
            <!-- Gallery item -->
            <div class="card col-4 col-sm-12" style="width: 18rem;">
              <img class="card-img-top" src="../img/product/produto/<?= $produto['foto'] ?>" alt="Card image cap" style="width: 300px; height: 300px">
              
              <div class="card-body">
                <p class="card-title"><?= $produto['nome'] ?></p>
                
                <h5 class="card-title">R$ <?= $produto['preco'] ?></h5>
                <div class="d-flex justify-content-end align-items-center">
                  <form action="../area-cliente/processDetalhe.php" method="POST">
                  <input type="hidden" class="form-control" id="acao" name="acao" value="SELECTID">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$produto['idProduto']?>">
                    <button href="#" class="btn justify-content-center align-items-center" style="background-color: #4400c2; color: white;">Ver Mais</button>
                  </form>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <ul class="pagination justify-content-center mb-2 gap-2 ">
            <li class="page-item">
              <a href="?pagina=<?= $pagina <= 1 ? 1 : $pagina - 1 ?>" class="page-link border-1 rounded-3 <?= $pagina <= 1 ?  'disabled' : '' ?>" style="color: #4400c2; border-color: #4400c2">
                <span class="">Anterior</span>
              </a>
            </li>
            
            <li class="page-item active">
              <a href="?pagina=<?= $pagina ?>" class="page-link bg-white  border-1  rounded-circle" style="color: #4400c2; border-color: #4400c2"><?= $pagina ?></a>
          </li>
          
          <li class="page-item">
            
            <a href="?pagina=<?= $pagina + 1 ?>" class="page-link border-1 rounded-3  <?= $limit == $pagina ? 'disabled' : '' ?>" style="color: #4400c2; border-color: #4400c2">
              <span class="">Próximo</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
        <?php
        include '../componentes/footer-cliente.php';
        ?>
  </div>
  </div>
  

  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../js/carrousel.js"></script>
</body>

</html>