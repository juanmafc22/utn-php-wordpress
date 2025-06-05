<?php
    include "./layouts/header.php";
    require "./funciones/idolos.php";
    require "./funciones/titulos.php";
?>
<body>
    <header>
        <h1>Curso de PHP con Wordpress</h1>
        <h2>Mi nombre es Juan Manuel. Soy rosarino.</h2>
        <h2>Soy fanático de mi ciudad y del club de fútbol que lleva su nombre.</h2>
    </header>
    <main>
        <h2><span class="azul-oscuro">Club</span><span class="amarillo-oscuro"> Atlético</span><span class="azul-oscuro"> Rosario</span><span class="amarillo-oscuro"> Central</span></h2>
        <p>
             <a href="https://github.com/juanmafc22/utn-php-wordpress" target="_blank" class="amarillo-oscuro">El código del desarrollo se encuentra aquí</a> <br>
        </p>
        <p>
            Toda la info del &lt;header&gt; del HTML lo traigo con un include <br>
            - El include lo traigo desde ./layouts/header.php <br>

        </p>
        <p>
            Acá recorro e imprimo un array con un for loop <br>
            - El array lo recorro dentro de una función <br>
            - La función la traigo a info.php con un require de ./funciones/idolos.php 
        </p>
        <p>Idolos Canallas 💙💛💙💛💙 <br>
            <ul>
                <?php
                    imprimir_idolos($idolos);
                ?>
            </ul>
        </p>
        <p>
            Acá, parecido. <br>
            - El array lo recorro dentro de una función <br>
            - Esta vez utilizo un foreach para recorrerlo <br>
            - El array lo traigo desde ./funciones/titulos.php con un require
        </p>
        <p>Campeonatos Canallas🏆 💙💛💙💛💙 <br>
            <ul>
                <?php
                    imprimir_titulos($titulos);
                ?>
            </ul>
        </p>
    </main>
<?php
    include "./layouts/footer.php";