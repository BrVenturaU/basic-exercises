<!doctype html>
<html lang="en">
<?php
    define ("TITLE", "Datos personales: Estudiantes");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
        crossorigin="anonymous">
    <title>Datos Personales</title>
  </head>
  <body>
    <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5"><?php print(TITLE); ?></h1>
            <form
                method="POST" 
                action="mostrarDatos.php" 
                class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Nombre completo</label>
                        <input 
                            type="text"
                            name="nombre_1" 
                            class="form-control"
                            placeholder="Digite primer nombre"
                            required>
                    </div>
                    <div class="col-md-3 mt-5">
                        <input 
                            type="text"
                            name="nombre_2" 
                            class="form-control"
                            placeholder="Digite segundo nombre">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Apellido completo</label>
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
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Edad</label>
                            <input 
                                type="number" 
                                name="edadEstudiante"
                                class="form-control"
                                placeholder="Digite edad"
                                min="0"
                                required>
                        </div>
                        <div class="col-md-3">
                        <label class="form-label">Genero</label>
                            <select class="form-select" name="genero">
                                <option selected>Selecionar genero</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Codigo</label>
                            <input 
                                type="text" 
                                name="codigoEstudiante"
                                class="form-control"
                                placeholder="Digite su codigo"
                                required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Lugar de Origen</label>
                            <input 
                                type="text" 
                                name="cuidad-Origen"
                                class="form-control"
                                placeholder="Lugar/cuidad de origen"
                                required>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Departamento</label>
                            <input 
                                type="text" 
                                name="dep-Origen"
                                class="form-control"
                                placeholder="Departamento de origen"
                                required>
                        </div>
                        <div class="col-md-3  mt-4">
                            <div class="form-check form-switch mt-4">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox"
                                    name="checkExtranjero"
                                    onchange="javascript:checkCountry()"
                                    checked>
                                <label class="form-check-label">Salvadoreñ/a</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Pais</label>
                            <input 
                                type="text" 
                                id="textCountry"
                                name="paisExtranjero"
                                class="form-control"
                                placeholder="Pais de origen"
                                disabled>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class=" d-grid gap-2 col-4 mx-auto text-center">
                            <button 
                                type="submit" 
                                name="mostrarDatos"
                                class="btn btn-primary mb-5 mt-5"> Mostrar informacion
                            </button>
                        </div>
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

    <script>
        function checkCountry(){
            if (textCountry.disabled == false){
                textCountry.disabled = true;
            } 
            else {
                textCountry.disabled = false;
            }
        }
    </script>
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