<?php

    // Creo un array con los nombres de los ídolos de Rosario Central
    $idolos = [
        "Aldo Pedro Poy",
        "Marito Kempes",
        "Negro Palma",
        "Chacho Coudet",
        "Killy Gonzalez",
        "Roberto Abbondanzieri",
        "Lucho Figueroa",
        "Franco Niel",
        "Fideo Di María",
        "Giovani Lo Celso",
        "Marco Ruben"
    ];

    // Defino una función que recibe un array de strings y luego los imprime utilizando un loop FOR

    function imprimir_idolos($nombres) {
    
        $cant_idolos = count($nombres);

        for ($i=0; $i<$cant_idolos; $i++) {
            echo "<li>{$nombres[$i]}</li>";
        }
    }
