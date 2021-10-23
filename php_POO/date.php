<?php

date_default_timezone_set('America/Sao_Paulo'); // definir Hora SP

$date= new DateTime();

$intervalo = new DateInterval('P1YT5M'); // adiciona 1 ano e 5 muinutos
$date->add($intervalo);

var_dump($date);

?>