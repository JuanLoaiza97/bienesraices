<?php 

function conectarBD () :mysqli{
    $db = mysqli_connect('localhost', 'root', '1997', 'bienesraices_crud');

    if(!$db){
        echo "no se pudo coonectar";
        exit;
    }
    return $db;
}