
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