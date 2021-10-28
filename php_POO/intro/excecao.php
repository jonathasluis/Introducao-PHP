<?php

function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception('campos não foram preenchidos');
    }

    return 'true';
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 20,
];

try {
    validaUsuario($usuario);
    echo 'foi';
} catch (Throwable $e) {
    echo $e->getMessage();
    die();
}

echo 'opa';
