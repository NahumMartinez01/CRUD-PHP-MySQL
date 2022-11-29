<?php
   
   include '../model/conexion.php';


   $idZapato = $_POST["id"];
   $marca = $_POST['marca'];
   $descripcion = $_POST['descripcion'];
   $estilo = $_POST['estilo'];
   $stock = $_POST['stock'];
   $precio = $_POST['precio'];

   $nombre_imagen = $_FILES['foto']['name'];
   $temporal = $_FILES['foto']['tmp_name'];
   $carpeta = '../img';
   $ruta = $carpeta.'/'.$nombre_imagen;
   move_uploaded_file($temporal, $carpeta . '/' . $nombre_imagen);

   echo $marca, $estilo, $stock, $precio, $ruta;

   $consulta = $bd->prepare("UPDATE zapatos SET marca = ?, descripcion = ?, estilo = ?, stock = ?, precio = ?, imagen = ? WHERE id = ?");
   $resultado = $consulta->execute([$marca, $descripcion,  $estilo, $stock, $precio, $ruta, $idZapato]);

   if ($resultado) {
    header("Location: ../index.php");
} else {
    echo "Fallo la actualización";
}
    
?>