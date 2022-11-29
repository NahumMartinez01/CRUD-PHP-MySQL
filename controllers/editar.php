<?php  include '../templates/header.php'?>

<?php 
    include '../model/conexion.php';

    $idZapato = $_GET["id"];

    $query =$bd->prepare("SELECT * FROM zapatos WHERE id = ?");
    $query->execute([$idZapato]);

    $zapatos = $query->fetch(PDO::FETCH_OBJ);

     
    
    

?>

<div class="flex justify-end mr-3 mt-3">
    <div class="w-22 max-w-md bg-red-500 hover:bg-pink-700 rounded">
        <a class="block w-full p-3 h-full text-white text-center" href="../templates/table.php">Regresar</a>
    </div>
</div>

<div class="w-full max-w-md mx-auto my-16">
    <form action="update.php" method="POST" enctype="multipart/form-data"
        class="bg-sky-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="marca">
                Marca
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="marca" type="text" placeholder="Nike" name="marca" value=<?php echo $zapatos->marca ?> required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estilo">
                Estilo
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight
            focus:outline-none focus:shadow-outline" id="estilo" name="estilo" required><?php echo $zapatos->estilo ?>
            </textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                Descripcion
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight
            focus:outline-none focus:shadow-outline" id="descripcion" name="descripcion"><?php echo $zapatos->descripcion ?>
            </textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                Stock
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="stock" type="number" placeholder="cantidad" name="stock" value=<?php echo $zapatos->stock ?>
                required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">
                Precio
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="precio" type="number" step="0.01" placeholder="Zapatillas" name="precio"
                value=<?php echo $zapatos->precio ?> required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                Imagen
            </label>
            <input class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full
                file:border-0 file:text-sm file:font-bold file:bg-violet-50 file:text-fuchsia-900
                hover:file:bg-violet-100" id=" foto" type="file" placeholder=<?php echo $zapatos->imagen ?>
                name="foto">
        </div>
        <div class="mb-4">
            <input type="hidden" class="rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight " name="id"
                value=<?php echo $zapatos->id?>>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="w-full h-18 bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" name="btn">
                Actualizar
            </button>
        </div>
</div>