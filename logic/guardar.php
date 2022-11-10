<?php
    include 'conexion.php';
    
    $tipoSolicitud  = $_POST['tipoSolicitud'] ?? "";
    $horarioContacto= $_POST['horarioContacto'] ?? "";

    if($tipoSolicitud == "cambiate_bitel"){
        $operadorProcedencia    = $_POST['operadorProcedencia'] ?? "";
        $modalidadActual        = $_POST['modalidadActual'] ?? "";
    } else {
        $operadorProcedencia    = "";
        $modalidadActual        = "";
    }

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
        $insertar = "INSERT INTO solicitud (tipoSolicitud, plan, celular, dni, nombreCompleto, correo, departamento, provincia, distrito, direccion, operadorProcedencia, modalidadActual, horarioContacto) VALUES ('$tipoSolicitud','$plan','$celular','$dni','$nombreCompleto','$correo','$departamento','$provincia','$distrito','$direccion', '$operadorProcedencia', '$modalidadActual', '$horarioContacto')";
        $query = mysqli_query($conectar, $insertar);

        $mensaje = (($query) ? "exito" : "error");
        
        header("Location: ../solicitud-de-servicio.php?m=$mensaje");

    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }

?>