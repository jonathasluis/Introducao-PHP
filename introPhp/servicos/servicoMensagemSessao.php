<?php

session_start(); // Inicia a sessão

function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string{ // '?' coringa, pode retornar null
    if(isset($_SESSION['mensagem-de-erro'])){
        return $_SESSION['mensagem-de-erro'];
    }else{
        return null;
    }
}

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string{ // '?' coringa, pode retornar null
    if(isset($_SESSION['mensagem-de-sucesso'])){
        return $_SESSION['mensagem-de-sucesso'];
    }else{
        return null;
    }
}

function removerMensagemErro() : void{
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}

function removerMensagemSucesso() : void{
    if(isset($_SESSION['mensagem-de-sucesso'])){
        unset($_SESSION['mensagem-de-sucesso']);
    }
}

?>