<?php

function eliminar_camionero_por_dni($dni)
{    
    include './conexion.php';
    $consulta = "DELETE FROM `camioneros` WHERE `dni` = $dni";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;    
}
