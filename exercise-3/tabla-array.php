<!doctype html>
<html lang="en">
<?php
    define ("TITLE", "Mostrar de Array - Tabla");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
    <title>Array - Tabla</title>
  </head>
  <body>
    <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5"><?php print(TITLE); ?></h1>
            <figure class="figure">
                <label><h5>Se solicita transformar el siguiente array en un tabla:</h5></label><br>
                <img src="./imgCodigo-3.png" class="figure-img img-fluid rounded" alt="array">
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
        // foreach($datos as $key=>$values){
        //     echo $key;
        //     foreach ($values as $valor){
        //         echo $valor;
        //     }
        // }   
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
        crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" 
        crossorigin="anonymous"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" 
        crossorigin="anonymous"></script>
  </body>
</html>