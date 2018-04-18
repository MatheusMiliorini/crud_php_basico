<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);
    $sucesso = $prod->adicionarProduto($_POST['nome'],$_POST['preco'],$_POST['descricao'],$_POST['categoria']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Adicionado com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na adição do produto!</h1>
            <?=mysqli_error($conexao->getCon())?>
        <?php endif; ?>
    </div>
<?php
    include_once('rodape.php');
?>