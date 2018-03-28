<?php
    function listarProdutos($conexao) {
        $produtos = array();

        $resultado = mysqli_query($conexao,"SELECT p.*,c.nome as cat_nome FROM produtos as p INNER JOIN categorias AS c ON c.id = p.categoria_id");

        while ($row = mysqli_fetch_assoc($resultado)) {
            array_push($produtos,$row);
        }
        return $produtos;
    }

    function buscarProduto($conexao,$id) {

        $resultado = array();
    
        $sql = "SELECT * FROM produtos WHERE id='$id'";
        $query = mysqli_query($conexao,$sql);

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($resultado,$row);
        }
        return $resultado;
    }

    function buscarCategorias($conexao) {
        $resultado = array();
    
        $sql = "SELECT * FROM categorias";
        $query = mysqli_query($conexao,$sql);

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($resultado,$row);
        }
        return $resultado;
    }

    function alterarProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id) {
        $query = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao', categoria_id='$categoria_id' WHERE id='$id'";
        return mysqli_query($conexao,$query);
    }

    function adicionarProduto($conexao,$nome,$preco,$descricao,$categoria) {
        $query = "INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('$nome','$preco','$descricao','$categoria')";
        return mysqli_query($conexao,$query);
    }
?>