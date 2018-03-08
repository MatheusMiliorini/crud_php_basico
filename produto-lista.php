<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Ações</td>
        </tr>
        <tr>
            <?php
                $produtos = listarProdutos($conexao);
                foreach ($produtos as $produto) :
            ?>
                
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['cat_nome']?></td>
            <td><a href="produto-update-form.php" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></a></td>

            <?php
                endforeach;
            ?>
        </tr>
    </table>

<?php 
    include_once('rodape.php');
?>