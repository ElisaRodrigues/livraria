<?php
require_once __DIR__. '/../conexao/Conexao.php';

//lógica da 2 aqui
class Produto
{
    public $codigo;
    public $titulo;
    public $preco;
    public $categoria;
    public $conexao;
    public $quantidade_estoque;

    public function __construct($titulo, $preco, $categoria){
        $this->titulo = $titulo;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    public function setQuantidadeEstoque(int $quantidade_estoque)
    {
        $this->quantidade_estoque = $quantidade_estoque;
        $quantidade_estoque = "SELECT quantidade_estoque From tb_produtos";
    }
}

$x = new Produto('Jogos Vorazes', 30.00, 'Ficção e Aventura');

$x->$this->$quantidade_estoque = 5;