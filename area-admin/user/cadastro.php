<?php
require_once("../../componentes/modal.php");
  require_once '../../dao/UserDao.php';
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
  <title>FutShow - Cadastre-se</title>
  <link rel="short icon" href="../../img/site/bola2.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../../css/login-cadastro.css">

</head>

<body style="height: 100vh;">


  <div class="row h-100">
    <div class="col-sm-12 col-md-6" style="margin: auto;">
      <div class="d-flex boxLogo">
        <img src="../../img/site/bola2.png" class="rounded img-fluid   imagemLogo d-block" alt="...">
      </div>
    </div>
    <div class="col-sm-12 col-md-6 login">
      <div class="h-100 d-flex flex-column">
        <div class="d-flex justify-content-center align-items-center" style="height: 13vh;">
          <p class="h2 text-white text-center">CADASTRE-SE</p>
        </div>
        <div class="d-flex justify-content-center align-items-center bg-white w-100 boxFormulario" style="height: 82vh;">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
          <input type="hidden" name="idUser" id="idUser" placeholder="id" value="<?=$id_User?>">
          <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_User?>">
                <input type="hidden" value="<?=$id_User?'ATUALIZAR':'SALVAR'?>" name="acao" >
              <div class=" col-12 w-100">
                <div class="d-flex justify-content-end align-items-center flex-column">
                  <label for="foto" id="lbFoto">
                  <div class="rounded d-flex justify-content-end align-items-end my-3 ">
                    <img id="preview"  src="../../img/user/<?=$imagem_User!="" ? $imagem_User : 'add.png';?>" alt="..."
                    class="rounded-circle img-fluid "  style="height:200px; width: 200px; object-fit: cover; border:4px solid #4400c2; margin:auto; cursor: pointer;" >
                  </div>
                </label>
                </div>
                  <div class="col-12 w-100 justify-content-center align-items-center d-flex">
                      
                      <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" enctype="multipart/form-data">
                  </div>
              </div>

            
            
    
              
            <div class="row">
            <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome_User?>" required>
                    
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="sobrenome" class="col-form-label">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" maxlength="50" id="sobrenome"  value="<?=$sobrenome_User?>" required>
                    
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cpf" class="col-form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpf" maxlength="50" id="cpf" data-mask="000.000.000-00"  data-mask-selectonfocus="true"  value="<?=$cpf_User?>" required>
                    
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="nasc" id="nasc" value="<?=$nasc_User?>" required>

                  </div>
                </div>
                
                <div class="row">
                <div class="col-md-12">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="100" id="email" value="<?=$email_User?>" required>
                    
                  </div>
                  <div class="col-md-6">
                    <label for="senha" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" maxlength="10" id="senha" value="<?=$password_User?>"required>
                    
                  </div>
                  <div class="col-md-6">
                    <label for="senha" class="col-form-label">Confirme a Senha:</label>
                    
                    <input type="password" class="form-control" name="senha" maxlength="10" id="senha" value="<?=$password_User?>"required>
                  </div>
            </div>
            <div class="d-flex w-100 justify-content-center align-items-center my-3">
            
              <input type="submit"class="w-75 btn btn-lg cadastro" style="background-color: #4400c2; color: white" value="SALVAR">
              
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
  <script type="text/javascript" src="../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="../../js/personalizar.js"></script>
</body>

</html>
