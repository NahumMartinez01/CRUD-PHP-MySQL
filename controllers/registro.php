<?php
if (empty($_POST['marca']) || empty($_POST['descripcion']) || empty($_POST['estilo']) || empty($_POST['stock']) || empty($_POST['precio']) ) {
    echo "error complete el formulario";

    exit(); //se cierra el registro se vuelve a la pestaña anterior
}

include "../model/conexion.php";


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

$consulta = $bd->prepare("INSERT INTO zapatos(marca,descripcion,estilo,stock,precio,imagen) VALUES (?,?,?,?,?,?)");
$resultado = $consulta->execute([$marca, $descripcion, $estilo, $stock, $precio, $ruta]);

if ($resultado) {
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}

?>