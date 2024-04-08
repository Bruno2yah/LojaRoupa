<?php
 require_once '../../dao/avaliacaoDao.php';
 require_once '../../model/Avaliacao.php';
 $avaliacao = new Avaliacao();

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $avaliacaoDao = avaliacaoDao::delete($_POST['idDeletar']);
        header("Location: ../home.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $avaliacao->setNota($_POST['crudEstrela']);
        $avaliacao->setComentario($_POST['comentario']);
        $avaliacao->setIdUsuario($_POST['idUsuario']);

        var_dump($_POST['comentario']);
     try {
    

      $avaliacaoDao = avaliacaoDao::insert($avaliacao);

      
      header("Location:../../area-cliente/home.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //  $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //  header("Location: register.php");
     } 
    break;
 

//   case 'SELECTID':

//     try {
//         $avaliacao = AvaliacaoDao::selectById($_POST['idAvaliacao']);
//         // Configura as opções do contexto da solicitação
//         include('register.php');
//     } catch (Exception $e) {
//         echo 'Exceção capturada: ',  $e->getMessage(), "\n";
//     } 

  
//     break;


  }




 

?>