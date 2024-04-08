<?php
 require_once '../../dao/FornecedorDao.php';
 require_once '../../model/Fornecedor.php';
 $fornecedor = new Fornecedor();

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $fornecedorDao = FornecedorDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $fornecedor->setNome($_POST['nome']);
    $fornecedor->setCnpj($_POST['cnpj']);
    $fornecedor->setNumero($_POST['numero']);
    $fornecedor->setEmail($_POST['email']);
    $fornecedor->setFoto($fornecedor->salvarImagem($_POST['foto'])); 
     try {
      $fornecedorDao = FornecedorDao::insert($fornecedor);
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
        $fornecedor->setNome($_POST['nome']);
        $fornecedor->setCnpj($_POST['cnpj']);
        $fornecedor->setNumero($_POST['numero']);
        $fornecedor->setEmail($_POST['email']);
        $fornecedor->setFoto($fornecedor->salvarImagem($_POST['foto'])); 
        try {
          $fornecedorDao = FornecedorDao::update($_POST["idfornecedor"], $fornecedor);
          // $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $fornecedorDao = FornecedorDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>