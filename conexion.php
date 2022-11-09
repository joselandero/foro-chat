<?php
    $hostname_conexion = "localhost";
    $database_conexion = "foro";
    $username_conexion = "root";
    $password_conexion = "";
    $conexion = new mysqli($hostname_conexion, $database_conexion, $username_conexion, $password_conexion);
    if ($conexion->connect_error){
        echo "Error al conectar a la base de datos: " . $conexion->connect_error . "\n";
        return false;
    }
    echo "Conexion exitosa..." . "\n";
    return true;
?>