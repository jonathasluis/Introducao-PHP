<?php
session_start(); // inicio da sessão

// IMPORTS
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

// As variaveis recebem os valores por meio do metodo POST definido no index.php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoria($nome,$idade);

// A execução é feita em index.php 
header("location: index.php")

?>