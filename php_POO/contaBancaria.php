<?php

class ContaBancaria{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco,$nomeTitular,$numeroAgencia,$numeroConta,$saldo){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function deposito($valor){
        $this->saldo += $valor;
    }
    public function saque($valor){
        $this->saldo -= $valor;
    }
}

$conta = new ContaBancaria('Bradesco','Jonathas','658','7853-8',1500.00); // instancia da classe


//var_dump($conta->nomeTitular); //acessar atributo da classe (public)
echo $conta->getSaldo(); // acessar metodo
$conta->deposito(200);
echo '<br>' . $conta->getSaldo();
$conta->saque(700);
echo '<br>' . $conta->getSaldo();

?>