<?php

if ($_POST['email']== "op7naranjo@gmail.com" and $_POST['password']== "santi341518") {
    session_start();
    $_SESSION['nombre']= "Santiago";

    header("location: index.admin.php");

}

else {
    require("conexion.php");

     $db = new Database();
     $connection = $db->connect();
     
     $validaremail = $_POST["email"];
     $validarcontrasena = $_POST["password"];
     $validaremail = htmlentities($validaremail);
     $validarcontrasena = htmlentities($validarcontrasena);
     $query = $connection->prepare("SELECT * FROM usuarios WHERE email=:email");
     $query->execute(["email"=>$validaremail]);

     $consulta = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach($consulta as $key => $dato){
         if ($validaremail==$dato["email"]) {
             if ($validarcontrasena==$dato["contrasena"]) {
                 session_start();
                 $_SESSION["email"]=$validaremail;
                 header("location:customerpage.php");
             }
         } else {
             header("location:login.html");
         }
     } 
 }


