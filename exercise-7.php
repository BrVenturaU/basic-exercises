<?php 

    $estudiantes = array(
        array(
            "codigo"=>"SMIS010919",
            "nombre"=>"Pablito",
            "lab1"=>10,
            "lab2"=>10,
            "parc"=>10
        ),
        array(
            "codigo"=>"SMIS010918",
            "nombre"=>"Juanito",
            "lab1"=>9,
            "lab2"=>6,
            "parc"=>10
        ),
        array(
            "codigo"=>"SMIS010911",
            "nombre"=>"Panchito",
            "lab1"=>7,
            "lab2"=>6,
            "parc"=>7.5
        ),
        array(
            "codigo"=>"SMIS010929",
            "nombre"=>"Pancho",
            "lab1"=>9,
            "lab2"=>8,
            "parc"=>10
        ),
        array(
            "codigo"=>"SMIS010913",
            "nombre"=>"Maria",
            "lab1"=>9,
            "lab2"=>8,
            "parc"=>9
        ),
        array(
            "codigo"=>"SMIS010912",
            "nombre"=>"Moncha",
            "lab1"=>4,
            "lab2"=>6,
            "parc"=>7.5
        ),
        array(
            "codigo"=>"SMIS010939",
            "nombre"=>"Gabriela",
            "lab1"=>10,
            "lab2"=>10,
            "parc"=>10
        ),
        array(
            "codigo"=>"SMIS010313",
            "nombre"=>"Josh",
            "lab1"=>4,
            "lab2"=>5,
            "parc"=>6
        ),
        array(
            "codigo"=>"SMIS030912",
            "nombre"=>"Carlos",
            "lab1"=>4,
            "lab2"=>6,
            "parc"=>4
        ),
        array(
            "codigo"=>"SMIS032912",
            "nombre"=>"Milton",
            "lab1"=>5,
            "lab2"=>7,
            "parc"=>6
        )
    );

    $tableHeaders = "
        <tr>
            <th>N°</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>lab1</th>
            <th>lab2</th>
            <th>parc</th>
            <th>lab1 (30%)</th>
            <th>lab2 (30%)</th>
            <th>parc (40%)</th>
            <th>prom</th>
        </tr>
    ";

    function printRow(array $estudiantes){
        $evaluateKey = function(array &$notas, string $key, $value){
            if($key == "lab1" || $key == "lab2")
                array_push($notas, $value*0.3);
            if($key == "parc")
                array_push($notas, $value*0.4);
        };
        $count = 1;
        foreach($estudiantes as $estudiantes=>$valores){
            echo "<tr>";
                echo "<td>$count</td>";
                $notas = [];
                foreach($valores as $clave=>$valor){
                    echo "<td>$valor</td>";
                    $evaluateKey($notas, $clave, $valor);
                }
                foreach($notas as $nota)
                    echo "<td>$nota</td>";
                echo "<td>".array_sum($notas)."</td>";
            echo "</tr>";
            $count++;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-7</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }

        h1, table{
            text-align: center;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h1>Tabla de datos</h1>
    <table>
        <thead>
            <?= $tableHeaders; ?>
        </thead>
        <tbody>
            <?php
                printRow($estudiantes);
            ?>
        </tbody>
        <tfoot>
            <?= $tableHeaders; ?>
        </tfoot>
    </table>
</body>
</html>