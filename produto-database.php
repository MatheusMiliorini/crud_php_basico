<?php
    function listarProdutos($conexao) {
        $produtos = array();

        $resultado = mysqli_query($conexao,"SELECT p.*,c.nome as cat_nome FROM produtos as p INNER JOIN categorias AS c ON c.id = p.categoria_id");

        while ($row = mysqli_fetch_assoc($resultado)) {
            array_push($produtos,$row);
        }

        return $produtos;
    }
?>