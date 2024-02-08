<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.tailwindcss.com" rel="stylesheet">
  </head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALUD 360</title>
  <!-- Agregar el enlace al archivo de estilos de Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
  <!-- Navegación Superior -->
  <!-- <nav class="bg-blue-500 p-4 flex items-center justify-between">
    <div>
      <h1 class="text-white text-xl font-semibold">SALUD 360</h1>
    </div>
    <div class="flex items-center space-x-4">
      <span class="text-white">Bienvenido</span>
      <i class="fas fa-user-circle text-white text-2xl"></i>
    </div>
  </nav> -->

  <!-- Navegación lateral -->
  <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
      <ul class="space-y-2">
      <li class="opcion-con-desplegable">
            <!-- Logo  -->
            <div id="logo" class="flex items-center">
                <img  src="image/cplogo2.png"/><br>
            </div>
      </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fas fa-calendar-alt mr-2"></i>
              <span>Dashboard</span>
            </div>
            <!-- <i class="fas fa-chevron-down text-xs"></i> -->
          </div>
          <!-- Choi -->
          <!-- <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Gestion de citas
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Polizas
              </a>
            </li>
          </ul> -->
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fas fa-money-bill-wave mr-2"></i>
              <span>Manage Account</span>
            </div>
            <!-- <i class="fas fa-chevron-down text-xs"></i> -->
          </div>
          <!-- <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Tratamientos
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Gastos
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Facturas
              </a>
            </li>
          </ul> -->
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fas fa-chart-bar mr-2"></i>
              <span>Manage Course</span>
            </div>
            <!-- <i class="fas fa-chevron-down text-xs"></i> -->
          </div>
          <!-- <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Presupuestos
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Informe médico
              </a>
            </li>
          </ul> -->
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fas fa-chart-bar mr-2"></i>
              <span>Manage Activity</span>
            </div>
            <!-- <i class="fas fa-chevron-down text-xs"></i> -->
          </div>
          <!-- <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Presupuestos
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Informe médico
              </a>
            </li>
          </ul> -->
        </li>
        <li class="opcion-con-desplegable">
          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
            <div class="flex items-center">
              <i class="fas fa-file-alt mr-2"></i>
              <span>Manage Skill</span>
            </div>
            <i class="fas fa-chevron-down text-xs"></i>
          </div>
          <ul class="desplegable ml-4 hidden">
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Soft skill
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Technical Skill
              </a>
            </li>
            <li>
              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                Hard Skill
              </a>
            </li>
          </ul>
        </li>
        <!-- Agrega más enlaces para la navegación lateral -->
      </ul>
    </nav>
  </aside>
  
  <!-- Contenido principal -->
  <main class="container mx-auto p-4">
   
    <!-- Aquí puedes agregar el contenido principal de tu página CRM -->
    <!-- 
        
     -->
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Obtener todas las opciones principales con desplegables
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      // Agregar evento de clic a cada opción principal
      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          // Obtener el desplegable asociado a la opción
          const desplegable = opcion.querySelector(".desplegable");

          // Alternar la clase "hidden" para mostrar u ocultar el desplegable
          desplegable.classList.toggle("hidden");
        });
      });
    });
  </script>
</body>
</html>
<!-- Con estos cambios, hemos agregado iconos del lado izquierdo del texto en la navegación lateral y del lado derecho en las opciones desplegables. Además, se muestra un icono de flecha hacia abajo indicando que hay opciones ocultas que se desplegarán al hacer clic en el icono. ¡Espero que esto sea lo que buscas! Si tienes más preguntas o necesitas más asistencia, no dudes en preguntar. ¡Buena suerte con tu página CRM! -->
</body>
</html>
