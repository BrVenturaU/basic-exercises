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
    <title>Suma de Cantidades</title>
  </head>
  <body>
  <div class="container">
        <div class="mb-3">
            <h1 class="mb-5 mt-5">Suma de N Cantidad de Numeros</h1>
            <div class="form-group">
              <label class="form-label"><h6>Primero agregue la cantidad de campos a usar y luego sume. </h6></label>
              <button 
                id="add"
                type="submit" 
                name="realizarOperacion"
                class="btn btn-primary btn-block col-md-3 mb-3" >Agregar campos
              </button>
            </div>
            
            <form id="form" action="sumaNCantidad.php" method="POST" class="form-group">
                <button 
                  type="submit" 
                  name="sumar"
                  class="btn btn-primary btn-block col-md-3 mb-5 ">Sumar
                </button>
            </form>
        <?php
            if(isset($_POST["numeros"])){
                $numeros = $_POST["numeros"];
                $total = sumaNumeros($numeros);
                echo "<div class='col-md-6 offset-md-2 mt-5'>
                        <h4>La suma de los numeros es: $total</h4>
                      </div>";
            } else {
                echo ' ';
            }

            function sumaNumeros(array $arrays): float
            {
                return array_sum($arrays);
            }
        ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            const form = $("#form");
            const html = `
                <input name='numeros[]' value='0' min="0" type='number'/>
            `;
            $("#add").click(()=>{
                form.append(html);
            });
          });
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