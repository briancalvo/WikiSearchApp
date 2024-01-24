-- Autor: Brian Calvo Aragón
-- Fecha de Creación: 24/01/2024
-- Descripción: Define la estructura de la base de datos para la aplicación de búsqueda.

-- Uso: Este archivo debe ejecutarse en una base de datos MySQL para crear la estructura necesaria para la aplicación.
--      Se puede ejecutar utilizando un cliente MySQL o una herramienta de administración de bases de datos como phpMyAdmin.

-- ----------------------------------------------------------------------------------------

-- Creación de la tabla 'search_history'
-- Esta tabla almacena el historial de búsquedas de los usuarios, incluyendo el término de búsqueda y la fecha y hora en que se realizó la búsqueda.

CREATE TABLE IF NOT EXISTS search_history (
    id INT AUTO_INCREMENT PRIMARY KEY,              -- Identificador único para cada búsqueda
    searchTerm VARCHAR(255) NOT NULL,               -- El término de búsqueda ingresado por el usuario
    searchDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Fecha y hora en que se realizó la búsqueda
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------------------------------------------------------------------

-- Notas adicionales:
-- 1. La columna 'id' sirve como clave primaria y se autoincrementará con cada nueva entrada.
-- 2. 'searchTerm' es una cadena que representa el término que el usuario buscó.
-- 3. 'searchDate' es una marca de tiempo que se genera automáticamente al insertar un nuevo registro.
-- 4. 'ENGINE=InnoDB' esto especifica el motor de almacenamiento para la tabla. InnoDB es un motor de almacenamiento para MySQL que ofrece características como el bloqueo a nivel de fila.
-- 5. 'CHARSET=utf8mb4' esto establece el juego de caracteres predeterminado para la tabla. utf8mb4 es una codificación que permite el uso de caracteres Unicode, proporcionando una mayor compatibilidad.