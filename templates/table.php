<?php include 'header.php' ?>
<?php

  include "../model/conexion.php";

    

 $sentencia = $bd->query("SELECT * from zapatos");

  $zapatos = $sentencia->fetchAll(PDO::FETCH_OBJ);
 /*  print_R($zapatos); */
    
  
?>

<div class="flex justify-end mr-3 mt-3">
    <div class="w-20 h-12 max-w-md bg-red-500 hover:bg-pink-700 rounded">
        <a class="block w-full p-3 h-full text-white text-center" href="../index.php">Regresar</a>
    </div>
</div>

<div class="my-14 w-full">
    <h2 class=" text-center text-4xl font-bold text-white">INVENTARIO</h2>
</div>
<div class=" container mx-auto px-6">
    <table class="table-auto my-12 mx-auto text-xl text-white">
        <thead>
            <tr>
                <th class="border-r px-4">Id</th>
                <th class="border-r px-6">Marca</th>
                <th class="border-r px-4">Estilo</th>
                <th class="border-r px-8">Descripción</th>
                <th class="border-r px-4">Precio</th>
                <th class="border-r px-4">Stock</th>
                <th class="border-r px-4">Imagen</th>
                <th class="px-4">Acciones</th>
            </tr>
        </thead>
        <?php foreach($zapatos as $zapato){?>
        <tbody>
            <tr>
                <!-- Para pintar el dato de la base de dato debemos poner echo para mostrar los datos -->
                <th scope="row" class="border"><?php echo $zapato->id?>
                </th>
                <td class="border px-4 py-2"><?php echo $zapato->marca?></td>
                <td class="border px-4 py-2"><?php echo $zapato->estilo?></td>
                <td class="border px-4 py-2"><?php echo $zapato->descripcion?></td>
                <td class="border px-4 py-2">$<?php echo $zapato->precio?></td>
                <td class="border px-4 py-2"><?php echo $zapato->stock?></td>
                <td class="border px-4 py-2"><img src=" <?php echo $zapato->imagen?> " width="175" height="175">
                </td>
                <td class="border"> <a href="../controllers/editar.php?id=<?php echo $zapato->id ?>"
                        class=" bg-sky-700 hover:bg-sky-900 text-white font-bold px-4 py-2 m-3 rounded focus:outline-none focus:shadow-outline">Editar</a>
                </td>
                <td class="border">
                    <a href="../controllers/eliminar.php?id=<?php echo $zapato->id ?>" class=" bg-red-700 hover:bg-red-900 text-white font-bold px-4 py-2 m-3 rounded
                        focus:outline-none focus:shadow-outline">Eliminar</a>
                </td>
            </tr>
        </tbody>
        <?php }?>
    </table>
</div>