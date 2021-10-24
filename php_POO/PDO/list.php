<?php

declare(strict_types=1); // tipagem forte


$pdo = require 'connect.php';
$sql = 'SELECT * FROM usuarios';


echo '<h3>Usuarios:</h3>';

foreach ($pdo->query($sql) as $key => $value){
    echo $value['id_usuario'] . ' - ' . $value['nome_user'];
}

?>