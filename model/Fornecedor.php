<?php

class Fornecedor{
    public $id, $nome, $cnpj, $email, $numero, $foto;

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

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this -> cnpj = $cnpj;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this -> numero = $numero;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this -> foto = $foto;
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
            $diretorio =  '/xampp/htdocs/lojaRoupa/img/fornecedor/';
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