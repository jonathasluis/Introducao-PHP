<?php
    include "servicos/servicoMensagemSessao.php"; // importa o arquivo serviços
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de inscrição</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-width, initial-scale-1">
    </head>

    <body>
        <p>Formulario para inscrição de competidores</p>

        <form action="script.php" method="post">
            <?php
                $mensagemDeSucesso = obterMensagemSucesso();
                if(!empty($mensagemDeSucesso)){
                    echo $mensagemDeSucesso;
                }

                $mensagemDeErro = obterMensagemErro();
                if(!empty($mensagemDeErro)){
                    echo $mensagemDeErro;
                }
            ?>

            <p>Seu nome: <input type="text" name="nome"/></p>
            <p>Sua idade: <input type="text" name="idade"></p>
            <p><input type="submit"/> <input type="reset"/></p>
        </form>
    </body>

</html>

