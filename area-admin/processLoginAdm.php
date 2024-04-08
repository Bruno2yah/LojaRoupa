<?php 
require_once __DIR__ . '/../dao/AdminDao.php';

$adminL = new AdminDao();

// Verificar se o formulário foi enviado
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se os campos estão preenchidos
    if(!empty($email) && !empty($senha)) {
        // Verificar as credenciais usando a função checkCredentials
        $admin = $adminL->checkCredentials($email, $senha);

        if($admin) {
            // Iniciar a sessão se não estiver iniciada
            if(!isset($_SESSION)) {
                session_start();
            } 

            
            // Atribuir informações do usuário à sessão
            $_SESSION['idAdmin'] = $admin["idAdmin"];
            $_SESSION['foto'] = $admin["foto"];
            $_SESSION['dataNascimento'] = $admin["dataNascimento"];
            $_SESSION['cpf'] = $admin["cpf"];
            $_SESSION['nome'] = $admin["nome"];
            $_SESSION['sobrenome'] = $admin["sobrenome"];
            $_SESSION['email'] = $admin["email"];
            
            
          
            header("Location: ../area-admin/user/index.php");
        } else {
            echo "Usuário ou senha inválido(s)";
        }
    } else {
        echo "Preencha todos os campos";
    }
}
?>
