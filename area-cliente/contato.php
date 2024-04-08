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
  <title>FutTorcida - Contato</title>
  <link rel="short icon" href="./../img/site/bola2.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

    <?php
  if(isset($_SESSION['idUsuario'])) {
    include('./../componentes/header-cliente-logado.php');

  }else{
    include ('./../componentes/header-cliente.php');
  }
  ?>

<div class="container">
  <div class="" style="border-top: 0;
border-right: 1px solid #6D15DD;
border-bottom: 0;
border-left: 1px solid #6D15DD;">
 <div class="row h-25">
   <span id="contato" class="mx-2 h5 text-center" style="font-weight: 500;">CONTATE-NOS</span>
  <div class="d-flex justify-content-center align-items-center">
    <div class="w-50">
      <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center bordaSepara">
        <form action="" class="d-flex flex-column gap-5" style="width: 95%;">
          <div class="form-floating mb-3">
            <input type="text" class="form-control contato" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nome</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control contato" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating h-25">
            <textarea class="form-control textAreaContato" placeholder="Leave a comment here" id="floatingTextarea" style="resize: none;height: 20vh;"></textarea>
            <label for="floatingTextarea">Comentario</label>
          </div>
          <div class="d-flex justify-content-center aling-items-center ">
          <button class="w-100 btn btn-lg" style="background-color: #4400c2; color: white" type="submit">Enviar</button>
          </div>
          
        </form>
      </div>
      
      
    </div>
  </div>
</div>
</div>
</div>

  <?php 
      include('./../componentes/footer-cliente.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>