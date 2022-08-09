<?php
    //             0          1        2       3        4
    $frutas = ['Morango', 'Abacaxi', 'Uva', 'Maçã', 'Banana'];

    $frutas_caroco = [
        'Com caroço' => ['Uva', 'Abacate', 'Ameixa'],
        'Sem caroço' => ['Morango', 'Banana', 'Abacaxi']
    ];
    /*
    echo '<p>' .$frutas[2]. '</p>';

    echo '<p>'.$frutas_caroco['Com caroço'][1].'</p>';

    echo '<p>'.$frutas_caroco['Sem caroço'][2].'</p>';
    */

    //foreach
    foreach ($frutas as $fruta) {
        echo '<p>'.$fruta.'</p>';
    }
?>