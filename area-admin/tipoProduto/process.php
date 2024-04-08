<?php
 require_once '../../dao/TipoProdutoDao.php';
 require_once '../../model/TipoProduto.php';
 $tipoProduto = new TipoProduto();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $tipoProduto = TipoProdutoDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $tipoProduto->setTipo($_POST['tipo']);
     try {
      $tipoProduto = TipoProdutoDao::insert($tipoProduto);
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
        $tipoProduto->setTipo($_POST['tipo']);
        try {
          $tipoProduto = TipoProdutoDao::update($_POST["idTipoProduto"], $tipoProduto);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $tipoProduto = TipoProdutoDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>