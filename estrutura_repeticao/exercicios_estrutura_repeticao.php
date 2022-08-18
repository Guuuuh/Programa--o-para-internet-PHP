<?php
/*1. Faça um algoritmo em PHP que imprima os valores de 1 até 100 na tela.*/

for ($cont = 1; $cont <= 100; $cont++) {
//    echo '<p>' . $cont . '</p>';
}

/*2. Efetue um programa capaz de calcular o fatorial de um número.
Exemplo: 4! → 4 x 3 x 2 x 1 = 24.*/

$fatorial = 100;
$total = 1;

for ($cont = $fatorial; $cont >= 1; $cont--) {
    $total = $cont * $total;
}
echo '<p>' . $total . '</p>';
?>