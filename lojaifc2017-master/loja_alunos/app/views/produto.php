<?php

    require_once "../models/CrudProdutos.php";

    $crud = new CrudProdutos();

    //seguranca
    $codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT);

    $produto = $crud->buscarProduto($codigo);

    print_r($produto);

?>

<h2>Pagina de produto</h2>