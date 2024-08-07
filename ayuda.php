<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetFinder</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
  <header class="px-4 lg:px-6 h-14 flex items-center">
    <a class="flex items-center justify-center" href="../public/index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
        <circle cx="11" cy="4" r="2"></circle>
        <circle cx="18" cy="8" r="2"></circle>
        <circle cx="20" cy="16" r="2"></circle>
        <path d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z"></path>
      </svg>
      <span class="sr-only">PetFinder</span>
    </a>
    <nav class="ml-auto flex gap-4 sm:gap-6">
      <a class="adoptar-link text-sm font-medium hover:underline underline-offset-4" href="#adoptar">Adoptar</a>
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">Voluntariado</a>
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">Donar</a>
      <a class="text-sm font-medium hover:underline underline-offset-4" href="#">Nosotros</a>
    </nav>
  </header>

  <section class="w-full py-12 md:py-24 lg:py-32 flex items-center justify-center min-h-screen bg-gray-800 dark:bg-gray-800">
    <div class="text-center max-w-2xl px-6 py-12">
      <h1 class="text-3xl text-white font-bold tracking-tighter sm:text-5xl xl:text-6xl">Encontraste un animal sin hogar?</h1>
      <p class="mt-4 text-gray-400 text-lg">Hay muchas formas en las que puedes apoyar a PetFinder y ayudarnos a continuar nuestra misión de rescatar y encontrar hogares para mascotas necesitadas.</p>

      <form id="pet-form" action="upload.php" method="post" enctype="multipart/form-data" class="mt-8 max-w-lg mx-auto mb-4">
        <div class="mb-4">
          <label for="img-uploader" class="block text-gray-700 text-sm font-bold mb-2">Imagen del animal:</label>
          <img class="left-0 top-0 w-100 h-65" id="img-preview">
          <input type="file" id="img-uploader" name="imagen" accept="image/*" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
          <input type="text" id="direccion" name="direccion" placeholder="Ingrese la dirección" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="calles" class="block text-gray-700 text-sm font-bold mb-2">Entre calles:</label>
          <input type="text" id="calles" name="calles" placeholder="Ingrese las calles" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
        </div>
        <div class="mb-6">
          <label for="detalles" class="block text-gray-700 text-sm font-bold mb-2">Detalles:</label>
          <textarea id="detalles" name="detalles" placeholder="Ingrese más detalles sobre el animal encontrado" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
      </form>
    </div>
  </section>

  <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 text-center justify-center items-center px-4 md:px-6 border-t">
    © 2024 PetFinder. All rights reserved.
  </footer>
</body>
</html>
