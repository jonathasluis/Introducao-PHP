<?php

declare(strict_types=1); // tipagem forte


$pdo = require 'connect.php';
$sql = 'INSERT INTO usuarios (nome_user) VALUES (?)';

$stmt = $pdo->prepare($sql);


$stmt->bindParam(1,$_GET['nome']);
$stmt->execute();

echo $stmt->rowCount();
?>