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

        <form action="index.php" method="post">
            <p>nome: <input type="text" name="nome"/></p>
            <p>id: <input type="text" name="id"></p>
            <p><input type="radio" name="tipo" value="insert">insert</p>
            <p><input type="radio" name="tipo" value="update">update</p>
            <p><input type="radio" name="tipo" value="delete">delete</p>
            <p><input type="radio" name="tipo" value="select" checked='true'>select</p>
            <p><input type="submit"/> <input type="reset"/></p>

            <?php

                require 'usuario.php';

                $user = new Usuario();
                $tipo = 'select';

                if(isset($_POST['tipo'])){
                    $tipo = $_POST['tipo'];
                }

                switch ($tipo) {
                    case 'insert':
                        echo $user->insert($_POST['nome']);

                        echo '<h3>Usuarios:</h3>';
                        foreach ($user->list() as $value) {
                            echo 'Id: ' . $value['id_usuario'] . '<br>nome: ' . $value['nome_user'] . '<hr>';
                        }

                        break;

                    case 'update':
                        echo $user->update($_POST['nome'],$_POST['id']);

                        echo '<h3>Usuarios:</h3>';
                        foreach ($user->list() as $value) {
                            echo 'Id: ' . $value['id_usuario'] . '<br>nome: ' . $value['nome_user'] . '<hr>';
                        }
                        break;

                    case 'delete':
                        echo $user->delete($_POST['id']);

                        echo '<h3>Usuarios:</h3>';
                        foreach ($user->list() as $value) {
                            echo 'Id: ' . $value['id_usuario'] . '<br>nome: ' . $value['nome_user'] . '<hr>';
                        }
                        break;
                    
                    default:
                        echo '<h3>Usuarios:</h3>';
                        foreach ($user->list() as $value) {
                            echo 'Id: ' . $value['id_usuario'] . '<br>nome: ' . $value['nome_user'] . '<hr>';
                        }
                        break;
                }
            ?>
        </form>
    </body>

</html>