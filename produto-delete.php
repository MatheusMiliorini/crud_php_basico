<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);
    $sucesso = $prod->removeProduto($_POST['id']);
?>
    <div class="meio">
        <?php if($sucesso): ?>
            <h1>Removido com sucesso!</h1>
        <?php else: ?>
            <h1>Erro na remoção do produto!</h1>
        <?php endif; ?>
    </div>
<?php 
    include_once('rodape.php');
?>