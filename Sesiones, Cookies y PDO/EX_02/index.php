<!--Haz una web con dos ficheros, index.php y cookies.php.
index.php pedirá el nombre de usuario y la lengua que quiere utilizar mediante un formulario.
Enviará los datos al archivo cookies.php, el cuál guardará las cookies.
El próximo acceso que el usuario realice a index.php, tiene que autorellenarse con la información anterior.-->

<!DOCTYPE html>
<html>
<head>
    <title>EX_02</title>
</head>
<body>
<form action="cookies.php" method="POST">
    <label>Nombre de usuario:</label>
    <input id="username" name="username">
    <br>
    <label>Idioma:</label>
    <select id="lang" name="lang">
        <option value="español">Español</option>
        <option value="català">Català</option>
        <option value="English">English</option>
    </select>
    <br>
    <button type="submit" formtarget="_blank">Enviar</button>
</form>
</body>
</html>

