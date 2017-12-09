<?php
require_once __DIR__. "/../../config/config.php";

class Conexao{

    public static $conexao = null;

    public static function getConexao(){
        try{

            if(self::$conexao == null) {
                self::$conexao = new PDO("mysql:host=" . HOST . "; dbname=" . BANCO, USUARIO, SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$conexao;

        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}