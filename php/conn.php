<?php
// Archivo PHP para la conexión a la base de datos.

$servername = "localhost"; // En este caso, la aplicación se ha realizado en local.
$username = "appUser"; // Nombre ficticio de usuario de MySQL.
$password = "S3cureP@ssw0rd!2024"; // Contraseña ficticia del usuario de MySQL.
$dbname = "test"; // Nombre de la base de datos ficticia de MySQL.

try {
    // Crear conexión con PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mensaje de éxito en la conexión (opcional)
    // echo "Conexión exitosa"; 
} catch(PDOException $e) {
    // Manejo del error de conexión
    echo "Error en la conexión: " . $e->getMessage();
}

?>