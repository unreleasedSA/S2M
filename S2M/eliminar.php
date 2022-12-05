<?php
    session_start();
    require("conexion.php");

    $db = new Database();
    $connection = $db->connect();
    $id = $_GET["id"];

    $consulta = $connection->prepare("DELETE FROM usuarios WHERE id=?");
    $resultado = $consulta->execute([$id]);

    if ($resultado) {
        echo "<h2>Registro Eliminado!</h2>";
    } else {
        echo "<h2>Error al eliminar el registro</h2>";
    }
    echo "<a href='eliminarcuenta.php'>Regresar</a>";