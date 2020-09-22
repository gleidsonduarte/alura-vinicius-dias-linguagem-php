<?php

namespace Alura;

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $quantidadeNotas = sizeof($notas);

        if ($quantidadeNotas) {
            $soma = 0;
            
            for ($index = 0; $index < $quantidadeNotas; $index++) { 
                $soma = $soma + $notas[$index];
            }
            
            $media = $soma / $quantidadeNotas;
            
            return $media;
        } else {
            return null;
        }
    }
}
