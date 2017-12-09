<?php
require_once __DIR__. '/Conexao.php';

//lógica da 2 aqui
class Produto
{
    public $codigo;
    public $titulo;
    public $preco;
    public $categoria;
    public $quantidade_estoque;
    public $descricao;

    public function __construct($titulo, $preco, $categoria, $quantidade_estoque, $codigo = null){
        $this->titulo = $titulo;
        $this->preco = $preco;
        $this->quantidade_estoque = $quantidade_estoque;
        $this->categoria = $categoria;
        $this->codigo = $codigo;
    }

    public function estaDisponivel(){
     if($this->quantidade_estoque > 0){
         return "disponivel";
     } else{
         return "o livro não está disponivel no momento";
     }

    }

}