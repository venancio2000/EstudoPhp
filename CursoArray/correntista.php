<?php declare(strict_types=1);

require 'ArrayUltis.php';

$correntistas_e_compras = [
    "Giovane",
    "Joao",
    12,
    "maria",
    25,
    "Luis",
    "luisa",
    "12",
];
echo "<pre>";
    var_dump($correntistas_e_compras);

    ArrayUtils::remover(12, $correntistas_e_compras);

    var_dump($correntistas_e_compras);

echo "</pre>";
