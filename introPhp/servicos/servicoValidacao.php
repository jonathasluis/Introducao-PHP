<?php

// Função booleana, verifica se o nome é válido.
function validaNome(string $nome) : bool{
    if (empty($nome)) {
        setarMensagemErro( 'O nome não dever ser vazio!');
        return false;
    }
    
    else if (strlen($nome) < 3) {
        setarMensagemErro('O nome não deve conter menos de 3 caracteres!');
        return false;
    }
    else if (strlen($nome) > 50) {
        setarMensagemErro('O nome deve conter mais de 50 caracteres!');
        return false;
    }
    return true;
}

// Função booleana, verifica se a idade é válida.
function validaIdade(string $idade) : bool {
    if (!is_numeric($idade)) {
        setarMensagemErro('a idade deve ser um numero!');
        return false;
    }else if ($idade < 6){
        setarMensagemErro('a idade deve ser maior que 5!');
        return false;
    }else{
        return true;
    }
}

?>