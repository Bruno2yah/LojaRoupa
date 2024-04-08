<?php
 require_once '../../dao/TamanhoProdutoDao.php';
 require_once '../../model/TamanhoProduto.php';
 $tamanhoProduto = new TamanhoProduto();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $tamanhoProduto = TamanhoProdutoDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $tamanhoProduto->setTamanho($_POST['tamanho']);
     try {
      $tamanhoProduto = TamanhoProdutoDao::insert($tamanhoProduto);
      //  $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
       header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //  $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //  header("Location: register.php");
     } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $tamanhoProduto->setTamanho($_POST['tamanho']);
        try {
          $tamanhoProduto = TamanhoProdutoDao::update($_POST["idTamanhoProduto"], $tamanhoProduto);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $tamanhoProduto = TamanhoProdutoDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>