<?php

class Usuario
{
    private $id_Usuario;
    private $nome;
    private $telefone;
    private $email;
    private $senha;

    public function cadastraUsuario(){

    }

    public function setTelefone($telefone){

    	//valida
    	//verifica se o telefone pssui 9 digitos
     	$this->telefone = $telefone;
    }

}
