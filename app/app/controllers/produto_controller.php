<?php 

require_once '../crud/CrudProdutos.php';
require_once '../models/Produto.php';


function cadastrar(){
	header('location: ../views/cadastro_produtos.php');
}


function salvar(){

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['estoque'], $_POST['estoque_min']);

    $crud = new CrudProdutos();
    $resultado = $crud->cadastrar($produto);

    if ($resultado == 1) {
        listar();
    }
}

function listar(){

    $crud = new CrudProdutos();
    $listaProdutos = $crud->getProdutos();

    require '../views/tela_catalogo.php';

}

function editar ($id){

    $crud     = new CrudProdutos();
    $produto  = $crud->getProduto($id);

    include '../views/editar_produto.php';

}

function excluir($id){ //ok

        $crud = new CrudProdutos();
        $crud->excluir($id);
        listar();
}


//ROTAS

if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

	if ($_GET['acao'] == 'cadastrar') {
		echo "chegou na rota";
		cadastrar();
	
	} elseif ($_GET['acao'] == 'salvar') {
		salvar();

	} elseif ($_GET['acao'] == 'editar') {
		editar($_GET['id']);
	} elseif ($_GET['acao'] == 'excluir') {

		excluir($_GET['id']);

	} elseif ($_GET['acao'] == 'listar') {
        listar();
    } elseif ($_GET['acao'] == 'detalhar') {
        listar();
	} else {
		echo "sera redirecionado pra lista";
	}

} else {
	listar();
	// header('location: ../views/tela_catalogo.html');
}