<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="flex items-center gap-4 justify-end">
        <img class="w-10 h-10 rounded-full" src="images/offi1.jpeg" alt="">
        <div class="font-medium dark:text-white">
            <div>OffiFlex</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Administrador.</div>
        </div>
    </div>
    <main class="py-8">
        <div class="container mx-auto px-4">
            <div class="bg-white shadow-md rounded-lg p-6 border border-blue-950"> <!-- Aquí se añade el borde azul oscuro -->
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold">Usuarios Registrados</h2>
                </div>
                <div class="overflow-x-auto">
                    <?php
                    require("conexion.php");
                    $sql = "SELECT * FROM login";
                    $query = mysqli_query($mysqli, $sql);
                    echo "<table class='min-w-full bg-white border border-gray-200 rounded-lg'>";
                    echo "<thead class='bg-gray-50'>";
                    echo "<tr>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>Id</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>User</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>Password</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>Email</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>PassAdmin</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>Rol</th>";
                    echo "<th class='py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700'>Acciones</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody class='bg-white'>";
                    while ($arreglo = mysqli_fetch_array($query)) {
                        echo "<tr class='hover:bg-gray-100'>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[0]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[1]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[2]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[3]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[4]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>{$arreglo[5]}</td>";
                        echo "<td class='py-3 px-4 border-b border-gray-200 text-gray-800'>
                            <div class='inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1'>
                                <button class='inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-4 w-4'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10' />
                                    </svg>
                                    Edit
                                </button>
                                <button class='inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-4 w-4'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z' />
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z' />
                                    </svg>
                                    View
                                </button>
                                <button class='inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='h-4 w-4'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0' />
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    ?>
                </div>
                <div class="mt-6 text-center">
                    <a href="admin.php" class="inline-block rounded border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">Volver</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>