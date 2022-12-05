<?php
    session_start();
    require("conexion.php");

    $db = new Database();
    $connection = $db->connect();

    $pass1 = $_POST["password"];
    $pass2 = $_POST["passwordtwo"];
    $pass1 = htmlentities($pass1);
    $pass2 = htmlentities($pass2);

    $id = $_POST["id"];

    if ($pass1 == $pass2) {
        
        if (isset($pass1)) {
            

            $query = $connection->prepare("UPDATE usuarios SET contrasena=:contrasena WHERE id=:id");
            $resultado = $query->execute(['contrasena'=>$pass1,'id'=>$id]);
            if ($resultado) {
                echo "<h2>Registro Editado con exito!</h2>";
            } else {
                echo "<h2>Error al eliminar el registro</h2>";
            }
            echo "<a href='customerpage.php'>Regresar</a>";
        }
    }else {
        header ("location: editarcontrasena.php");
    }

  