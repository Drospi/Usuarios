<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="text-2xl w-full flex h-16 justify-between items-center px-4">
    <h2>Gestion de usuarios</h2>
    <a class="text-white text-lg py-2 px-4 bg-blue-500 rounded" href="/agregar">Agregar Usuario</a>
  </div>
<div class="w-full flex flex-col justify-center items-center">
  <table class=" w-3/4 font-light p-12">
    <tr class="border-0 border-b-2 border-gray-300">
      <th><input type="checkbox" name="" id=""></th>
      <th>Usuario</th>
      <th>E-mail</th>
    </tr>
    @if ($usuarios->count() == 0)
    <p>No hay usuarios</p>
    @else
    @foreach ($usuarios as $usuario)
      <tr class="py-8 my-8">
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->nombre }} {{ $usuario->apellidos }}</td>
        <td>{{ $usuario->email }}</td>
      </tr>
    @endforeach
    @endif
</table>
<p class="text-gray-500 justify-left">{{  $usuarios->count() }} Usuarios</p>
</div>
</body>
</html>
