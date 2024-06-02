<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="facu" />
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<!--Aplique estilos TailwindCSS, que mediante clases predefinidas permiten aplicar los estilos al mismo html llevando una guia de estilos mas solida
 y evitar múltiples archivos CSS.-->
<body>
  <!-- HEADER -->

  <nav class="py-4 shadow-md nav-container"> 
    <div class="container mx-auto">
      <div class="w-full max-w-7xl flex justify-center ml-20"> 
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="flex flex-row items-center justify-between lg:justify-start">
            <a class="text-lg font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8" href="/groups/header/"> OffiFlex </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden md:flex md:justify-start md:flex-row">
            <ul class="space-y-2 list-none lg:space-y-0 lg:items-center lg:inline-flex">
              <li>
                <a href="inicio.php" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-500 hover:text-blue-500">Inicio</a>
              </li>
              <li>
                <a href="reserva.php" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent leading-[22px] md:px-3 text-gray-500 hover:text-blue-500 hover:border-blue-600">Reserva</a>
              </li>
              <li>
                <a href="precios.php" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-500 hover:text-blue-500">Precios</a>
              </li>
              <li>
                <a href="contacto.php" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent leading-[22px] md:px-3 text-gray-500 hover:text-blue-500 hover:border-blue-600">Contacto</a>
              </li>
              <li>
                <a href="desconectar.php" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent leading-[22px] md:px-3 text-gray-500 hover:text-blue-500 hover:border-blue-600">Salir</a>
              </li>
            </ul>
          </nav>
        </div>
        <img src="images/patente.png" alt="Logo" class="w-12 h-auto object-contain mr-4">
      </div>
    </div>
  </nav>

  <!-- Contenido Principal -->
  <div class="main-content">
    <div class="bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
          <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0 lg:justify-center">
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="images/SET3.jpeg" alt="Reservas" class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500 text-center">
                <a class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-green-500 active:text-indigo-500" href="reserva.php">
                  Reservas
                </a>
              </h3>
            </div>
            <div class="group relative"> 
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Precios" class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500 text-center">
                <a class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500" href="precios.php">
                  Precios
                </a>
              </h3>
            </div>
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Contacto" class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500 text-center">
                <a class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-indigo-600 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500" href="contacto.php">
                  Contacto
                </a>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Galeria de imagenes principal -->
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header class="text-center">

      <h2 class="tracking-widest text-2xl text-gray-500 md:text-3xl dark:text-gray-400">Espacios OfiiFlex</h2>
      <br>
      <p class="tracking-tighter text-gray-500 md:text-lg dark:text-gray-400">Disfruta de espacios luminosos, decoración elegante y zonas de descanso confortables.Desde espacios compartidos hasta oficinas privadas.</p>

      </header>

      <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
        <li>
          <a href="#" class="group relative block">
            <img src="images/SET4.jpeg" alt="" class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />
          </a>
        </li>

        <li>
          <a href="#" class="group relative block">
            <img src="images/SET.jpeg" alt="" class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

          </a>
        </li>

        <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
          <a href="reserva.php" class="group relative block">
            <img src="images/SET2.jpeg" alt="" class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

            <div class="absolute inset-0 flex flex-col items-end justify-end p-6">
              <h3 class="text-xl font-medium text-white mb-4">Un panorama de logros colectivos</h3>
              <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-full shadow-md transition duration-300 ease-in-out">
                Reservar Plaza
              </button>
            </div>

          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- Banner -->
  <div class="container mx-auto px-4">
    <div class="relative bg-blue-500 text-white py-12 px-6 text-center rounded-lg overflow-hidden">
      <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('images/panoramica.jpg');"></div>
      <div class="relative z-10">
        <h2 class="text-4xl font-bold mb-4">Andalucia Coworking</h2>
        <p class="text-lg font-medium text-white-900 dark:text-white">Descubre nuestras membresias. ¡No te lo pierdas!</p>
        <br>
        <a href="precios.php" class="bg-white text-blue-500 py-2 px-6 rounded-full inline-block uppercase font-semibold tracking-wider hover:bg-blue-400 hover:text-white transition duration-300">Ver membresías</a>
      </div>
    </div>
  </div>

  <!-- Sponsors -->
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-center text-lg font-semibold leading-8 text-gray-900 ">OffiFlex Con la confianza de los equipos más innovadores del mundo</h2>
      <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
      </div>
    </div>
  </div>


  <!--Banner con Modelo de escritorio... -->
  <section class="px-0 py-12 mx-auto max-w-7xl sm:px-4">
    <div class="grid items-center grid-cols-1 gap-10 px-4 py-6 overflow-hidden text-pink-900 bg-pink-100 border-pink-100 rounded-none card card-body sm:rounded-lg md:px-20 md:grid-cols-5 lg:gap-0">
      <div class="col-span-1 md:col-span-3">
        <h2 class="mb-3 font-serif text-2xl font-normal leading-tight lg:text-3xl">Trabaje con tranquilidad sabiendo que su espacio de coworking está optimizado al máximo.</h2>
        <p class="mb-6 text-sm font-semibold lg:text-base">Le entregamos una cantidad garantizada de nuevos contactos de alta calidad cada mes. Combinado con las herramientas de ventas para convertirlos en clientes de pago.</p>
        <a href="contacto.php" class="w-full text-pink-900 shadow-lg bg-pink-200 hover:bg-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-opacity-50 rounded-lg px-4 py-2 text-center font-bold text-lg transition duration-300 ease-in-out sm:w-auto">Empezar</a>

      </div>
      <div class="col-span-1 md:col-span-2 flex justify-center md:justify-end">
        <img src="images/LA-removebg-preview.png" class="w-full max-w-[300px] lg:max-w-[450px] select-none" alt="Mac App" />
      </div>
    </div>
  </section>

<!--Feactures-->
  <section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div>
      <p class="max-w-lg text-3xl font-semibold leading-normal text-gray-900 dark:text-white">Elije tu espacio de trabajo con tan solo un click</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 mb-4 text-purple-700" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
        </svg>
        <p class="text-left rtl:text-right text-gray-500 dark:text-gray-400 text-lg md:text-xl"> Nuestros planes de coworking incluyen una gama de servicios premium sin costo adicional. Desde café y té ilimitados hasta soporte técnico y administrativo, todo está pensado para que te sientas apoyado y concentrado en tus proyectos.
        </p>
      </div>
      <div>
        <!--imagen -->
        <img src="images/SET4.jpeg" alt="Imagen 1" class="w-full h-full object-cover">
      </div>
    </div>
    <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
      <div class="order-none md:order-2">
      <p class="max-w-lg text-3xl font-semibold leading-normal text-gray-900 dark:text-white">Diseñadas con un enfoque moderno y acogedor.</h2>
        <!--svg--> <!--Graficos Vecotriales mendiante vectores-->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12 mb-4 text-purple-700" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
       
        <p class="text-left rtl:text-right text-gray-500 dark:text-gray-400 text-lg md:text-xl">Multiples salas de Reuniones✔️</p>
        <p class="text-left rtl:text-right text-gray-500 dark:text-gray-400 text-lg md:text-xl">Networking, talleres y colaboraciones🤝</p>
        <p class="text-left rtl:text-right text-gray-500 dark:text-gray-400 text-lg md:text-xl">Flexibilidad y comodidad🔁</p>
        <p class="text-left rtl:text-right text-gray-500 dark:text-gray-400 text-lg md:text-xl">Ubicación céntrica y accesible📍</p>
      </div>
      <div>
        <!--Imagen.-->
        <img src="images/SET5.jpeg" alt="Imagen 2" class="w-full h-full object-cover">
      </div>
    </div>
  </section>


  <!-- Tarjetas animadas. -->
  <section class="">
    <div class="flex justify-center flex-wrap mx-auto md:flex-nowrap p-12">
      <a href="reserva.php">
        <div class="flex w-full">
          <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
            <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="images/pikaso_2.jpeg" alt="blog">
            <div class="px-6 py-8">
              <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                <span class="">Terrazas</span>
              </h4>
              <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Disfruta de vistas panorámicas y, </p>
              <p class="mt-1 text-base font-normal text-gray-500 leading-relax">un ambiente tranquilo mientras trabajas.</p>
              <br>
              <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Mas informacion
                </span>
              </button>
            </div>
          </div>
        </div>
      </a>

      <a href="reserva.php">
        <div class="flex w-full">
          <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
            <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="images/cowork04.jpg" alt="blog">
            <div class="px-6 py-8">
              <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                <span class="">Areas comunes</span>
              </h4>
              <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Disfruta espacios comodos y, </p>
              <p class="mt-1 text-base font-normal text-gray-500 leading-relax">un ambiente tranquilo mientras trabajas.</p>
              <br>
              <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Mas informacion
                </span>
              </button>
            </div>
          </div>
        </div>
      </a>

      <a href="reserva.php">
        <div class="flex w-full">
          <div class="relative flex flex-col items-start m-1 transition duration-300 ease-in-out delay-150 transform bg-white shadow-2xl rounded-xl md:w-80 md:-ml-16 md:hover:-translate-x-16 md:hover:-translate-y-8">
            <img class="object-cover object-center w-full rounded-t-xl lg:h-48 md:h-36" src="images/salonplays.jpeg" alt="blog">
            <div class="px-6 py-8">
              <h4 class="mt-4 text-2xl font-semibold text-neutral-600">
                <span class="">Salon de Juegos</span>
              </h4>
              <p class="mt-4 text-base font-normal text-gray-500 leading-relax">Nuestras oficinas cuentan con espacios de recreacion: Disfruta de juegos de mesa, consolas, y un ambiente vibrante.</p>
              <br>
              <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Mas informacion
                </span>
              </button>
            </div>
          </div>
        </div>
      </a>

    </div>
  </section>

  <!--Steps-->
  <div class="flex justify-center items-center">
    <!-- Step 1-->
    <div class="flex items-center">
      <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white">
        <i class="fas fa-search"></i>
      </div>
      <div class="ml-2 text-sm text-gray-700">Explorar</div>
    </div>

    <div class="w-16 h-1 bg-gray-300 mx-2"></div> <!-- Línea entre steps -->

    <!-- Step 2-->
    <div class="flex items-center">
      <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white">
        <i class="fas fa-calendar-check"></i>
      </div>
      <div class="ml-2 text-sm text-gray-700">Reservar</div>
    </div>

    <div class="w-16 h-1 bg-gray-300 mx-2"></div> <!-- Línea entre steps -->

    <!-- Step 3-->
    <div class="flex items-center">
      <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white">
        <i class="fas fa-smile"></i>
      </div>
      <div class="ml-2 text-sm text-gray-700">Disfrutar</div>
    </div>
  </div>


  


  <!--Petfriendly-->

  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-8  ">Zona Pet-Friendly: ¡Trae a tu Mejor Amigo!</h2>
      <p class="text-center text-gray-500 dark:text-gray-400">🐾 Porque sabemos que tu mascota es parte de tu equipo, nuestras instalaciones son pet-friendly. Tu mejor amigo de cuatro patas siempre es bienvenido aquí. ¡Trabajar con tu mascota al lado nunca fue tan genial! Explora nuestras opciones y encuentra el mejor lugar para tus mascotas mientras disfrutas de nuestros servicios. </p>
      <br>
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="images/terrazadogs.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="images/doggies.jpeg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="images/doggiesdefo.jpeg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="images/guarderia.jpeg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
        </a>
      </div>
      
    </div>
  </div>

  <!-- Seccion 5 -->
  <!-- Footer -->

  <footer class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="lg:flex lg:items-start lg:gap-8">
        <div class="text-teal-600">
          <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z" fill="currentColor" />
          </svg>
        </div>

        <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
          <div class="col-span-2">
            <div>
              <h2 class="text-2xl font-bold text-gray-900">OffiFlex news!</h2>

              <p class="mt-4 text-gray-500">
                Subscribete a nuestro newsletter para ser el primero en enterarte de novedades!
              </p>
            </div>
          </div>

          <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
            <form class="w-full">
              <label for="UserEmail" class="sr-only">Email</label>
              <div class="border border-gray-300 p-2 focus-within:ring-2 focus-within:ring-teal-500 sm:flex sm:items-center sm:gap-4 rounded-md">
                <input type="email" id="UserEmail" placeholder="john@rhcp.com" class="w-full border-none focus:outline-none focus:ring-0 sm:text-sm p-2 rounded-md" />
                <button class="mt-2 w-full bg-teal-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0 rounded-md">
                  Sign Up
                </button>
              </div>
            </form>
          </div>


          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900">Services</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> 1on1 Coaching </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Company Review </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
              </li>
            </ul>
          </div>

          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900">Company</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
              </li>
            </ul>
          </div>

          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900">Helpful Links</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
              </li>
            </ul>
          </div>

          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900">Legal</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Accessibility </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Returns Policy </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Hiring Statistics </a>
              </li>
            </ul>
          </div>

          <div class="col-span-2 sm:col-span-1">
            <p class="font-medium text-gray-900">Downloads</p>

            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> Marketing Calendar </a>
              </li>

              <li>
                <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Infographics </a>
              </li>
            </ul>
          </div>

          <ul class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end">
            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Facebook</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Instagram</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Twitter</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">GitHub</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Dribbble</span>

                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mt-8 border-t border-gray-100 pt-8">
        <div class="sm:flex sm:justify-between">
          <p class="text-xs text-gray-500">&copy; 2024. Facundo Aguilar. All rights reserved.</p>

          <ul class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Terms & Conditions </a>
            </li>

            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy </a>
            </li>

            <li>
              <a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>