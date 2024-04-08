<?php
require_once __DIR__ . '/../dao/AdminDao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutShow - Login Admin</title>
  <link rel="short icon" href="../../img/site/bola2.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/login-cadastro.css">
</head>

<body style="height: 100vh;">


  <div class="row h-100">
    <div class="col-sm-12 col-md-6" style="margin: auto;">

      <img src="../img/site/bola2.png" class="rounded img-fluid mx-auto d-block" style="width: 60%;" alt="...">
      <p class="text-center fw-bold">Administrador</p>
    </div>
    <div class="col-sm-12 col-md-6 login">
      <div class="h-100 d-flex flex-column">
        <div class="d-flex h-25  justify-content-center align-items-center">
          <p class="h2 text-white text-center">BEM VINDO(A)</p>
        </div>
        <div class="d-flex justify-content-center align-items-center bg-white boxForm rounded-5 ">
          <form class="w-100 p-3 p-md-4" method="post" action="#">
            <div class="d-flex flex-column gap-3">
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="d-flex flex-column">
                <div class="form-floating ">
                  <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Senha</label>
                </div>
                <div class="d-flex justify-content-end">

                  <small class="text-body" style="color: #4400c2 !important;">

                    <a href="" class="nav-link">Esqueceu sua senha?</a>
                  </small>
                </div>
              </div>

              <div class="checkbox ">
                <label>
                  <input type="checkbox" value="remember-me"> Lembre de mim
                </label>
              </div>
              <?php require_once '../area-admin/processLoginAdm.php' ?>
              <div class=" flex-column d-flex gap-5">
                <button class="w-100 btn btn-lg" style="background-color: #4400c2; color: white" type="submit">Entre</button>
                
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>