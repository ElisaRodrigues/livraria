<?php

//print_r($_POST);
//exit();





// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.

// Use o método $_GET para obter informações vindas de outras páginas.

require_once __DIR__."/../models/Produto.php";
require_once __DIR__."/../models/CrudProdutos.php";

//quando um valor da URL for igual a cadastrar faça isso

if ( $_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['titulo'], $_POST['preco'], $_POST['categoria'], $_POST['quantidade_estoque']);
    $crud = new CrudProdutos();
    $crud->salvar($produto);
    header('location: ../views/admin/produtos.php?msg=cadastro realizado com sucesso');
}


//quando um valor da URL for igual a editar faça isso
if ( $_GET['acao'] == 'editar'){
    $crud = new CrudProdutos();
    $crud->editar($_GET['codigo']);
    header('location: ../views/admin/produtos.php?msg=editado com sucesso');

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( $_GET['acao'] == 'remover'){
    //echo "chamou remover";
    $crud = new CrudProdutos();
    $crud->excluir($_GET['codigo']);
    header('location: ../views/admin/produtos.php?msg=excluido com sucesso');
}

