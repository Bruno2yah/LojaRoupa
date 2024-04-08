<?php

class User{
    public $id, $nome, $sobrenome, $cpf, $email, $tel, $nasc, $senha, $foto, $token;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this -> id = $id;
    }

    public function getNome(){
        return $this-> nome;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getSobrenome(){
        return $this-> sobrenome;
    }

    public function setsobreNome($sobrenome){
        $this -> sobrenome = $sobrenome;
    }


    public function getcpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this -> cpf = $cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($tel){
        $this -> tel = $tel;
    }

    public function getNasc(){
        return $this->nasc;
    }

    public function setNasc($nasc){
        $this -> nasc = $nasc;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this -> senha = $senha;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this -> foto = $foto;
    }

    public function getToken(){
        return $this->token;
    }

    public function setToken($token){
        $this -> token = $token;
    }


    public function salvarImagem($novo_nome){

        //foto vem com extensão S_FiLES
        if(EMPTY($_FILES['foto']['size']) != 1){

            //pegar a extensão do arquivo
            if ($novo_nome ==""){
                //Criando um nome novo

                $novo_nome = md5(time()).".jpg";
            }

            //definindo o diretorio
            $diretorio =  '/xampp/htdocs/lojaRoupa/img/user/';
            

            //juntando o nome com diretório

            $nomeCompleto = $diretorio.$novo_nome;

            //efetuando o upload
            move_uploaded_file($_FILES ['foto']['tmp_name'], $nomeCompleto);

            return $novo_nome;
        } else{
            return $novo_nome;
        }


 
    }

    public function generateToken(){
        return bin2hex(random_bytes(16));
    }

    
}

?>