<?php

    class Produto {

        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao->getCon();
        }
        function listarProdutos() {
            $produtos = array();
    
            $resultado = mysqli_query($this->conexao,"SELECT p.*,c.nome as cat_nome FROM produtos as p INNER JOIN categorias AS c ON c.id = p.categoria_id");
    
            while ($row = mysqli_fetch_assoc($resultado)) {
                array_push($produtos,$row);
            }
            return $produtos;
        }
    
        function buscarProdutoID($id) {
    
            $resultado = array();
        
            $sql = "SELECT * FROM produtos WHERE id='$id'";
            $query = mysqli_query($this->conexao,$sql);
    
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($resultado,$row);
            }
            return $resultado;
        }
    
        function buscarCategorias() {
            $resultado = array();
        
            $sql = "SELECT * FROM categorias";
            $query = mysqli_query($this->conexao,$sql);
    
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($resultado,$row);
            }
            return $resultado;
        }
    
        function alterarProduto($id,$nome,$preco,$descricao,$categoria_id) {
            $query = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao', categoria_id='$categoria_id' WHERE id='$id'";
            return mysqli_query($this->conexao,$query);
        }
    
        function adicionarProduto($nome,$preco,$descricao,$categoria) {
            $query = "INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('$nome','$preco','$descricao','$categoria')";
            return mysqli_query($this->conexao,$query);
        }
    
        function removeProduto($id) {
            $query = "DELETE FROM produtos WHERE id='$id'";
            return mysqli_query($this->conexao,$query);
        }
    }
?>