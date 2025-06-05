<?php

    // Creo un array de enteros con las fechas de los títulos obtenidos por Rosario Central
    $titulos = [
        1971,
        1973,
        1980,
        1986,
        1995,
        2018,
        2013
    ];

    // Defino una función que recibe un array de fechas y las imprime en una lista desordenada
    // utilizando un FOREACH
    function imprimir_titulos($fechas) {
        foreach ($fechas as $fecha) {
            echo "<li>{$fecha}</li>";
        }
    }

