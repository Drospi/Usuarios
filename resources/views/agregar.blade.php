<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="text-2xl w-full flex h-16 justify-between items-center px-4">
    <h2>Agregar usuarios</h2>
    <a class="text-white text-lg py-2 px-4 bg-blue-500 rounded" href="/">Volver al listado</a>
  </div>
  <div class="max-w-lg mx-auto bg-white p-6  ">
    <form action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
      <div class="mb-4 flex">
        <div class="mr-2 w-1/2">
          <label for="nombre" class="block text-gray-700">Nombre:</label>
          <input type="text" id="nombre" name="nombre" class="border-gray-300 border-2 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
        </div>
        <div class="ml-2 w-1/2">
          <label for="apellidos" class="block text-gray-700">Apellido:</label>
          <input type="text" id="apellidos" name="apellidos" class="border-gray-300 border-2 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
        </div>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-gray-700">Correo Electrónico:</label>
        <input type="email" id="email" name="email" class="border-gray-300 border-2 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
      </div>

      <div class="mb-6">
        <label for="password" class="block text-gray-700">Contraseña:</label>
        <input type="password" id="password" name="password" class="border-gray-300 border-2 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
      </div>

      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded focus:outline-none focus:shadow-outline">Guardar</button>
      </div>
    </form>
  </div>

</body>
</html>
