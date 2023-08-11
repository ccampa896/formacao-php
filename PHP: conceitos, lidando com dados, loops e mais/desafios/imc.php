<?php

$peso = 110;
$altura = 1.82;

$imc = $peso / $altura ** 2;
$categoria_imc = "";

if($imc < 18.5) {
    $categoria_imc = "abaixo do peso";
} else if($imc >= 18.5 && $imc <= 24.9) {
    $categoria_imc = "com peso normal";
} else if($imc >= 25 && $imc <= 29.9) {
    $categoria_imc = "com sobrepeso";
} else if($imc >= 30 && $imc <= 34.9) {
    $categoria_imc = "com obesidade grau I";
} else if($imc >= 35 && $imc <= 39.9) {
    $categoria_imc = "com obesidade grau II";
} else {
    $categoria_imc = "com obesidade grau III";
}

echo "Seu IMC é de $imc. Você está $categoria_imc." . PHP_EOL;