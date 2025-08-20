<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    
    <h1 class= "bg-blue-200"> hola</h1>
    <h1 class= "bg-amber-300"> hola</h1>

    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-950 text-slate-800 dark:text-slate-100">
  <main class="container mx-auto p-6 md:p-10">
    <section class="mx-auto max-w-2xl">
      <header class="mb-8 text-center">
        <h1 class="text-3xl font-bold tracking-tight">Registro de Persona</h1>
        <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">Completa tus datos para continuar.</p>
      </header>

      <!-- Card -->
      <div class="rounded-2xl bg-white/70 dark:bg-slate-900/60 shadow-xl ring-1 ring-black/5 backdrop-blur p-6 md:p-8">
        <!-- Mensaje de éxito -->
        <div id="msgOk" class="hidden mb-6 rounded-xl border border-green-200 dark:border-green-900 bg-green-50 dark:bg-green-950/50 px-4 py-3 text-sm">
          ✅ ¡Registro enviado con éxito! (demo)
        </div>

        <form id="formRegistro" novalidate class="grid grid-cols-1 gap-5">
          <!-- Nombre y Apellido -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label for="nombre" class="block text-sm font-medium">Nombre Completo</label>
              <input id="nombre" name="nombre" type="text" required autocomplete="given-name"
                     class="mt-1 block w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950/70 px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ej: Cielo" />
              <p class="mt-1 hidden text-xs text-rose-600" data-error-for="nombre">Ingresa tu nombre.</p>
            </div>
            <div>
              <label for="apellido" class="block text-sm font-medium">Apellido Paterno y Materno </label>
              <input id="apellido" name="apellido" type="text" required autocomplete="family-name"
                     class="mt-1 block w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950/70 px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ej: Millares" />
              <p class="mt-1 hidden text-xs text-rose-600" data-error-for="apellido">Ingresa tu apellido.</p>
            </div>
          </div>

          <!-- Celular y Correo -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label for="celular" class="block text-sm font-medium">Celular</label>
              <input id="celular" name="celular" type="tel" inputmode="numeric" pattern="^[0-9]{7,15}$" required autocomplete="tel"
                     class="mt-1 block w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950/70 px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ej: 70000000" />
              <p class="mt-1 hidden text-xs text-rose-600" data-error-for="celular">Ingresa un número válido (7–15 dígitos).</p>
            </div>
            <div>
              <label for="correo" class="block text-sm font-medium">Correo</label>
              <input id="correo" name="correo" type="email" required autocomplete="email"
                     class="mt-1 block w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950/70 px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="tucorreo@ejemplo.com" />
              <p class="mt-1 hidden text-xs text-rose-600" data-error-for="correo">Ingresa un correo válido.</p>
            </div>
          </div>

          <!-- Dirección -->
          <div>
            <label for="direccion" class="block text-sm font-medium">Dirección</label>
            <input id="direccion" name="direccion" type="text" required autocomplete="street-address"
                   class="mt-1 block w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950/70 px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Calle / Av., número y zona" />
            <p class="mt-1 hidden text-xs text-rose-600" data-error-for="direccion">Ingresa tu dirección.</p>
          </div>

          <!-- Acciones -->
          <div class="flex items-center justify-between gap-3 pt-2">
            <button type="reset" class="rounded-xl border border-slate-300 dark:border-slate-700 px-4 py-2 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-900/60">Limpiar</button>
            <button type="submit" class="rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">enviar</button>
          </div>
        </form>
      </div>

     
    </section>
  </main>

  <script>
    // Utilidad: mostrar/ocultar error bajo un input
    function setFieldError(input, message) {
      const err = document.querySelector(`[data-error-for="${input.id}"]`);
      if (!err) return;
      if (message) {
        err.textContent = message;
        err.classList.remove('hidden');
        input.setAttribute('aria-invalid', 'true');
      } else {
        err.classList.add('hidden');
        input.removeAttribute('aria-invalid');
      }
    }

    const form = document.getElementById('formRegistro');
    const msgOk = document.getElementById('msgOk');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      let ok = true;
      const { nombre, apellido, celular, correo, direccion } = form;

      // Validaciones básicas
      if (!nombre.value.trim()) { setFieldError(nombre, 'Ingresa tu nombre.'); ok = false; } else { setFieldError(nombre, ''); }
      if (!apellido.value.trim()) { setFieldError(apellido, 'Ingresa tu apellido.'); ok = false; } else { setFieldError(apellido, ''); }

      const celVal = celular.value.trim();
      if (!/^\d{7,15}$/.test(celVal)) { setFieldError(celular, 'Ingresa un número válido (7–15 dígitos).'); ok = false; } else { setFieldError(celular, ''); }

      if (!correo.validity.valid) { setFieldError(correo, 'Ingresa un correo válido.'); ok = false; } else { setFieldError(correo, ''); }
      if (!direccion.value.trim()) { setFieldError(direccion, 'Ingresa tu dirección.'); ok = false; } else { setFieldError(direccion, ''); }

      if (!ok) return;

      // Simula envío y muestra mensaje de éxito
      msgOk.classList.remove('hidden');
      form.reset();

      // Oculta el mensaje luego de 4s
      setTimeout(() => msgOk.classList.add('hidden'), 4000);
    });
  </script>
</div>


    <div class= " h-50 flex justify-center">
        <div class= " w-100 h-50 text-center" >
            <h1 class= "bg-amber-100">FORMULARIO DE REGISTRO</h1>

            <div>
                <label for="">Inserte su nombre</label>
                <input class="border bg-amber-400" type="text">
            </div>
            
            <div>
                <label for="">Inserte su apellido</label>
                <input class="border bg-amber-400" type="text">
            </div>
            
            <div>
                <label for="">Inserte su carnet</label>
                <input class="border bg-amber-300" type="number">
            </div>
            
            <div>
                <label for="">Inserte su celular</label>
                <input class="border bg-amber-300" type="number">
            </div>
            
            <div>
                <label for="">inserte tu correo</label>
                <input class="border bg-amber-400" type="email">
            </div>
            
            <div>
                <label for="">fecha de nacimiento</label>
                <input class="border bg-amber-500" type="date">
            </div>
            
            <div>
                <button>Enviar</button>
            </div>
        </div>  
    </div>
    

    <div>
        <h1>GALERIA DE IMAGEN</h1>
        <img src="data:image/jpeg;base64,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" alt="">
    </div>

    
    
</body>
</html>