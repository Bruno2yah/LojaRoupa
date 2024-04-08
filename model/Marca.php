<?php

class Marca{
    public $id, $nome, $foto;

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
            $diretorio = '/xampp/htdocs/lojaRoupa/img/site/marca/';
            

            //juntando o nome com diretório

            $nomeCompleto = $diretorio.$novo_nome;

            //efetuando o upload
            move_uploaded_file($_FILES ['foto']['tmp_name'], $nomeCompleto);

            return $novo_nome;
        } else{
            return $novo_nome;
        }


 
    }
    
}

?>