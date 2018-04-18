<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);
    $produto = $prod->buscarProdutoID($_GET['id']);
?>

    <h1 class="meio">Você deseja realmente excluir o produto "<?=$produto[0]['nome']?>"?</h1>
    <br><br>
    <form action="produto-delete.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto[0]['id']?>">
        <div class="form-group">
            <button type="submit" class="btn btn-danger totalwidth" >Excluir</button>
        </div>
    </form>

<?php 
    include_once('rodape.php');
?>