<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
      crossorigin="anonymous">
    <title>Suma de Cantidades</title>
</head>
<body>
<div class="container">
    <div class="mb-3">
        <h1 class="mb-5 mt-5">Suma de N Cantidad de Numeros</h1>
        <form 
            action="sumaNCantidad.php" 
            method="POST" 
            name="suma">
            <label class="form-label" for="num1">
                <h6>Cuantos numeros desea sumar:</h6>
            </label>
            <div class="row">
            <div class="col-md-6 m-2">
                <input 
                    type="number"
                    name="cantidadNumero" 
                    min="0"
                    class="form-control mb-3" 
                    placeholder="Digite cantidad numero">
            </div>
            </div>
            <div class="d-grid gap-2 col-3">
                <button 
                    type="submit" 
                    name="Enviar"
                    class="btn btn-primary mt-5"> Cantidad de Numeros
                </button>
            </div>
    </div>

 <?php
    //Cantidad de numeros a sumar elegidos por el usuario
    @$cantidadNumeros = $_POST["cantidadNumero"]; 
    //Input donde el usuario digita los numeros que va a sumar
    @$numerosIngresados = array($_POST["NumeroSumar"]);

    for ($i=1; $i <= $cantidadNumeros; $i++) {
        //Repetir los campos segun el usuario designe
        echo '<br>';
        echo "<label class='form-label'> Digite el numero:  $i </label> " ." ";
        echo '<input 
                type="number" 
                name="NumeroSumar" 
                min="0"
                class="form-control mb-3>"';  
    }

    echo '<br>
    <div class="d-grid gap-2 col-3">
        <button 
            type="submit" 
            value="Sumar" 
            onclick="<?php echo array_sum($numerosIngresados);?>"
            class="btn btn-primary mb-5 mt-5"> Sumar
        </button>
    </div>';
    //Resultado del array
    echo "<h4>Resultado:</h4>";
    //print_r($numerosIngresados);


    #PRUEBA - 1 
    function sumarArrays(array ...$arrays): array
        {
            return array_map(function(array $cantidadNumeros): int {
                return array_sum($cantidadNumeros);
            }, $arrays);
        }
    //print_r(sumarArrays($numerosIngresados));
    var_dump(sumarArrays($numerosIngresados));

    #PRUEBA - 2
//     function sumaNumeros ($numeros) {
//         $total = array_sum($numeros);
//        var_dump( $total);
//    }
//    var_dump (sumaNumeros($numerosIngresados));


?>     
        </form>
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