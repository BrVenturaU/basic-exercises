<!doctype html>
<html lang="en">
<?php
    define ("TITLE", "Datos personales: Estudiantes");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
        crossorigin="anonymous">
    <title>Mostrar Datos</title>
  </head>
  <body>
   <div class="container">
   <div class="col-36 mt-5">
    <h1><?php print(TITLE); ?></h1>
        <form 
            method="POST" 
            action="mostrarDatos.php" 
            class="mt-5">
            <div class="form-row mt-5">
                <div class="col-md-3 mt-3 ">
                    <label>Nombres</label>
                    <input 
                        type="text" 
                        name="nombre_1"
                        class="form-control" 
                        placeholder="Digite primer nombre" 
                        required>
                </div>
                <div class="col-md-3  mt-5">
                    <input 
                        type="text" 
                        name="nombre_2"
                        class="form-control" 
                        placeholder="Digite segundo nombre">
                </div>
                <div class="col-md-3 mt-3">
                    <label>Apellidos</label>
                    <input 
                        type="text" 
                        name="apellido_1"
                        class="form-control"
                        placeholder="Digite primer apellido" 
                        required>
                </div>
                <div class="col-md-3 mt-5">
                <input 
                    type="text"
                    name="apellido_2" 
                    class="form-control"
                    placeholder="Digite segundo apellido">
                
                </div>
            </div>

            <div class="form-row mt-3">
                <div class="col-md-3 mt-3 ">
                    <label>Edad</label>
                    <input 
                        type="number" 
                        name="edadEstudiante"
                        class="form-control" 
                        placeholder="Digite edad" 
                        min="1"
                        required>
                </div>
                <div class="col-md-3 mt-3">
                    <label>Genero</label>
                    <select class="custom-select" name="genero">
                        <option selected>Selecionar...</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="col-md-3 mt-3">
                    <label>Codigo</label>
                    <input 
                        type="text" 
                        name="codigoEstudiante"
                        class="form-control"
                        placeholder="Digite codigo" 
                        required>
                </div>
                <div class="col-md-3 mt-3">
                    <label>Lugar de origen</label>
                    <input 
                        type="text"
                        name="cuidad-Origen"
                        class="form-control"
                        placeholder="Lugar/cuidad de origen"
                        required>
                </div>
            </div>
            
            <div class="form-row mt-3">
                <div class="col-md-3 mt-3 ">
                    <label>Departamento</label>
                    <input 
                        type="text" 
                        name="dep-Origen"
                        class="form-control"
                        placeholder="Departamento de origen">
                </div>
                <div class="col-md-3  ml-2 mt-5">
                    <div class="custom-control custom-switch">
                        <input 
                            id="selection"
                            type="checkbox"
                            name="checkExtranjero"
                            onchange="javascript:checkCountry()"
                            class="custom-control-input"
                            checked>
                        <label class="custom-control-label" for="selection">Salvadoreño/a</label>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <label>Pais</label>
                    <input 
                        type="text" 
                        id="textCountry"
                        name="paisExtranjero"
                        class="form-control"
                        placeholder="Pais de origen"
                        disabled>
                </div>
            </div>

            <div class="form-row mt-5 justify-content-center">
                <div class="col-auto  ">
                    <button 
                        type="submit" 
                        name="mostrarDatos"
                        class="btn btn-primary btn-lg mb-5">Mostrar datos
                    </button>
                </div>
            </div>
    </form>

    
    <?php

    if (isset($_POST['mostrarDatos'])) {
        //definicion de variables de cada elemento de HTML
        $name_1 = $_POST['nombre_1'] ?? null;
        $name_2 = $_POST['nombre_2'] ?? null;
        $lastname_1 = $_POST['apellido_1'] ?? null;
        $lastname_2 = $_POST['apellido_2'] ?? null;
        $age = $_POST['edadEstudiante'] ?? null;
        $code = $_POST['codigoEstudiante'] ?? null;
        $city = $_POST['cuidad-Origen'] ?? null;
        $departament = $_POST['dep-Origen'] ?? null;
        $checkOption = $_POST['checkExtranjero'] ?? null;
        $country = $_POST['paisExtranjero'] ?? 'El Salvador';
        $selectGender = $_POST['genero'] ?? null;

        $repeticiones=1;
      
        // Tabla para mostrar los resultados
        echo '<table class="table  table-striped table-bordered table-hover">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th scope="col">Nombre completo</th>';
                    echo '<th scope="col">Apellido completo</th>';
                    echo '<th scope="col">Edad</th>';
                    echo '<th scope="col">Genero</th>';
                    echo '<th scope="col">Codigo</th>';
                    echo '<th scope="col">Lugar de Origen</th>';
                    echo '<th scope="col">Departamento</th>';
                    echo '<th scope="col">Pais Origen</th>';
                echo '</tr>';
            echo '</thead>';

        while ($repeticiones <= 1):
            //Mostrar campo:Genero - Por el value de la seleccion
            switch($selectGender) {
                case 'Femenino':
                    echo '<tbody>';
                        echo '<tr>';
                            echo '<td>'. ucfirst($name_1) . ' ' . ucfirst($name_2) .'</td>';
                            echo '<td>'. ucfirst($lastname_1) . ' ' . ucfirst($lastname_2) .'</td>';
                            echo '<td>'. $age .'</td>';
                            echo '<td>'. $selectGender .'</td>';
                            echo '<td>'. strtoupper($code) .'</td>';
                            echo '<td>'. ucfirst($city) .'</td>';
                            echo '<td>'. ucfirst($departament) .'</td>';
                            echo '<td>'. ucfirst($country) . '</td>';
                        echo '</tr>';
                    echo '</tbody>';
                break;
                case 'Masculino':
                echo '<tbody>';
                    echo '<tr>';
                        echo '<td>'. ucfirst($name_1) . ' ' . ucfirst($name_2) .'</td>';
                        echo '<td>'. ucfirst($lastname_1) . ' ' . ucfirst($lastname_2) .'</td>';
                        echo '<td>'. $age .'</td>';
                        echo '<td>'. ucfirst($selectGender) .'</td>';
                        echo '<td>'. strtoupper($code) .'</td>';
                        echo '<td>'. ucfirst($city) .'</td>';
                        echo '<td>'. ucfirst($departament) .'</td>';
                        echo '<td>'. ucfirst($country) . '</td>';
                    echo '</tr>';
                echo '</tbody>';
                break;
                default:
            };
                
        $repeticiones++;   

        endwhile;

        echo '</table>';  
    }                
    ?>
    </div>
   </div>

   <script>
        function checkCountry(){
            if (textCountry.disabled == false){
                textCountry.disabled = true;
            } 
            else {
                textCountry.disabled = false;
            }
        };
    </script>

    <script 
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" 
        crossorigin="anonymous"></script>
  </body>
</html>