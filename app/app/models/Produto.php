<?php


class Produto {

    public $id = null;

    public $nome = '';
    public $cor = 'incolar';

    public $preco = 0;
    public $estoqueMin = 0;
    public $descricao = '';
    public $estoque = '1';
    public $tipoProduto = null;

    function __construct($nome, $preco, $estoque, $estoqueMin, $tipoProduto=null, $id=null) {

    	$this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->estoqueMin = $estoqueMin;
        $this->tipoProduto= $tipoProduto;
        $this->id= $id;

    }
}

