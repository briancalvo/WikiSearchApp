<?php
// Archivo PHP para guardar las busqueda realizadas.

// Incluimos el archivo de conexión a la base de datos.
// Este archivo contiene la lógica de conexión a MySQL utilizando PDO.
include 'conn.php'; 

// Verificamos si el método de la solicitud es POST.
// Esto es importante para asegurarse de que solo procesamos los datos enviados a través de un formulario POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos el término de búsqueda del cuerpo de la solicitud.
    // Utilizamos el operador de fusión de null (??) para asignar un valor predeterminado en caso de que no se proporcione 'searchTerm'.
    $searchTerm = $_POST['searchTerm'] ?? '';

    try {
        // Preparamos una declaración SQL para insertar el término de búsqueda en la base de datos.
        // Utilizamos declaraciones preparadas para mejorar la seguridad, previniendo inyecciones SQL.
        $stmt = $conn->prepare("INSERT INTO search_history (searchTerm) VALUES (:searchTerm)");

        // Vinculamos el término de búsqueda al parámetro de la declaración preparada.
        // Esto es parte de lo que hace que las declaraciones preparadas sean seguras contra la inyección SQL.
        $stmt->bindParam(':searchTerm', $searchTerm);

        // Ejecutamos la declaración preparada.
        // En este punto, el término de búsqueda se inserta en la base de datos.
        $stmt->execute();

        // Enviamos una respuesta de éxito.
        // Esto se envía de vuelta al cliente que realizó la solicitud POST.
        echo "Búsqueda guardada con éxito";
    } catch(PDOException $e) {
        // Manejamos y reportamos cualquier error que ocurra durante la inserción de datos.
        // El manejo de excepciones en PDO permite una respuesta más controlada a los errores.
        echo "Error al guardar la búsqueda: " . $e->getMessage();
    }
}
?>