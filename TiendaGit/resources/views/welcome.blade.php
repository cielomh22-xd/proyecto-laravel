<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema de Gestión</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Barra de navegación -->
<nav class="bg-indigo-600 text-white shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo o título -->
      <div class="flex items-center">
        <span class="text-lg font-bold tracking-wide">Mi Sistema</span>
      </div>

      <!-- Menú en pantallas grandes -->
      <div class="hidden md:flex space-x-6">
        <a href="{{ route('persona.index') }}" class="hover:bg-indigo-500 px-3 py-2 rounded-md text-sm font-medium">Gestionar Persona</a>
        <a href="{{ route('producto.index') }}" class="hover:bg-indigo-500 px-3 py-2 rounded-md text-sm font-medium">Gestionar Producto</a>
        <a href="{{ route('venta.index') }}" class="hover:bg-indigo-500 px-3 py-2 rounded-md text-sm font-medium">Gestionar Venta</a>
      </div>

      <!-- Botón menú móvil -->
      <div class="md:hidden">
        <button id="menuBtn" class="focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Menú móvil -->
  <div id="menuMobile" class="hidden md:hidden px-4 pb-4 space-y-2 bg-indigo-700">
    <a href="#persona" class="block px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600">Gestionar Persona</a>
    <a href="#producto" class="block px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600">Gestionar Producto</a>
    <a href="#venta" class="block px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600">Gestionar Venta</a>
  </div>
</nav>

<script>
  const menuBtn = document.getElementById("menuBtn");
  const menuMobile = document.getElementById("menuMobile");

  menuBtn.addEventListener("click", () => {
    menuMobile.classList.toggle("hidden");
  });
</script>

</body>
</html>
