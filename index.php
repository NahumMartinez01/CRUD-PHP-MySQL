<?php include 'templates/header.php' ?>

<div class="flex justify-end mr-3 mt-3">
    <div class="w-32 max-w-md bg-violet-500 hover:bg-violet-700  h-14 rounded">
        <a class="block w-full p-3 h-full text-white" href="templates/table.php">Mostrar
            datos</a>
    </div>
</div>

<div class="w-full max-w-md mx-auto my-8">
    <h3 class="text-white text-center text-4xl mb-8">Formulario Inventario</h3>
    <form action="controllers/registro.php" method="POST" enctype="multipart/form-data"
        class="bg-cyan-200 w-full shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="marca">
                Marca
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="marca" type="text" placeholder="Nike" name="marca" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estilo">
                Estilo
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="estilo" type="text" placeholder="zapatillas" name="estilo" max="255" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                Descripcion
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="descripcion" type="text" placeholder="Descripcion" max="255" name="descripcion">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                Stock
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="stock" type="number" placeholder="cantidad" name="stock" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">
                Precio
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="precio" type="number" step="0.01" placeholder="Zapatillas" name="precio" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                Imagen
            </label>
            <input class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full
                file:border-0 file:text-sm file:font-bold file:bg-violet-50 file:text-fuchsia-900
                hover:file:bg-violet-100" id="foto" type="file" name="foto">
        </div>
        <div class="flex items-center justify-between mt-6">
            <button
                class="w-full h-18 bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" name="btn">
                Guardar
            </button>
        </div>
</div>
</body>

</html>