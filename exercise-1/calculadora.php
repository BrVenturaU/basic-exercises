<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
      crossorigin="anonymous">
    <title>Calculadora</title>
  </head>
  <body>
    <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5">Calculadora de Operaciones Basicas</h1>
            <form action="calculadora.php" method="POST">
                <label class="form-label"><h6>Ingrese los valores que se solicitan:</h6></label>
                <div class="row">
                    <div class="col-md-6 m-2">
                        <input 
                            type="text"
                            name="valor_1" 
                            class="form-control mb-3" 
                            placeholder="Digite el primer numero">
                        <input 
                            type="text" 
                            name="valor_2" 
                            class="form-control" 
                            placeholder="Digite el segundo numero">
                    </div>
                </div>
                <div class="col-md-6">
                <label class="form-label mt-3"><h6>Ingrese los valores que se solicitan:</h6></label>
                    <select name="listaOperaciones" class="form-select form-select-sm-2 m-2">
                            <option value="sumar">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicacion</option>
                            <option value="division">Divion</option>
                    </select>
                </div>
                <div class="d-grid gap-2 col-3">
                    <button 
                        type="submit" 
                        name="realizarOperacion"
                        class="btn btn-primary mb-5 mt-5"> Realizar
                    </button>
                </div>
            </form>
        </div>
        <?php
    //Se define una variable para la lista de operaciones del combo-box
      $operacion = $_POST['listaOperaciones'] ?? null;


      // Se crea un switch con cada caso de acuerdo al combo-box
      switch($operacion) 
      {
        case 'sumar':
          $total = $_POST['valor_1'] + $_POST['valor_2'];
          echo "<h4>El total de la suma es: $total</h4>";
          break;

        case 'resta':
          $total =  $_POST['valor_1'] - $_POST['valor_2'];
          echo "<h4>El total de la resta es: $total</h4>";
          break;

        case 'multiplicacion':
          $total =  $_POST['valor_1'] * $_POST['valor_2'];
          echo "<h4>El total de la multiplicacion es: $total</h4>";
          break;

        case 'division':
          $total =  $_POST['valor_1'] / $_POST['valor_2'];
          echo "<h4>El total de la division es: $total</h4>";
        break;

        default:
      }
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

