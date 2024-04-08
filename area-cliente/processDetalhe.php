<?php
 require_once '../dao/ProdutoDao.php';
 require_once '../model/Produto.php';
 $produto = new Produto();




 switch ($_POST["acao"]) {
//   case 'DELETE':
//    try {
//         $produtoDao = ProdutoDao::delete($_POST['idDeletar']);
//         header("Location: index.php");
//     } catch (Exception $e) {
//       echo 'Exceção capturada: ',  $e->getMessage(), "\n";
//     }
//     break;

//   case 'SALVAR':
//     //pode validar as informações
//     $produto->setNome($_POST['nome']);
//     $produto->setFoto($produto->salvarImagem($_POST['foto'])); 
//     $produto->setPreco($_POST['preco']);
//     $produto->setDescricao($_POST['descricao']);
//     $produto->setidTipoProduto($_POST['idTipoProduto']);
//     $produto->setIdMarca($_POST['idMarca']);
//     $produto->setIdTamanhoProduto($_POST['idTamanhoProduto']);
//     $produto->setIdFornecedor($_POST['idFornecedor']);
//     $produto->setIdClube($_POST['idClube']);
    
//      try {
//       $produtoDao = ProdutoDao::insert($produto);
//       //  $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
//        header("Location: index.php");
//     } catch (Exception $e) {
//       echo 'Exceção capturada: ',  $e->getMessage(), "\n";
//       //  $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
//       //  header("Location: register.php");
//      } 
//     break;
//   case 'ATUALIZAR':
//         //pode validar as informações
//         $produto->setNome($_POST['nome']);
//         $produto->setFoto($produto->salvarImagem($_POST['foto'])); 
//         $produto->setPreco($_POST['preco']);
//         $produto->setDescricao($_POST['descricao']);
//         $produto->setidTipoProduto($_POST['idTipoProduto']);
//         $produto->setIdMarca($_POST['idMarca']);
//         $produto->setIdTamanhoProduto($_POST['idTamanhoProduto']);
//         $produto->setIdFornecedor($_POST['idFornecedor']);
//         $produto->setIdClube($_POST['idClube']);
//         try {
//           $produtoDao = ProdutoDao::update($_POST["idProduto"], $produto);
//           // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
//           header("Location: index.php");
//         } catch (Exception $e) {
//          echo 'Exceção capturada: ',  $e->getMessage(), "\n";

//         } 
//     break;

  case 'SELECTID':

    try {
        $produtoDao = ProdutoDao::selectByIdDetails($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('detalheProduto.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>