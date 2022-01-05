<?php

$correntistas = [
    'Giovanni',
    'João',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700
];
$relacionados = array_combine($correntistas, $saldos);

$relacionados["mateus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo "O valor do saldo: {$relacionados["joao"]}";

if(array_key_exists("joao", $relacionados)){
    echo "O Saldo do Joao é {$relacionados["Joao"]}";

}else{
    echo "Não foi econtrado";
}