<?php
require_once '../autenticacaoAdm.php';
require_once("../../componentes/modal.php");
  require_once '../../dao/FornecedorDao.php';
  if(!empty($_POST)){
    $id_fornecedor = $fornecedorDao['idFornecedor'];
    $nome_fornecedor =  $fornecedorDao['nome'];
    $cnpj_fornecedor = $fornecedorDao['cnpj'];
    $numero_fornecedor = $fornecedorDao['numero'];
    $email_fornecedor = $fornecedorDao['email'];
    $imagem_fornecedor = $fornecedorDao['foto'];
    }else{
      $nome_fornecedor = '';
      $cnpj_fornecedor = '';
      $numero_fornecedor = '';
      $email_fornecedor = '';
      $imagem_fornecedor = '';
      $id_fornecedor = '';
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
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
              <input type="hidden" name="idfornecedor" id="idfornecedor" placeholder="id" value="<?=$id_fornecedor?>">
              <input type="hidden" name="foto" id="foto" placeholder="foto" value="<?=$imagem_fornecedor?>">
              <input type="hidden" value="<?=$id_fornecedor?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                <img id="preview" src="../../img/fornecedor/<?=$imagem_fornecedor!="" ? $imagem_fornecedor : 'semFoto.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="30" id="nome" value="<?=$nome_fornecedor?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cnpj" class="col-form-label">cnpj:</label>
                    <input type="text" class="form-control" name="cnpj" maxlength="14" id="cnpj"  value="<?=$cnpj_fornecedor?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="numero" class="col-form-label">numero:</label>
                    <input type="text" class="form-control" name="numero" maxlength="11" id="numero"   value="<?=$numero_fornecedor?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="50" id="email" value="<?=$email_fornecedor?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" enctype="multipart/form-data">
                  </div>
                </div>
                <div class=" text-end p-3">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="SALVAR">
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