<?php
    require_once __DIR__.'/../model/Conexao.php';
    
    
    class ProdutoDao{
        public static function insert($produto){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbproduto (nome, foto, preco, descricao, idTipoProduto, idMarca, idTamanhoProduto, idFornecedor, idClube) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getFoto());
            $stmt->bindValue(3, $produto->getPreco());
            $stmt->bindValue(4, $produto->getDescricao());
            $stmt->bindValue(5, $produto->getIdTipoProduto());
            $stmt->bindValue(6, $produto->getIdMarca());
            $stmt->bindValue(7, $produto->getIdTamanhoProduto());
            $stmt->bindValue(8, $produto->getIdFornecedor());
            $stmt->bindValue(9, $produto->getIdClube());
            $stmt->execute();
        }



        public static function selectAllProd(){
            if(isset($_GET['pagina']))
                $pagina =1;
                $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

            if(!$pagina)
                $pagina = 1;
            
                $limite = 9;

                $inicio = ($pagina * $limite) - $limite;
            
            $conexao = Conexao::conectar();
            $query = "SELECT idProduto, tbProduto.nome, tbProduto.foto, tbProduto.preco, tbProduto.descricao, tbmarca.nome as Marca, tbFornecedor.nome as Fornecedor FROM tbproduto INNER JOIN tbmarca on tbproduto.idMarca = tbmarca.idMarca  INNER JOIN tbfornecedor on tbproduto.idFornecedor = tbFornecedor.idFornecedor LIMIT $inicio, $limite";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public static function selectAll(){ 
            $conexao = Conexao::conectar();
            $query = "SELECT tbproduto.*, tbmarca.nome, tbfornecedor.nome
            FROM tbproduto
            INNER JOIN tbmarca ON tbproduto.idMarca = tbmarca.idMarca
            INNER JOIN tbfornecedor ON tbproduto.idFornecedor = tbfornecedor.idFornecedor";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            
            return $stmt->fetchAll();
        }

        

        public static function count(){
            $conexao = Conexao::conectar();
            $query = "SELECT COUNT(*) FROM tbproduto;";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_COLUMN);
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbproduto WHERE idProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function selectByIdDetails($id){
            $conexao = Conexao::conectar();
            $query = "SELECT tbproduto.*, tbmarca.nome as nomeMarca, tbtamanhoproduto.tamanho as tamProduto, tbclube.nome as clube FROM tbproduto INNER JOIN tbmarca ON tbproduto.idMarca = tbmarca.idMarca  INNER JOIN tbtamanhoProduto ON tbproduto.idTamanhoProduto=tbtamanhoproduto.idTamanhoProduto INNER JOIN tbclube ON tbproduto.idClube=tbclube.idClube WHERE idProduto = ?;";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbproduto WHERE idProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $produto){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbproduto SET 
            nome = ?, 
            foto = ?,
            preco = ?, 
            descricao = ?,
            idTipoProduto = ?,
            idMarca = ?,
            idTamanhoProduto = ?,
            idFornecedor = ?,
            idClube = ?
            WHERE idProduto = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $produto->getNome());
            $stmt->bindValue(2, $produto->getFoto());
            $stmt->bindValue(3, $produto->getPreco());
            $stmt->bindValue(4, $produto->getDescricao());
            $stmt->bindValue(5, $produto->getIdTipoProduto());
            $stmt->bindValue(6, $produto->getIdMarca());
            $stmt->bindValue(7, $produto->getIdTamanhoProduto());
            $stmt->bindValue(8, $produto->getIdFornecedor());
            $stmt->bindValue(9, $produto->getIdClube());
            $stmt->bindValue(10, $id);
            return $stmt->execute();
        }


    }
?>