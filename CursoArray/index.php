<?php

require 'Calculadora.php';

$notas = [9, 3, 10, 5, 10, 8];


$calculadora = new Calculadora();
$media = $calculadora->calculadoraMedia($notas);
echo "<p>MEDIA Seria: $media</p>";
