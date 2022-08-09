<?php
   //Exemplo 1
   $numero = 20;

    if ($numero == 0) {
        echo "<p>É zero. </p>";
    }
    elseif ($numero > 0) {
        echo "<p>Positivo.</p>";
    }
    else {
        echo "<p>Negativo.</p>";
    }

    //Exemplo 2
    $opcao = 3;

    if ($opcao == 1) {
        echo "<h1>Um.</h1>";
    }
    elseif ($opcao == 2) {
        echo "<h1>Dois.</h1>";
    }
    elseif ($opcao == 3) {
        echo "<h1>Três.</h1>";
    }
    elseif ($opcao == 4) {
        echo "<h1>Quatro.</h1>";
    }
    else {
        echo "<h1>Nada.</h1>";
    }
?>