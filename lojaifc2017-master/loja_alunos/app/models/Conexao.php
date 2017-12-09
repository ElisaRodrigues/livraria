<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

class Conexao {

    const HOST      = "localhost";
    const NOMEBANCO = "bd_loja_2info1";
    const USUARIO   = "root";
    const SENHA     = "";

    public static function getConexao(){
        $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);

        return $conexao;
    }
}

//teste conexao
//$con = new Conexao();
//$con->getConexao();