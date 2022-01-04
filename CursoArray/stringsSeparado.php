<?php

$nomes = "Giovannio, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "<p> Olá $nome</p>";
}

var_dump($array_nomes);

$nomesJuntos = implode(", ", $array_nomes);

var_dump($nomesJuntos);