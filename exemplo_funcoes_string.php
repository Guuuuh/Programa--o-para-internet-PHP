<?php
    $frase = 'Hoje e segunda, mas e terca!';

    echo strlen($frase).'<br>';
    echo str_replace('a', '4', $frase).'<br>';

    $valor = '1860.59';
    $cpf = '111.444.777-35';

    echo str_replace('.', ',', $valor).'<br>';
    echo str_replace('-', '', str_replace('.', '', $cpf)).'<br>';

    echo strtoupper($frase).'<br>';
    echo strtolower($frase);
?>