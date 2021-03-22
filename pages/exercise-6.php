<?php 
    declare(strict_types=1);
?>
    <?php
        function numeroMayor(int $numero1, int $numero2):int{
            return $numero1 > $numero2 ? $numero1 : $numero2;
        }
    ?>
    <h1>El numero mayor entre 10 y 34 es: <?= numeroMayor(10, 34) ?>.</h1>
