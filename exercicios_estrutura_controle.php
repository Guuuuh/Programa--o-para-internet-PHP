<?php
/* 1. Efetue um algoritmo que compara o valor de uma variável se é maior ou
menor do que 10.*/

$valor = 20;

if ($valor > 10) {
    echo "<p>O valor informado é maior que 10. </p>";
} elseif ($valor < 10) {
    echo "<p>O valor informado é menor que 10.</p>";
} else {
    echo "<p>O Número é 10 ou inválido</p>";
}

/*2. Crie um programa que calcula e imprime o reajuste do salário de um
funcionário de acordo com a seguinte regra:
a. Salário de até R$ 1.000,00 → Reajuste de 8%;
b. Salário acima de R$ 1.000,01 → Reajuste 5%;*/

$salario = 1250.00;
$reajuste8 = 0;
$reajuste5 = 0;
if ($salario <= 1000.00) {
    $reajuste8 = $salario * 1.08;
    echo "<p>O novo salário com 8% de reajuste é: ", $reajuste8;
} else {
    $reajuste5 = $salario * 1.05;
    echo "<p>O novo salário com 5% de reajuste é: ", $reajuste5;
}

/*3. Elabore um programa que verifica se um determinado valor é positivo,
negativo ou igual à zero. Imprimindo na tela: "Valor Positivo", "Valor
Negativo", "Igual a Zero".*/

$numero = -30;

if ($numero == 0) {
    echo "<p>É zero. </p>";
} elseif ($numero > 0) {
    echo "<p>Positivo.</p>";
} else {
    echo "<p>Negativo.</p>";
}

/*4. Efetue um algoritmo que calcula a média aritmética de quatro notas de
um aluno e imprima na tela:
a. Aprovado → Se a nota for maior que 70;
b. Recuperação → Se a nota estiver entre 40 e 69;
c. Reprovado → Se a média estiver abaixo de 40.*/

$notas = [1.5, 1.9, 5.8, 5.0];
$media = ($notas[0] + $notas[1] + $notas[2] + $notas[3]) / 4;

if ($media > 7) {
    echo "<p>Aprovado. </p>";
    echo $media;
} elseif ($media > 4) {
    echo "<p>Recuperação.</p>";
    echo $media;
} else {
    echo "<p>Reprovado.</p>";
    echo $media;
}

/*5. Faça um programa que verifica qual categoria um atleta pertence,
utilizando as regras abaixo:
Até 7 anos → Infantil
De 8 a 10 anos → Infantojuvenil
De 11 a 14 anos → Juvenil
De 15 a 18 anos → Juventude
De 19 a 29 anos → Adulto
Acima de 30 anos → Sênior*/

$idade = 30;

switch ($idade) {
    case $idade <= 7:
        echo "<h1>Categoria Infantil.</h1>";
        break;

    case $idade >= 8 and $idade <= 10:
        echo "<h1>Categoria Infantojuvenil.</h1>";
        break;

    case $idade >= 11 and $idade <= 14:
        echo "<h1>Categoria Juvenil.</h1>";
        break;

    case $idade >= 15 and $idade <= 18:
        echo "<h1>Categoria Juventude.</h1>";
        break;

    case $idade >= 19 AND $idade <= 29:
        echo "<h1>Categoria Adulto.</h1>";
        break;

    default:
        echo "<h1>Categoria Sênior.</h1>";
        break;
}
?>