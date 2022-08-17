<?php
    $numerosPares = [2, 4, 6, 8];
    $numerosImpares = [1, 3, 5, 7, 9];

    $resultado = array_merge($numerosPares, $numerosImpares);

    echo $resultado[1].'<br>';
    print_r($resultado).'<br>';

    foreach ($resultado as $numeros) {
        echo "<p>$numeros</p>";
    }
?>