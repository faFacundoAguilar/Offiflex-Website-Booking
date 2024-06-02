<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="facu" content="" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    
    <div id="page">

  <!-- Navigation HEADER -->
<nav class="py-4 nav-container">
    <div class="container mx-auto">
    <div class="w-full max-w-7xl flex justify-center ml-12"> <!-- Modificado: Agregado ml-4 -->
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
            <a href="inicio.php">
            <img src="images/patente.png" alt="Logo" class="w-12 h-auto object-contain mr-4">
            </a>
        </div>
    </div>
</nav>
    
   <!-- Contacto Seccion 1 -->
<div class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 bg-white p-8 rounded shadow-md border border-blue-300">
                <h2 class="text-2xl font-bold mb-6 text-center">Contáctanos</h2>
                <form action="datos2.php" method="POST">
                    <div class="mb-4">
                        <label for="Nombre" class="sr-only">Nombre</label>
                        <input type="text" name="nombre" id="Nombre" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="Correo" class="sr-only">Email</label>
                        <input type="text" name="email" id="Correo" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="correo electronico" required>
                    </div>
                    <div class="mb-4">
                        <label for="Mensaje" class="sr-only">Mensaje</label>
                        <textarea name="mensaje" id="Mensaje" cols="30" rows="10" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Su Mensaje" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded hover:bg-green-600 focus:outline-none focus:ring">Enviar</button>
                    </div>
</div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Contacto Seccion 2 -->
       

  
</body>
</html>
