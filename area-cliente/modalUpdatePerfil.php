<?php
if(!isset($_SESSION)) {
  session_start();
}
 
  require_once __DIR__.'/../dao/UserDao.php';

  if(!empty($_POST)){
    $id_User = $userDao['idUsuario'];
    $nome_User =  $userDao['nome'];
    $sobrenome_User = $userDao['sobrenome'];
    $cpf_User = $userDao['cpf'];
    $nasc_User= $userDao['dataNascimento'];
    $email_User = $userDao['email'];
    $password_User = $userDao['senha'];
    $imagem_User = $userDao['foto'];
    }else{
      $nome_User = '';
      $sobrenome_User = '';
      $cpf_User = '';
      $nasc_User= '';
      $email_User = '';
      $password_User = '';
      $imagem_User = '';
      $id_User = '';
    }



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutShow - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->

</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100vw">

  <div class="container justify-content-center align-items-center d-flex" style="height: 90vh">
    <div class="row h-100 w-100 justify-content-center align-items-center d-flex">
     
      <div class="col-md-10  p-4 w-100">
        <div class="card" style="border-color: #4400c2;">
          <form method="post" action="/lojaroupa/area-admin/user/process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header" style = "background-color: #4400c2; color: white;">
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
              <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome fotoid" value="<?=$id_User?>">
              <input type="hidden" name="idUser" id="idUser" placeholder="id" value="<?=$id_User?>">
              <input type="hidden" value="<?=$id_User?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2 text-center">
                <div class="bg-white rounded">
                <label for = "foto" style="cursor: pointer;">
                <img id="preview" src="../../img/user/<?=$imagem_User!="" ? $imagem_User : 'padrao.png';?>" alt="..."
                    class="rounded w-100"  style="height:180px; object-fit: cover; border:4px solid #4400c2; margin-bottom: 65%" >
                </label>
                    <input type="file" id="foto" name="foto" accept="image/*" style ="display: none;" enctype="multipart/form-data">
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" style="border-color: #4400c2;" name="nome" maxlength="50" id="nome" value="<?=$nome_User?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="sobrenome" class="col-form-label">Sobrenome:</label>
                    <input type="text" class="form-control" style="border-color: #4400c2;" name="sobrenome" maxlength="50" id="sobrenome"  value="<?=$sobrenome_User?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">CPF:</label>
                    <input type="text" class="form-control" style="border-color: #4400c2;" name="cpf" maxlength="50" id="cpf" data-mask="000.000.000-00"  data-mask-selectonfocus="true"  value="<?=$cpf_User?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" style="border-color: #4400c2;" name="nasc" id="nasc" value="<?=$nasc_User?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" style="border-color: #4400c2;" name="email" maxlength="100" id="email" value="<?=$email_User?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="senha" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" style="border-color: #4400c2;" name="senha" maxlength="10" id="senha" value="<?=$password_User?>"required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    
                  </div>
                </div>
                <div class=" text-end p-3">
                  <a class="btn px-3" role="button" style="border-color: #4400c2; color: black;" aria-disabled="true" href="./../../area-cliente/home.php">Voltar</i></a>
                  <input type="submit" class="btn" style="background-color: #4400c2; color: white;" value="SALVAR">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>

</body>

</html>


<!--
   enctype="multipart/form-data"(Para passar informações para outro formulário) 


   class="needs-validation" novalidate(para dizer que o formulario precisa ser validado, tem que ter required nos inputs)


   class="invalid-feedback" (qnd o ofmrulario estiver invalido, ele fa zaparecer uma mensagem )

-->