<?php
function listaCategorias($conexao)
{
    $query="Select * from categorias";
    $categorias=array();
    $result=mysqli_query($conexao,$query);
    while($categoria= mysqli_fetch_assoc($result))
    {
        array_push($categorias,$categoria);
    }
    return $categorias;

}