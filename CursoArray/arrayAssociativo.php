<?php

$correntistas = [
    'Giovanni',
    'João',
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasNãoPagantes = [
    'Luis',
    'Luisa',
    'Rafael'
];
$correntistasPagantes = array_diff($correntistas, $correntistasNãoPagantes);

echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";