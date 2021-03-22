<?php
    define ("TITLE", "Mostrar de Array - Tabla");
?>
  <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5"><?php print(TITLE); ?></h1>
            <figure class="figure">
                <label><h5>Se solicita transformar el siguiente array en un tabla:</h5></label><br>
                <img src="images/img_tabla-array.png" class="figure-img img-fluid rounded" alt="array">
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
        for ($i=0; $i<3; $i++){
            echo '<tbody>';
                echo '<tr>';
                    echo '<td>'. ($i+1) .'</td>';
                    echo '<td>'. $datos[$i]["Nombre"] .'</td>';
                    echo '<td>'. $datos[$i]["Telefono"] .'</td>';
                    echo '<td>'. $datos[$i]["Correo"] .'</td>';
                echo '</tr>';
            echo '</tbody>';   
        }
        echo '</table>'; 
                 
    ?>
    </div>


