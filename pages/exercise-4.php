<?php
    $empleados = array(
        array(
            "departamento"=>"R.R.H.H",
            "empleado"=>"Margarita Linares",
            "salario"=>3500
        ),
        array(
            "departamento"=>"Contabilidad",
            "empleado"=>"Alberto Canizales",
            "salario"=>2000
        ),
        array(
            "departamento"=>"Finanzas",
            "empleado"=>"Maria Gomez",
            "salario"=>2500
        ),
        array(
            "departamento"=>"Gerencia",
            "empleado"=>"Anastacia Rivera",
            "salario"=>3000
        ),
        array(
            "departamento"=>"Finanzas",
            "empleado"=>"Bladimir Romero",
            "salario"=>1000
        ),
        array(
            "departamento"=>"Contabilidad",
            "empleado"=>"Andrea Robles",
            "salario"=>3000
        ),
        array(
            "departamento"=>"R.R H.H",
            "empleado"=>"Carmen Rosales",
            "salario"=>1500
        ),
    );
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>4. Cree un array asociativo en donde almacene los datos mostrados en la siguiente tabla:</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table lead table-dark table-striped table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Empleado</th>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $salario=0.0;
                        foreach($empleados as $indices=>$datosEmpleado){
                            
                            echo "<tr>";
                                foreach($datosEmpleado as $clave=>$dato){
                                    echo $clave == "salario" ? "<td>$$dato</td>" : "<td>$dato</td>";
                                    $salario += $clave == "salario" ? $dato : 0;
                                } 
                            echo "</tr>";
                        }
                        $salarioPromedio = round($salario / count($empleados), 2);
                    ?>
                    <tr>
                        <td colspan="2">Salario Total</td>
                        <td>$<?=$salario?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Salario Promedio</td>
                        <td>$<?=$salarioPromedio?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Departamento</th>
                        <th>Empleado</th>
                        <th>Salario</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 mx-auto">
            <ul class="list-group">
                <?php
                    $empleadosDepartamento = array_count_values(array_column($empleados, "departamento"));
                    foreach($empleadosDepartamento as $departamento=>$total){
                        echo "
                            <li class='list-group-item d-flex justify-content-between align-items-center'>
                                Empleados en: <strong>$departamento</strong>.
                                <span class='badge badge-primary badge-pill'>$total</span>
                            </li>
                        
                        ";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>