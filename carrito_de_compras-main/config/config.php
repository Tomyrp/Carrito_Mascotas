<?php
/*$usuario = "root"; // Reemplaza con el nombre de usuario correcto
$password = ""; // Reemplaza con la contraseña correcta
$servidor = "localhost";
$basededatos = "bd_tienda_online";*/

$servidor = getenv("DB_HOST");
$usuario = getenv("DB_USER");
$password = getenv("DB_PASS");
$basededatos = getenv("DB_NAME");
$puerto = getenv("DB_PORT")?:3306;

// Crear la conexión
$con = mysqli_connect($servidor, $usuario, $password, $basededatos,$puerto);

// Verificar la conexión
if (!$con) {
    die("Error al conectar a la Base de Datos: " . mysqli_connect_error());
}

//echo "Conexión exitosa a la Base de Datos";
