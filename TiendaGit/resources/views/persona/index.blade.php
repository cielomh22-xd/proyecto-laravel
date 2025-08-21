<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionar Persona</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-gray-700">Gestionar Persona</h1>
      <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        + Agregar Persona
      </button>
    </div>

    <!-- Tabla -->
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-gray-200 text-gray-700">
            <th class="px-4 py-2 border">#</th>
            <th class="px-4 py-2 border">Nombre</th>
            <th class="px-4 py-2 border">Apellido</th>
            <th class="px-4 py-2 border">Celular</th>
            <th class="px-4 py-2 border">Correo</th>
            <th class="px-4 py-2 border text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 border">1</td>
            <td class="px-4 py-2 border">Carlos</td>
            <td class="px-4 py-2 border">Pérez</td>
            <td class="px-4 py-2 border">70012345</td>
            <td class="px-4 py-2 border">carlos@example.com</td>
            <td class="px-4 py-2 border text-center">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded mr-2 hover:bg-yellow-600">Editar</button>
              <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Eliminar</button>
            </td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 border">2</td>
            <td class="px-4 py-2 border">María</td>
            <td class="px-4 py-2 border">Gómez</td>
            <td class="px-4 py-2 border">70123456</td>
            <td class="px-4 py-2 border">maria@example.com</td>
            <td class="px-4 py-2 border text-center">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded mr-2 hover:bg-yellow-600">Editar</button>
              <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Eliminar</button>
            </td>
          </tr>
          <!-- Más filas aquí -->
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
