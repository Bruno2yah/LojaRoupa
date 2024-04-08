<?php
 require_once '../../dao/ClubeDao.php';
 require_once '../../model/Clube.php';
 $clube = new Clube();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $clubeDao = ClubeDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $clube->setNome($_POST['nome']);
    $clube->setApelido($_POST['apelido']);
    $clube->setIdLiga($_POST['idLiga']);
    $clube->setFoto($clube->salvarImagem($_POST['foto'])); 
     try {
      $clubeDao = ClubeDao::insert($clube);
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
        $clube->setNome($_POST['nome']);
        $clube->setApelido($_POST['apelido']);
        $clube->setIdLiga($_POST['idLiga']);
        $clube->setFoto($clube->salvarImagem($_POST['foto'])); 
        try {
          $clubeDao = ClubeDao::update($_POST["idClube"], $clube);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $clubeDao = ClubeDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>