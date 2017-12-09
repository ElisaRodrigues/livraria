<?= require_once "cabecalho.php"; ?>

<!-- Use o controladorProduto.php para encaminhar os dados do seu cadastro -->

<h2>Cadastro de Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=cadastrar" method="post">

    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="titulo" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="titulo">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="preco">
    </div>

    <div class="form-group">
        <label for="quantidade_estoque">Quantidade</label>
        <input name="quantidade_estoque" type="number" class="form-control" id="quantidade" placeholder="quantidade de livros">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Romance</option>
            <option>Ficção</option>
            <option>Aventura</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input name="descricao" type="text" class="form-control" id="descricao" placeholder="Descrição">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?= require_once "rodape.php" ?>