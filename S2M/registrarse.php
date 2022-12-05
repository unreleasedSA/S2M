
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estiloindexphp.css">
    <title>Document</title>
</head>
<body>

<h1>Registrarse</h1>
    <form action="insertar.php" method="POST">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password"> <br>
    <input type="submit" name="registrar" value="registrar">
    </form>

    <span><a href="login.html">Regresar</a></span>

</body>
</html>