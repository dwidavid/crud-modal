<?php 

$conn = new mysqli("localhost","root","","cinema");

if ($conn -> connect_error) {
    die("Errore de Conexion". $conn->connect_error);
}

?>