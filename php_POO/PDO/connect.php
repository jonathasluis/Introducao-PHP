<?php

declare(strict_types=1); // tipagem forte


$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost; dbname=usuarios','root','root');
    //echo "sucesso";
} catch (\Throwable $th) {
    echo $th->getMessage();
    die();
}

return $pdo;

//$con = new Connect();

?>