<?php
 require_once '../../dao/MarcaDao.php';
 require_once '../../model/Marca.php';
 $marca = new Marca();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $paisDao = MarcaDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $marca->setNome($_POST['nome']);
    $marca->setFoto($marca->salvarImagem($_POST['foto'])); 
     try {
      $MarcaDao = MarcaDao::insert($marca);
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
        $marca->setNome($_POST['nome']);
        $marca->setFoto($marca->salvarImagem($_POST['foto'])); 
        try {
          $MarcaDao = MarcaDao::update($_POST["idMarca"], $marca);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $MarcaDao = MarcaDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>