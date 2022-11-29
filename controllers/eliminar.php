<?php
   
   include '../model/conexion.php';

    $idZapato = $_GET["id"];
    $consulta = $bd->prepare("DELETE FROM zapatos WHERE id = ?");
    $resultado = $consulta->execute([$idZapato]);
    
    if ($resultado) {
        header("Location: ../templates/table.php");
    } else {
        echo "Fallo al eliminar";
    }
?>