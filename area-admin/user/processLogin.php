<?php 
require_once __DIR__ . '/../../dao/UserDao.php';

$userL = new UserDao();

// Verificar se o formulário foi enviado
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se os campos estão preenchidos
    if(!empty($email) && !empty($senha)) {
        // Verificar as credenciais usando a função checkCredentials
        $usuario = $userL->checkCredentials($email, $senha);

        if($usuario) {
            // Iniciar a sessão se não estiver iniciada
            if(!isset($_SESSION)) {
                session_start();
            } 

            
            // Atribuir informações do usuário à sessão
            $_SESSION['idUsuario'] = $usuario["idUsuario"];
            $_SESSION['foto'] = $usuario["foto"];
            $_SESSION['dataNascimento'] = $usuario["dataNascimento"];
            $_SESSION['cpf'] = $usuario["cpf"];
            $_SESSION['nome'] = $usuario["nome"];
            $_SESSION['sobrenome'] = $usuario["sobrenome"];
            $_SESSION['email'] = $usuario["email"];
            
          
            header("Location: ../../area-cliente/home.php");
        } else {
            echo "Usuário ou senha inválido(s)";
        }
    } else {
        echo "Preencha todos os campos";
    }
}
?>
