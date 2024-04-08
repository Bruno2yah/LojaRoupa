<?php
 require_once '../../dao/PaisDao.php';
 require_once '../../model/Pais.php';
 $pais = new Pais();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $paisDao = PaisDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $pais->setNome($_POST['nome']);
    $pais->setFoto($pais->salvarImagem($_POST['foto'])); 
     try {
      $paisDao = PaisDao::insert($pais);
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
        $pais->setNome($_POST['nome']);
        $pais->setFoto($pais->salvarImagem($_POST['foto'])); 
        try {
          $paisDao = PaisDao::update($_POST["idPais"], $pais);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $paisDao = PaisDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>