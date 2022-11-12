<?php

    //* Producción
    $host = "localhost";
    $user = "kansfjpu_userbitel";
    $clave = "ctkdaI#p5ih.";
    $bd = "kansfjpu_bitel";

    //*local
    // $host = "localhost";
    // $user = "root";
    // $clave = "";
    // $bd = "biteldelivery";

    try{
        $conectar = mysqli_connect($host,$user,$clave,$bd);
        mysqli_set_charset($conectar, "utf8");
    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }
?>