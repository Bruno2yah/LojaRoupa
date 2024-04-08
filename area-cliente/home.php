<?php 
if(!isset($_SESSION)) {
  session_start();
}
 


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutShow - A loja do Apaixonado por Futebol</title>
  <link rel="short icon" href="./../img/site/bola2.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">


  <?php
  if(isset($_SESSION['idUsuario'])) {
    include('./../componentes/header-cliente-logado.php');

  }else{
    include ('./../componentes/header-cliente.php');
  }
  ?>


  <div class="container-fluid titleImg p-0" data-aos="fade-up" data-aos-duration="1500">
    <div class="col-12 mx-auto">
      <img src="../img/site/propaganda.jpg" class="propaganda img-fluid" alt="">
    </div>
  </div>
  <div class="container titlePadding" data-aos="fade-down" data-aos-duration="1500">
    <p class="h1 mt-5 text-center">
      Destaques
      <hr class="d-flex mx-auto my-0">
    </p>
    <div class="justify-content-evenly flex-row d-flex">
      <div class="boxDestaque row w-100">
        <div class="card col-4 col-sm-12" style="width: 18rem;">
          <img class="card-img-top" src="../img/product/al nassr.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-title">Camisa Inter Nassr Temporada 22/23</p>
            <h5 class="card-text" style="text-decoration-line:line-through;">De: R$ 179,99</h5>
            <h5 class="card-title">Para:129,99</h5>
            <div class="text-end">
              <a href="./detalheProduto.php" class="btn" style="background-color: #4400c2; color: white;">Comprar</a>
            </div>
          </div>
        </div>

        <div class="card col-4 col-sm-12" style="width: 18rem;">
          <img class="card-img-top" src="../img/product/camisa Al hilal.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-title">Camisa Al Hilal Temporada 22/23</p>
            <h5 class="card-text" style="text-decoration-line:line-through;">De: R$ 179,99</h5>
            <h5 class="card-title">Para:129,99</h5>
            <div class="text-end">
              <a href="#" class="btn" style="background-color: #4400c2; color: white;">Comprar</a>
            </div>
          </div>
        </div>

        <div class="card col-4 col-sm-12" style="width: 18rem;">
          <img class="card-img-top" src="../img/product/Inter Miami.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-title">Camisa Inter Miami Temporada 22/23</p>
            <h5 class="card-text" style="text-decoration-line:line-through;">De: R$ 179,99</h5>
            <h5 class="card-title">Para:R$ 129,99</h5>
            <div class="text-end">
              <a href="#" class="btn" style="background-color: #4400c2; color: white;">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container titlePadding my-5 text-center" data-aos="fade-down" data-aos-duration="1500">
    <p class="h1">Sobre Nós
      <hr class="d-flex mx-auto my-0">
    </p>
    <p class="text-justify" id="lauchComing">Especializada em camisas de futebol e artigos esportivos, a loja virtual surgiu em 2023 na Etec de Guianases (SP) e reúne uniformes completos dos mais variados clubes brasileiros, internacionais e seleções - dos mais consagrados aos menos conhecidos. Com a maior variedade em camisas de times de futebol no mercado nacional, a FutTorcida trabalha em parceria com as principais marcas esportivas para comercializar somente produtos originais e com garantia de qualidade.</p>
    
      <iframe class="w-100 mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1087.3594214660766!2d-46.40006650312933!3d-23.553118842240927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce65086cafaf55%3A0xf7da96815e7611da!2sETEC%20de%20Guaianazes!5e0!3m2!1spt-BR!2sbr!4v1700375495269!5m2!1spt-BR!2sbr" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
  </div>

  <div class="container titlePadding my-3 justify-content-center align-items-center flex-column text-center justify-content-center d-flex" style="height: 35vh;" data-aos="fade-down" data-aos-duration="1500">
    <div class="flex-column gap-2 d-flex justify-content-center align-items-center">
      <div class="mt-5">
        <p class="h1 text-center">Avaliações da Loja
          <hr class="d-flex mx-auto my-0">
        </p>
      </div>
      <?php include './avaliacao/modalAvaliacao.php'; ?>
    </div>
    <?php
    include './avaliacao/index.php';



    ?>
    </div>
    <?php
    include '../componentes/footer-cliente.php';
    ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="../js/icons.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../js/carrousel.js"></script>
</body>

</html>