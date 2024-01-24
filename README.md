# WikiSearchApp

## Descripción
Aplicación web que permite al usuario ingresar un término de búsqueda y mostrar una lista de resultados obtenidos a través de una API externa. Además, guarda el historial de búsquedas realizadas por el usuario en una base de datos SQL.

## Características
- Búsqueda de términos en la API de Wikipedia.
- Visualización de resultados de búsqueda en tiempo real.
- Almacenamiento de historial de búsquedas en una base de datos SQL.
- Interfaz sencilla y fácil de usar.

## Tecnologías Utilizadas
- Frontend: HTML5, CSS3, JavaScript
- Backend: PHP 8.3.2
- Base de datos: MySQL 8.0
- API externa: API de Wikipedia

## Instalación
Para instalar y ejecutar WikiSearchApp en tu entorno local, sigue estos pasos:

1. Clona el repositorio:

git clone https://github.com/briancalvo/WikiSearchApp.git

2. Navega al directorio del proyecto:

3. Configura tu servidor local para apuntar al directorio del proyecto.
4. Asegúrate de que tu servidor MySQL esté en funcionamiento.
5. Crea una base de datos MySQL y ejecuta el script `schema.sql` para crear las tablas necesarias.
6. Configura el archivo `conn.php` con tus credenciales de MySQL.

## Uso
Para usar la aplicación, sigue estos pasos:

1. Abre tu navegador y navega a la URL del proyecto (dependiendo de la configuración de tu servidor local).
2. Ingresa un término de búsqueda en el campo de entrada.
3. Haz clic en "Buscar" para ver los resultados de la API de Wikipedia.
4. Revisa el historial de tus búsquedas en la base de datos.

## Créditos
Desarrollado por Brian Calvo Aragón
