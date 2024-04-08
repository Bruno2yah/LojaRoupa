<?php 
    require_once __DIR__.'/../model/Conexao.php';

    class AdminDao{
        public static function insert($admin) {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbadmin (nome, sobrenome, email, senha, foto, token) VALUES (?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getEmail());
            $stmt->bindValue(4, $admin->getSenha());
            $stmt->bindValue(5, $admin->getFoto());
            $stmt->bindValue(6, $admin->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbadmin WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $admin){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbadmin SET 
            nome = ?, 
            sobrenome = ?, 
            email = ?, 
            senha = ?, 
            foto = ?,
            token = ? 
            WHERE idAdmin = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $admin->getNome());
            $stmt->bindValue(2, $admin->getSobrenome());
            $stmt->bindValue(3, $admin->getEmail());
            $stmt->bindValue(4, $admin->getSenha());
            $stmt->bindValue(5, $admin->getFoto());
            $stmt->bindValue(6, $admin->getToken());
            $stmt->bindValue(7, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }

        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadmin WHERE email = ? and senha = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

?>