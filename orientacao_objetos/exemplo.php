<?php

class Usuario {
    public $nome;
    public $dataNascimento;
    protected $cpf;
    private $senha;

    public function __construct()
    {
        echo 'Objeto iniciado.';
    }

    public function novoUsuario($nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function exibeUsuario()
    {
        echo '<p>'.$this->nome.'</p>';
        echo '<p>'.$this->cpf.'</p>';
    }
}

$usuario = new Usuario;
$usuario->novoUsuario('Gustavo', '111.444.777-35');
$usuario->exibeUsuario();

