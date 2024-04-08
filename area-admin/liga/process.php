<?php
 require_once '../../dao/LigaDao.php';
 require_once '../../model/Liga.php';
 $liga = new Liga();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $ligaDao = LigaDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $liga->setNome($_POST['nome']);
    $liga->setDivisao($_POST['divisao']);
    $liga->setIdPais($_POST['idPais']);
    $liga->setFoto($liga->salvarImagem($_POST['foto'])); 
     try {
      $ligaDao = LigaDao::insert($liga);
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
        $liga->setNome($_POST['nome']);
        $liga->setDivisao($_POST['divisao']);
        $liga->setIdPais($_POST['idPais']);
        $liga->setFoto($liga->salvarImagem($_POST['foto'])); 
        try {
          $ligaDao = LigaDao::update($_POST["idLiga"], $liga);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $ligaDao = ligaDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>