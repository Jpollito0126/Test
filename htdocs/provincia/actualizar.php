<?php

function actualizar_provincia($codigo, $nombre)
{    
    include './conexion.php';
    $consulta = "UPDATE `provincias` SET `nombre` = '$nombre' WHERE `provincias`.`codigo` = $codigo;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}
