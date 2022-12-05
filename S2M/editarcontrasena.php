
<?php


    session_start();
    require("conexion.php");

    $db = new Database();
    $connection = $db->connect();
    $email = $_SESSION["email"];
    
    $consulta = $connection->prepare("SELECT * FROM usuarios WHERE email=:email");
    $consulta->execute(["email"=>$email]);

    $productos = $consulta->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estiloindexphp.css">
    <title>Editar contraseña</title>
</head>
<body>

<h1>Editar contraseña</h1>
    <form action="guardardatos.php" method="POST">
    <input type="text" name="id" hidden value="<?php echo $productos["id"]?>">
    <label for="email">Email:</label>
    <input type="text" disabled  value= "<?php echo $productos["email"]?> " name="email" id="email">
    <label for="password">Password:</label>
    <input type="password" value= "<?php echo $productos["contrasena"]?>" name="password" id="password"> <br>
    <label for="password">Confirm Password:</label>
    <input type="password" value= "" name="passwordtwo" id="password"> <br>
    <input type="submit"  name="guardar" value="guardar">
    </form>

    <span><a href="login.html">Regresar</a></span>

</body>
</html>
