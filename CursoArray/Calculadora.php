<?php

namespace Alura;

class Calculadora
{
    public function calculadoraMedia(array $notas): ?float
    {
        $quantidade = sizeof($notas);
        if($quantidade > 0){
            $soma = 0;
            for($i = 0; $i < $quantidade; $i++){
                $soma = $soma + $notas[$i];
            }

            $media = $soma + $quantidade;    
            return $media;
        }else{
            return null;
        }


        

        
    }
}