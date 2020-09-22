<?php

$nomes = 'Giovanni, João, Maria, Pedro';

$arrayNomes = explode(",", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>$nome</p>";
}

$nomesJuntos = implode(", ", $arrayNomes);

echo $nomesJuntos;
