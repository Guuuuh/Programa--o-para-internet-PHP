<?php

$numero = 10;

// Padrão 
if ($numero > 20 ) {
    echo "<p>É maior que 20 </p>";
}
else {
    echo "<p>Menor que 20</p>";
}

// Ternário
echo ($numero < 50) ? "<p> Menor que 50 </p>" : "<p> Maior que 50 </p>";

// Composto
if ($numero > 0 AND $numero < 50) {
    echo "<p>Verdadeiro.</p>";
}
else {
    echo "<p>F. </p>";
}
?>