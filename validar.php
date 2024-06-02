<?php
session_start();
require("conexion.php");


$username = isset($_POST['mail']) ? $_POST['mail'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

// Preparamos la consulta SQL utilizando consultas parametrizadas para evitar inyección SQL maliciosa.

$stmt = $mysqli->prepare("SELECT id, user, rol, password, pasadmin FROM login WHERE email = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verificar si el usuario es admin.
    if (!empty($row['pasadmin']) && password_verify($pass, $row['pasadmin'])) {
        // variables de sesión .
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['rol'] = $row['rol'];
        
        
        echo '<script>alert("ADMINISTRADOR")</script>';
        echo "<script>location.href='admin.php'</script>";
        exit();
    }
    
   

    if (password_verify($pass, $row['password'])) {
        // variables de sesión para el usuario regular
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['rol'] = $row['rol'];
        
        // Redirigir al usuario a la página de inicio
        header("Location: inicio.php");
        exit();
    } else {
        // Contra incorrecta.
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
        echo "<script>location.href='index.html'</script>";
        exit();
    }
} else {
    // Usuario no registrado
    echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGÍSTRESE PARA PODER INGRESAR")</script>';
    echo "<script>location.href='registro.php'</script>";
    exit();
}

$stmt->close();
$mysqli->close();
?>
