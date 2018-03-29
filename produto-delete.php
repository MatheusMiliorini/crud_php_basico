<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $sucesso = removeProduto($conexao,$_POST['id']);
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