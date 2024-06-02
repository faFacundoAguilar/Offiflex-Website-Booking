<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!--  librería SweetAlert2 Alert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-cover" style="background-image: url('images/gr1.jpg');">
    <div class="container mx-auto p-4">
        <h4 class="text-center text-2xl font-bold mb-8"><span class="font-algerian">REGISTRO</span></h4>
        <form action="validaregistro.php" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-4">
                <label for="realname" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" id="realname" name="realname" required maxlength="70" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="nick" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="nick" name="nick" required maxlength="70" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="pass" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                <input type="password" id="pass" name="pass" required maxlength="70" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Registrarse</button>
                <a href="index.html" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Ingresar</a>
            </div>
        </form>
    </div>
</body>
</html>
