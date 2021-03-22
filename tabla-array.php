<!doctype html>
<html lang="en">
<?php
    define ("TITLE", "Mostrar de Array - Tabla");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Tabla - Array </title>
  </head>
  <body>
  <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5"><?php print(TITLE); ?></h1>
            <figure class="figure">
                <label><h5>Se solicita transformar el siguiente array en un tabla:</h5></label><br>
                <img src="./img_tabla-array.png" class="figure-img img-fluid rounded" alt="array">
            </figure><br><br>
            <label><h4>Resultado:</h4></label><br/>
    <?php 
        $datos = array (
        array (
            "Nombre" => "Francisco Garcia",
            "Telefono" => "5689741523",
            "Correo" => "fgarcia@gmail.com",
        ),
        array (
            "Nombre" => "Miguel Salinas",
            "Telefono" => "2584369721",
            "Correo" => "msalinas@gmail.com",
        ),
        array (
            "Nombre" => "Johana Melara",
            "Telefono" => "9875147536",
            "Correo" => "jmelara@gmail.com",
        ),
    ); 
        echo '<table class="table lead table-dark table-striped table-bordered table-hover ">';
        echo '<thead>';
            echo '<tr>';
                echo '<th scope="col">N°</th>';
                echo '<th scope="col">Nombre completo</th>';
                echo '<th scope="col">Telefono</th>';
                echo '<th scope="col">Correo electronico</th>';
            echo '</tr>';
        echo '</thead>';
        for ($i=0; $i<=1; $i++){
            echo '<tbody>';
                echo '<tr>';
                    echo '<td>'. $i .'</td>';
                    echo '<td>'. $datos[0]["Nombre"] .'</td>';
                    echo '<td>'. $datos[0]["Telefono"] .'</td>';
                    echo '<td>'. $datos[0]["Correo"] .'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td>'. ++$i .'</td>';
                    echo '<td>'. $datos[1]["Nombre"] .'</td>';
                    echo '<td>'. $datos[1]["Telefono"] .'</td>';
                    echo '<td>'. $datos[1]["Correo"] .'</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td>'. $i+$i .'</td>';
                    echo '<td>'. $datos[2]["Nombre"] .'</td>';
                    echo '<td>'. $datos[2]["Telefono"] .'</td>';
                    echo '<td>'. $datos[2]["Correo"] .'</td>';
                echo '</tr>';
            echo '</tbody>';   
        }
        echo '</table>'; 
                 
    ?>
    </div>
  </body>
</html>


