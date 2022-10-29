<?php

    include('logic/conexion.php');
    $registros = "SELECT * FROM solicitud order by id desc";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>

    <link rel="stylesheet" type="text/css" href="/src/public/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/src/public/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/src/public/css/jquery.dataTables.css"/>
    
    <link rel="shortcut icon" href="public/img/logo.jfif">

</head>

<body>

    <div style="padding: 100px;">
        <h1>Listado de clientes</h1>
        <br>
        <table id="table_id"  class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Tipo Solicitud</th>
                    <th>Plan</th>
                    <th>Celular</th>
                    <th>DNI</th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $resultado = mysqli_query($conectar, $registros);
                    while($row = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <td><?php 
                            
                            if($row["tipoSolicitud"]  == "cambiate_bitel")
                                echo "Cámbiate a Bitel ";
                            else
                                echo "Adquirir nueva línea"; 
                            
                        ?></td>
                        <td><?php
                        
                            switch ($row["plan"]) {
                                case 'plan_29':
                                    echo "Plan 29.90";
                                    break;
                                case 'plan_39':
                                    echo "Plan 39.90";
                                    break;
                                case 'plan_49':
                                    echo "Plan 49.90";
                                    break;
                                case 'plan_65':
                                    echo "Plan 65.90";
                                    break;
                                
                                default:
                                    echo $row["plan"]; 
                                    break;
                            }
                            
                        ?></td>
                        <td><?php echo $row["celular"] ?></td>
                        <td><?php echo $row["dni"] ?></td>
                        <td><?php echo $row["nombreCompleto"] ?></td>
                        <td><?php echo $row["correo"] ?></td>
                        <td><?php echo $row["departamento"] ?></td>
                        <td><?php echo $row["provincia"] ?></td>
                        <td><?php echo $row["distrito"] ?></td>
                        <td><?php echo $row["direccion"] ?></td>
                    </tr>
                <?php
                    }
                ?>
                    <!-- <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr> -->
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Salary</th>
                    <th>Salary</th>
                    <th>Salary</th>
                    <th>Salary</th>
                    <th>Salary</th>
                </tr>
            </tfoot> -->
        </table>
    </div>

</body>

<script src="/src/public/js/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="/src/public/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>


</html>