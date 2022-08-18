<?php
    // Exemplo 1
    $opcao = 1;

    switch ($opcao) {
        case 1:
            echo "<h1>Um.</h1>";
            break;

        case 2:
            echo "<h1>Dois.</h1>";
            break;
        
        case 3:
            echo "<h1>Três.</h1>";
            break;
        
        default:
            echo "<h1>Nada.</h1>";
            break;
    }

// Exemplo 2
    $numero = 'dois';

    switch ($numero) {
        case 'um':
            echo "<p>1.    </p>";
            break;
        
        case 'dois':
            echo "<p>2.</p>";
            break;
        
        default:
            echo "<p>Não achou.</p>";
            break;
    }
?>