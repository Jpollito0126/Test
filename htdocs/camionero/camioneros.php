<?php

function listar_camioneros()
{    
    include './conexion.php';
    $resultado = mysqli_query($conexion, 'SELECT * FROM `camioneros`');
    $camioneros = [];
    while($fila = mysqli_fetch_assoc($resultado))
    {
        array_push($camioneros, $fila);
    }
    return $camioneros;
}
