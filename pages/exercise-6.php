<?php 
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-6</title>
</head>
<body>
    <?php
        include("components/nav.php");
    ?>
    <?php
        function numeroMayor(int $numero1, int $numero2):int{
            return $numero1 > $numero2 ? $numero1 : $numero2;
        }
    ?>
    <h1>El numero mayor entre 10 y 34 es: <?= numeroMayor(10, 34) ?>.</h1>
</body>
</html>