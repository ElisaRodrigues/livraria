<?php
require_once __DIR__. '/../conexao/Conexao.php';

    class CrudProdutos{
    private $conexao;
    private $produto;

    public function __construct(){
    $this->conexao = Conexao::getConexao();
    }
        //cadastrar produto - questão 6
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES('$produto->titulo', $produto->preco, '$produto->categoria')";
            $this->conexao->exec($sql);

        }
        public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
            return  $consulta->fetchAll(PDO::FETCH_ASSOC);
        }

        //editar produto - questão 7

        //excluir produto - questão 8

}

$x = new CrudProdutos();
    $x->getProdutos();