<?php

function eliminar_provincia_por_codigo($codigo)
{    
    include './conexion.php';
    $consulta = "DELETE FROM `provincias` WHERE `codigo` = $codigo";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;    
}
