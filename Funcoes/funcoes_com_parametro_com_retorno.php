<?php
    function somar($numA, $numB)
    {
        return $numA + $numB;
    }

    echo somar(12,22).'<br>';
    echo somar(48,12).'<br>';

    $resultado = somar(6,2);

    echo $resultado + somar(9,5).'<br>';
?>