<?php
require_once '../autenticacaoAdm.php';
  require_once("../../componentes/modal.php");
  require_once '../../dao/ProdutoDao.php';
  require_once '../../dao/TipoProdutoDao.php';
  require_once '../../dao/MarcaDao.php';
  require_once '../../dao/TamanhoProdutoDao.php';
  require_once '../../dao/FornecedorDao.php';
  require_once '../../dao/ClubeDao.php';

  $tipo = TipoProdutoDao::selectAll();
  $marca = MarcaDao::selectAll();
  $tamanho = TamanhoProdutoDao::SelectAll();
  $fornecedor = FornecedorDao::SelectAll();
  $clube = ClubeDao::SelectAll();

  if(!empty($_POST)){
    $id_Produto = $produtoDao['idProduto'];
    $nome_Produto =  $produtoDao['nome'];
    $foto_Produto =  $produtoDao['foto'];
    $preco_Produto =  $produtoDao['preco'];
    $descricao_Produto =  $produtoDao['descricao'];
    $tipo_Produto =  $produtoDao['idTipoProduto'];
    $marca_Produto =  $produtoDao['idMarca'];
    $tamanho_Produto =  $produtoDao['idTamanhoProduto'];
    $fornecedor_Produto =  $produtoDao['idFornecedor'];
    $clube_Produto =  $produtoDao['idClube'];
    

    }else{
      $id_Produto = '';
      $nome_Produto = '';
      $foto_Produto = '';
      $preco_Produto = '';
      $descricao_Produto = '';
      $tipo_Produto = '';
      $marca_Produto = '';
      $tamanho_Produto = '';
      $fornecedor_Produto = '';
      $clube_Produto = '';
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
              <input type="hidden" name="idProduto" id="idProduto" placeholder="id" value="<?=$id_Produto?>">
              <input type="hidden" name="foto" id="foto" placeholder="foto" value="<?=$foto_Produto?>">
              <input type="hidden" value="<?=$id_Produto?'ATUALIZAR':'SALVAR'?>" name="acao" >
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2   text-center">
                <div class="bg-white rounded">
                <img id="preview" src="../../img/product/produto/<?=$foto_Produto!="" ? $foto_Produto : 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nome" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" maxlength="70" id="nome" value="<?=$nome_Produto?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="preco" class="col-form-label">Preço:</label>
                    <input type="text" class="form-control" name="preco"  id="preco" data-mask="000,00"  data-mask-selectonfocus="true" value="<?=$preco_Produto?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="descricao" class="col-form-label">Descricao:</label>
                    <input type="text" class="form-control" name="descricao" maxlength="200" id="descricao" value="<?=$descricao_Produto?>" required>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                  <select name = idTipoProduto class="form-select" required>
                      <option value = "" disabled selected>Selecione o tipo</option>
                      <?php foreach($tipo as $tipo) {?>
                        <option value = <?=$tipo[0]?>><?=$tipo[1]?></option>
                      <?php }?>
                    </select>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3">
                  <select name = idMarca class="form-select" required>
                      <option value = "" disabled selected>Selecione a marca</option>
                      <?php foreach($marca as $marca) {?>
                        <option value = <?=$marca[0]?>><?=$marca[1]?></option>
                      <?php }?>
                    </select>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-3">
                  <select name = idTamanhoProduto class="form-select" required>
                      <option value = "" disabled selected>Selecione o tamanho</option>
                      <?php foreach($tamanho as $tamanho) {?>
                        <option value = <?=$tamanho[0]?>><?=$tamanho[1]?></option>
                      <?php }?>
                    </select>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-4">
                  <select name = idFornecedor class="form-select" required>
                      <option value = "" disabled selected>Selecione o fornecedor</option>
                      <?php foreach($fornecedor as $fornecedor) {?>
                        <option value = <?=$fornecedor[0]?>><?=$fornecedor[1]?></option>
                      <?php }?>
                    </select>
                    <div class="invalid-feedback">
                     Preencha o campo
                    </div>
                  </div>
                  <div class="col-md-4">
                  <select name = idClube class="form-select" required>
                      <option value = "" disabled selected>Selecione o clube</option>
                      <?php foreach($clube as $clube) {?>
                        <option value = <?=$clube[0]?>><?=$clube[1]?></option>
                      <?php }?>
                    </select>
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