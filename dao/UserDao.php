<?php

    require_once __DIR__.'/../model/conexao.php';
    
    class UserDao{
        public static function insert($user){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbusuario (nome, sobrenome, dataNascimento, cpf, email, senha, foto, token) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(4, $user->getCPF());
            $stmt->bindValue(3, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getSenha());
            $stmt->bindValue(7, $user->getFoto());
            $stmt->bindValue(8, $user->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbusuario";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbusuario WHERE idUsuario = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbusuario WHERE idUsuario = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $user ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbusuario SET 
            nome = ?, 
            sobrenome = ?, 
            cpf  = ?,
            dataNascimento = ?, 
            email = ?, 
            senha = ?, 
            foto = ?,
            token = ? 
            WHERE idUsuario = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(3, $user->getCPF());
            $stmt->bindValue(4, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getSenha());
            $stmt->bindValue(7, $user->getFoto());
            $stmt->bindValue(8, $user->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbusuario WHERE email = ? and senha = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>