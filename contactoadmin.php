<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
   
        <main class="py-8">
            <div class="container mx-auto px-4">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-6 text-center">Contactos Registrados</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Nombre</th>
                                    <th class="py-2 px-4 border-b">Correo</th>
                                    <th class="py-2 px-4 border-b">Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require("conexion3.php");
                                    $sql = "SELECT * FROM sugerencia";
                                    $query = mysqli_query($mysqli, $sql);
                                    while ($arreglo = mysqli_fetch_array($query)) {
                                        echo "<tr>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[0]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[1]}</td>";
                                        echo "<td class='py-2 px-4 border-b text-center'>{$arreglo[2]}</td>";
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

    
    </div>

</body>
</html>
