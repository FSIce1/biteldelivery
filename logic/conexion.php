<?php

    $host = "localhost";
    $user = "kansfjpu_userbitel";
    $clave = "ctkdaI#p5ih.";
    $bd = "kansfjpu_bitel";

    try{
        $conectar = mysqli_connect($host,$user,$clave,$bd);
        mysqli_set_charset($conectar, "utf8");
    }catch(Exception $e)
    {
        echo "Tienes el siguiente error:", $e->getMessage();
    }
?>