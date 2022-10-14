<?php

$ageList = [22, 21, 12, 27, 99, 138];

$idadeNey = $ageList[3];

$tamanho = count($ageList);

echo "Idade do Ney: $idadeNey\nTamanho do array: $tamanho";

for($i = 0; $i < $tamanho; $i++) {
    echo $ageList[$i] . PHP_EOL;
}