<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);
?>

    <table class="table table-striped table-bordered meio">
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Ações</td>
        </tr>
        <tr>
            <?php
                $produtos = $prod->listarProdutos();
                foreach ($produtos as $produto) :
            ?>
                
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['cat_nome']?></td>
            <td>
                <a href="produto-update-form.php?id=<?=$produto['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span></a>
                <a href="produto-delete-confirma.php?id=<?=$produto['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
            <?php
                endforeach;
            ?>
        
    </table>

<?php 
    include_once('rodape.php');
?>