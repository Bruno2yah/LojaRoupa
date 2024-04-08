<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de produtos - Adm</title>
  <link rel="short icon" href="./../../img/site/bola2.png" />
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
              <strong>Registro de produtos</strong>
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                  <img id="preview" src="../../img/user/camisa-padrao.jpg" alt="..." class=" w-75">
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    
                    <label for="nome-camisa" class="col-form-label">Nome da camisa:</label>
                    <input type="text" class="form-control" name="nome-camisa" maxlength="50" id="nome-camisa"required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="temporada" class="col-form-label">Temporada:</label>
                    <input type="text" class="form-control" name="temporada" maxlength="50" id="temporada"required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="preco" class="col-form-label">Preço: </label>
                    <input type="text" class="form-control" name="preco" maxlength="50" id="preco" data-mask="000.00" placeholder="R$"  data-mask-selectonfocus="true" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="clube" class="col-form-label">Clube:</label>
                    <input type="text" class="form-control" name="clube" id="clube" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="liga" class="col-form-label">Liga:</label>
                    <input type="text" class="form-control" name="liga" maxlength="100" id="liga" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="marca" class="col-form-label">marca:</label>
                    <select class="form-select" aria-label="Default select example" name="marca" id="marca" required>
                      <option selected disabled>Nike</option>
                      <option value="1">Adidas</option>
                      <option value="2">Puma</option>
                      <option value="3">Kappa</option>
                      <option value="4">Umbro</option>
                    </select>
                    <!-- <input type="text" class="form-control" name="senha" maxlength="10" id="senha" required> -->
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                </div>
                <div class=" text-end p-3">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar" name="acao">
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