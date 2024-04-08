<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../dao/ProdutoDao.php';


if(!empty($_POST)){
    $id_Produto = $produtoDao['idProduto'];
    $nome_Produto =  $produtoDao['nome'];
    $foto_Produto =  $produtoDao['foto'];
    $preco_Produto =  $produtoDao['preco'];
    $descricao_Produto =  $produtoDao['descricao'];
    $tipo_Produto =  $produtoDao['idTipoProduto'];
    $marca_Produto =  $produtoDao['nomeMarca'];
    $tamanho_Produto =  $produtoDao['tamProduto'];
    $clube_Produto =  $produtoDao['clube'];
    

    }else{
      $id_Produto = '';
      $nome_Produto = '';
      $foto_Produto = '';
      $preco_Produto = '';
      $descricao_Produto = '';
      $tipo_Produto = '';
      $marca_Produto = '';
      $tamanho_Produto = '';
      $clube_Produto = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutTorcida - Detalhes</title>
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

<body style="justify-content: center; align-items: center; height: 100vh ">

    <?php
    if (isset($_SESSION['idUsuario'])) {
        include('./../componentes/header-cliente-logado.php');
    } else {
        include('./../componentes/header-cliente.php');
    }
    ?>
    <div class="container-fluid container00 container01" style="margin: auto;">
        <div class="container " style="height:600px;border: 1px solid; border-left-color:#6D15DD; border-right-color:#6D15DD;border-top-color:transparent; border-bottom-color:transparent;">
            <div class="row h-75">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="../img/product/produto/<?=$foto_Produto?>" alt="" class="h-75 w-75 img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="h1"><?=$nome_Produto?></p>


                    <div class="d-flex justify-content-center  flex-column h-50">

                        <ul class="fw-bold">Tamanho: <?=$tamanho_Produto?></ul>
                        <ul class="fw-bold">Marca: <?=$marca_Produto?></ul>
                        <ul class="fw-bold">Clube: <?=$clube_Produto?></ul>
                        <ul class="text-center">
                    </div>
                    <div class=" flex-column d-flex gap-5 justify-content-center align-items-center">
                <button class="w-50 btn btn-lg" style="background-color: #4400c2; color: white" type="submit">Adicionar ao Carrinho<i class="fas fa-cart-plus"></i></button>
                
              </div>
              
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <p class="h3">Descrição</p>
                    <p class="text-justify"><?=$descricao_Produto?></p>
                </div>
            </div>
            </div>
        </div>
        
    </div>


    <?php
    include '../componentes/footer-cliente.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/carrousel.js"></script>
</body>

</html>