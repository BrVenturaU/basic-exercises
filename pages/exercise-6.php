<?php
    function numeroMayor($numero1, $numero2){
        return $numero1 > $numero2 ? $numero1 : $numero2;
    }
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Número mayor de dos enteros:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-auto">
            <form action="exercise-6.php" method="POST" class="form-group">
                <label class="form-label"><h6>Ingrese los valores que se solicitan:</h6></label>
                <div class="row">
                    <div class="col-md-6 ">
                        <input 
                            type="number"
                            name="numero1" 
                            class="form-control mb-3" 
                            placeholder="Digite el primer numero">
                        <input 
                            type="number" 
                            name="numero2" 
                            class="form-control" 
                            placeholder="Digite el segundo numero">
                    </div>
                    <button 
                        type="submit" 
                        name="realizarOperacion"
                        class="btn btn-primary btn-block btn-lg col-md-3 mb-5 mt-5 "> Realizar
                    </button> 
                </div> 
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
                if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
                    $numero1 = $_POST["numero1"];
                    $numero2 = $_POST["numero2"];
                    $mayor = numeroMayor($numero1, $numero2);
                    echo "
                        <h2>El numero mayor entre $numero1 y $numero2 es: $mayor.</h2>
                    ";
                }
            ?>
            
        </div>
    </div>
</div>
    
