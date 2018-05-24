    <?php


    require_once __DIR__.'/../database/Conexao.php';
    require_once __DIR__.'/../models/Produto.php';



    class CrudProdutos{
        
        private $conexao;
        private $produto;
        
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }
        //cadastrar produto
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO produtos 
                    (nome, preco, estoque, estoque_min) 
                    VALUES ('{$produto->nome}', {$produto->preco}, {$produto->estoque}, {$produto->estoqueMin})";
            echo $sql;

            return $this->conexao->exec($sql);
        }

        //retorna todos os produtos - OKAY
        public function getProduto($id){
            $consulta = $this->conexao->query("SELECT * FROM produtos WHERE id_produto = $id");
            $produto = $consulta->fetch(PDO::FETCH_ASSOC);
            return new Produto($produto['id_produto'], $produto['preco'], $produto['estoque_min'], $produto['descricao'], $produto['estoque'], $produto['idTipoProduto']);
        }

        //retorna 1 produto - OKAY
        public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM produtos"); //msm coisa q usar a funcao p pegar td em

            $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $arrayProdutos;
        }
        
        //excluir produto - OKAY
        public function excluir($idProduto){
            $this->conexao->exec("DELETE FROM produtos WHERE id_produto = $idProduto");
        }

        //editar produtos
        public function editar( $idProduto){
            $this->conexao->exec("UPDATE Produtos SET id_produto = $idProduto, 
                                                                'nome = $nome'                                                             
                                                                'preco = $preco', 
                                                                estoque_min = $estoqueMin, 
                                                                'descricao = $descricao', 
                                                                estoque = $estoque,
                                                                idTipoProduto=$idTipoProduto 
            WHERE id_produto =$idProduto");
        }
    }

