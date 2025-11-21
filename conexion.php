<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$BaseDeDatos = "gestion";

$enlace = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>