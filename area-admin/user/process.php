<?php
 require_once __DIR__.'/../../dao/UserDao.php';
 require_once __DIR__.'/../../model/User.php';
 $user = new User();




 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $userDao = UserDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $user->setNome($_POST['nome']);
    $user->setSobrenome($_POST['sobrenome']);
    $user->setNasc($_POST['nasc']);
    $user->setCpf($_POST['cpf']);
    $user->setEmail($_POST['email']);
    $user->setSenha($_POST['senha']);
    $user->setFoto($user->salvarImagem($_POST['nomeFoto'])); 
    $user->setToken($user->generateToken());
     try {
      $userDao = UserDao::insert($user);
      //  $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
       header("Location: login.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //  $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //  header("Location: register.php");
     } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $user->setNome($_POST['nome']);
        $user->setSobrenome($_POST['sobrenome']);
        $user->setCPF($_POST['cpf']);
        $user->setNasc($_POST['nasc']);
        $user->setEmail($_POST['email']);
        $user->setSenha($_POST['senha']);
        $user->setFoto($user->salvarImagem($_POST['nomeFoto'])); 
        $user->setToken($user->generateToken());
        try {
          $userDao = UserDao::update($_POST["idUser"], $user);
        
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: ../../area-cliente/home.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

    case 'SELECTID':

      try {

        
          $userDao = UserDao::selectById($_POST['id']);
          // Configura as opções do contexto da solicitação
          
          include('../../area-cliente/modalUpdatePerfil.php');
      } catch (Exception $e) {
          echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      } 
  
    
      break;
  


  }




 

?>