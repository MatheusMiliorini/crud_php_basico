<?php
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $conexao = new BancoDeDados("cloud.matheusmiliorini.com.br","minhaloja","essaeminhasenha","minhaloja");
    $prod = new Produto($conexao);
    $categorias = $prod->buscarCategorias();
?>
    <form action="produto-add.php" method="POST">        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" step="0.01" id="preco" name="preco" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
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
            <button type="submit" class="btn btn-success totalwidth" >Adicionar</button>
        </div>
    </form>
<?php
    include_once('rodape.php');
?>