<?php

function actualizar_camionero($dni, $nombre, $telefono, $direccion, $salario, $poblacion)
{    
    include './conexion.php';
    $consulta = "UPDATE `camioneros` SET `nombre` = '$nombre', `telefono` = '$telefono', `direccion` = '$direccion', `salario` = '$salario', `pobracion` = '$pobracion' WHERE `camioneero`.`dni` = $dni;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}
