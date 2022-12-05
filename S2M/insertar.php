<?php


require("conexion.php");

$db = new Database();
$connection = $db->connect();


if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $query = $connection->prepare("INSERT INTO usuarios(email,contrasena) VALUES (:email, :contrasena)");
    $resultado = $query->execute(['email'=>$email,'contrasena'=>$password]);
    

    if ($resultado) {
        echo "<h2>Registro creado con exito</h2>";
    } else {
        echo "<h2>Error al registrar</h2>";
    }
    echo "<a href='login.html'>Regresar</a>" ;







}










