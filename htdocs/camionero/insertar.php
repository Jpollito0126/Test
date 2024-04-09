<?php

function insertar_camionero($nombre, $telefono, $direccion, $salario, $poblacion)
{    
    include './conexion.php';
    $consulta = "INSERT INTO `camioneros` (`dni`, `nombre`, `telefono`, `direccion`, `salario`, `poblacion`) VALUES (NULL, '$nombre', '$telefono', '$direccion', '$salario', '$poblacion');";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}