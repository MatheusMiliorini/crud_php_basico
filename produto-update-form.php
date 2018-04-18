<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);

    $produto = $prod->buscarProdutoID($_GET['id']);
    $categorias = $prod->buscarCategorias();
?>
    <form action="produto-update.php" method="POST">
        <input type="hidden" id="id" name="id" class="form-control" value="<?=$produto[0]['id']?>">
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?=$produto[0]['nome']?>">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="0.01" id="preco" name="preco" class="form-control" value="<?=$produto[0]['preco']?>">
        </div>
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?=$produto[0]['descricao']?>">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth" >Alterar</button>
        </div>
    </form>
<?php
    include_once('rodape.php');
?>