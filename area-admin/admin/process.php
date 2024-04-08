<?php
 require_once '../../dao/AdminDao.php';
 require_once '../../model/Admin.php';
 $admin = new Admin();

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $adminDao = adminDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $admin->setNome($_POST['nome']);
    $admin->setSobrenome($_POST['sobrenome']);
    $admin->setEmail($_POST['email']);
    $admin->setSenha($_POST['senha']);
    $admin->setFoto($admin->salvarImagem($_POST['nomeFoto'])); 
    $admin->setToken($admin->generateToken());
     try {
      $adminDao = AdminDao::insert($admin);
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
        $admin->setNome($_POST['nome']);
        $admin->setSobrenome($_POST['sobrenome']);
        $admin->setEmail($_POST['email']);
        $admin->setSenha($_POST['senha']);
        $admin->setFoto($admin->salvarImagem($_POST['nomeFoto'])); 
        $admin->setToken($admin->generateToken());
        try {
          $adminDao = AdminDao::update($_POST["idUser"], $admin);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $adminDao = AdminDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>