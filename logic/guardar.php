<?php
    include 'conexion.php';
    
    $tipoSolicitud  = $_POST['tipoSolicitud'] ?? "";
    $plan           = $_POST['plan'] ?? "";
    $celular        = $_POST['celular'] ?? "";
    $dni            = $_POST['dni'] ?? "";
    $nombreCompleto = $_POST['nombreCompleto'] ?? "";
    $correo         = $_POST['correo'] ?? "";
    $departamento   = $_POST['departamento'] ?? "";
    $provincia      = $_POST['provincia'] ?? "";
    $distrito       = $_POST['distrito'] ?? "";
    $direccion      = $_POST['direccion'] ?? "";

    try{
        $insertar = "INSERT INTO solicitud (tipoSolicitud, plan, celular, dni, nombreCompleto, correo, departamento, provincia, distrito, direccion) VALUES ('$tipoSolicitud','$plan','$celular','$dni','$nombreCompleto','$correo','$departamento','$provincia','$distrito','$direccion')";
        $query = mysqli_query($conectar, $insertar);

        if($query){

            $mensaje = "exito";
            // echo "<script> 
            //     location.href = '../index.html';
                // swal({
                //     title: 'Registrado',
                //     text: 'Nos comunicaremos con usted.',
                //     icon: 'success',
                //     button: 'Cerrar!',
                // });
            // </script>";
            
            // if($tipoSolicitud != "")
            //     echo "<div style='background-color: #D4EDDA; 
            //         color: #155724; width: 100%;
            //         text-align: center;
            //         border: 0.1px solid #155724;' class='alert alert-primary' role='alert'> Se registró con éxito! </div>";
    
        }else{

            $mensaje = "error";
            // echo "
            // <script> 
            //     location.href = '../index.html?data='; 
                // swal({
                //     title: 'Ups!',
                //     text: 'Ocurrió un error inesperado.',
                //     icon: 'error',
                //     button: 'Cerrar!',
                // });
            // </script>";

            // echo "<div style='background-color: ##F8D7DA; 
            //         color: #721C24; width: 100%;
            //         text-align: center;
            //         border: 0.1px solid #721C24;' class='alert alert-primary' role='alert'> Ocurrió un error, no pudo ser registrado! </div>";
        
        }
        
        header("Location: ../solicitud-de-servicio.php?m=$mensaje");

    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }

?>