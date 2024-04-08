<?php

class Produto{
    public $id, $nome, $preco, $foto, $descricao, $idTipoProduto, $idMarca, $idTamanhoProduto, $idFornecedor, $idClube;

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

    public function getPreco(){
        return $this-> preco;
    }

    public function setPreco($preco){
        $this -> preco = $preco;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this -> foto = $foto;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this -> descricao = $descricao;
    }
    
    public function getIdTipoProduto(){
        return $this->idTipoProduto;
    }

    public function setIdTipoProduto($idTipoProduto){
        $this -> idTipoProduto = $idTipoProduto;
    }
    public function getIdMarca(){
        return $this->idMarca;
    }

    public function setIdMarca($idMarca){
        $this -> idMarca = $idMarca;
    }
    public function getIdTamanhoProduto(){
        return $this->idTamanhoProduto;
    }

    public function setIdTamanhoProduto($idTamanhoProduto){
        $this -> idTamanhoProduto = $idTamanhoProduto;
    }
    public function getIdFornecedor(){
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor){
        $this -> idFornecedor = $idFornecedor;
    }
    public function getIdClube(){
        return $this->idClube;
    }

    public function setIdClube($idClube){
        $this -> idClube = $idClube;
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
            $diretorio = '/xampp/htdocs/lojaRoupa/img/product/produto/';
            

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