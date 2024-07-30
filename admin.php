<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Botón de volver -->
    <a href="inicio.php" id="volver-btn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg absolute top-4 right-4">
        Volver al inicio.
    </a>
    <header class="bg-cover bg-center h-screen" style="background-image: url('images/adminfondo.png')">
        <div class="bg-black bg-opacity-50 h-full flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold">Administrador OffiFlex</h1>
            <p class="text-white text-2xl md:text-4xl mt-4">Plataforma Para Reservar Tus espacios de trabajo</p>
            <div class="mt-8 flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <a href="reservaadmin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-calendar-check fa-3x mb-2"></i>
                        <span class="text-lg">RESERVAS</span>
                    </div>
                </a>
                <a href="usuariosadmin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-users fa-3x mb-2"></i>
                        <span class="text-lg">USUARIOS</span>
                    </div>
                </a>
                <a href="contactoadmin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-envelope fa-3x mb-2"></i>
                        <span class="text-lg">CONTACTO</span>
                    </div>
                </a>
            </div>
        </div>
    </header>
</body>

</html>