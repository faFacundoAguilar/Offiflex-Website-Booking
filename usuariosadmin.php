<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
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
    <!--Formualrio usuarios-->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold">Usuarios registrados</h2>
            </div>
            <div class="overflow-x-auto">
                <?php
                    require("conexion.php");
                    $sql = ("SELECT * FROM login");
                    $query = mysqli_query($mysqli, $sql);
                    echo "<table class='min-w-full divide-y divide-gray-200'>";
                    echo "<thead class='bg-gray-50'>";
                    echo "<tr>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Id</th>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>User</th>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Password</th>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Email</th>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>PassAdmin</th>";
                    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Rol</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody class='bg-white divide-y divide-gray-200'>";
                    while ($arreglo = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[0]</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[1]</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[2]</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[3]</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[4]</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>$arreglo[5]</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                ?>
            </div>
            <div class="mt-4 text-center">
                <a href="admin.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Volver</a>
            </div>
        </div>
    </div>

</body>
</html>
