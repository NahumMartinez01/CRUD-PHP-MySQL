<?php 

    $nombre_db = "zapateria";
    $usuario = "root";
    $contraseña="";


    try {
        $bd= new PDO(
            'mysql:host=localhost;
            dbname='.$nombre_db,
            $usuario,
            $contraseña
        ); 
    } catch (Excpetion $e) {
        echo "Conexióin fallida ".$e->getMessage();
    }


?>