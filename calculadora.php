<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
      crossorigin="anonymous">
    <title>Calculadora</title>
  </head>
  <body>
  <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5">Calculadora de Operaciones Basicas</h1>
            <form action="calculadora.php" method="POST" class="form-group">
                <label class="form-label"><h6>Ingrese los valores que se solicitan:</h6></label>
                <div class="row">
                    <div class="col-md-6 ">
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
                <label class="form-label mt-3"><h6>Seleccione la operacion:</h6></label>
                    <select name="listaOperaciones" class="form-control col-md-6 ">
                            <option value="sumar">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicacion</option>
                            <option value="division">Divion</option>
                    </select>
                    <button 
                        type="submit" 
                        name="realizarOperacion"
                        class="btn btn-primary btn-block btn-lg col-md-3 mb-5 mt-5 "> Realizar
                    </button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
