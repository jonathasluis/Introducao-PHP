<?php

// Função que retorna uma string, define a categoria de acordo com a idade
function defineCategoria(string $nome, string $idade): ?string
{

    $categorias = ['infantil','adolescente','adulto','idoso'];

    // Verifica se o nome e a idade são validos
    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        // INICIO IF's
        if ($idade >= 6 && $idade <= 12) {
            setarMensagemSucesso($nome . ' pertence à categoria: ' . $categorias[0]);
            return null;
        } elseif ($idade >= 13 && $idade < 18) {
            setarMensagemSucesso($nome . ' pertence à categoria: ' . $categorias[1]);
            return null;
        } elseif ($idade >= 18 && $idade < 60) {
            setarMensagemSucesso($nome . ' pertence à categoria: ' . $categorias[2]);
            return null;
        } else {
            setarMensagemSucesso($nome . ' pertence à categoria: ' . $categorias[3]);
            return null;
        }
        // FIM IF's
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
