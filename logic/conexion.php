<?php

    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "biteldelivery";

    try{
        $conectar = mysqli_connect("localhost","root","","biteldelivery");
        mysqli_set_charset($conectar, "utf8");
    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }
?>