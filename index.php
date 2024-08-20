<?php

class Usuario{ //Classe usuário || Agora vamos colocar os atributos e como funciona o escopo
    public int $id; //3 tipos de escopo --> public (qualquer lugar) || private || protect

    public string $email; //

    public string $cpf;

    public string $nome;

    public string $senha;

    public function __construct(int $id, string $email, string $cpf, string $nome, string $senha){
        $this->id = $id; //dessa classe está apontando para esse atributo
        $this->email = $email;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->senha = $senha; //agora vamos criar um objeto de usuário
    }
}

$usuario = new Usuario(1, $_POST['email'], $_POST['cpf'], $_POST['nome'], $_POST['senha']); 
//Passamos nosso parametro na mesma ordem que está no parametro 

echo "<pre>";
var_dump($usuario);

class Produto{
    public int $id_cadastro;
    public string $nome;
    public float $valor;
    public int $estoque;
}

class Pedidos{
    public int $id_pedido;
    public string $vendedor;
    public int $quantidade;
    public \DateTime $data;
}

class ExpedirProduto{
    // public int $id_cadastro; 
    public Produto $produto;
    // public int $id_pedido;
    public Pedidos $pedido;

    public int $quantidade_expedido;
}