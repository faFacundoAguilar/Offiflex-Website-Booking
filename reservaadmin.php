<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900 ">
    <div id="page">
	<!-- Navigation HEADER -->
<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center h-16">
            <div class="flex space-x-8">
                <a href="admin.php" class="border-b-2 border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700">Inicio</a>
                <a href="reservaadmin.php" class="border-b-2 border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700">Reserva</a>
                <a href="usuarioadmin.php" class="border-b-2 border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700">Usuarios</a>
                <a href="contactoadmin.php" class="border-b-2 border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700">Contactos</a>
                <a href="desconectar.php" class="border-b-2 border-transparent text-gray-900 hover:border-gray-300 hover:text-gray-700"><span class="text-red-600">Salir</span></a>
            </div>
        </div>
    </div>
</nav>

     <!--ForMULARIO RESERVAS-->

        <main class="py-8">
            <div class="container mx-auto px-4">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-6 text-center">Reservas Registradas</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Nombre</th>
                                    <th class="py-2 px-4 border-b">Ocupación</th>
                                    <th class="py-2 px-4 border-b">Oficinas</th>
                                    <th class="py-2 px-4 border-b">Precio</th>
                                    <th class="py-2 px-4 border-b">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require("conexion2.php");
                                    $sql = "SELECT * FROM reservas";
                                    $query = mysqli_query($mysqli, $sql);
                                    while ($arreglo = mysqli_fetch_array($query)) {
                                        echo "<tr>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[0]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[1]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[2]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[3]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[4]}</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6 text-center">
                        <a href="admin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                </div>
            </div>
        </main>
<!--Footer-->

</body>
</html>
