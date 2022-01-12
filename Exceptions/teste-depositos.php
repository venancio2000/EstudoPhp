<?php

require_once 'autenticacao.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente,Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
$contaCorrentes = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-090'),
        'Bruno Venâncio',
        new Endereco('cidade', 'bairro', 'rua', 'numero')
    )
);
try {
    $contaCorrentes->deposita(200);
}catch (InvalidArgumentException $exception){
    echo ' valor depisitar precisa ser positivo, seu Rácke perigoso';
}

