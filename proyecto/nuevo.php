<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td>RFC:</td>
                    <td><input type="text" name="RFC" id="txt" required></td>
                </tr>
                <tr>
                    <td>CURP:</td>
                    <td><input type="text" name="CURP" id="txt" required></td>
                </tr>
                <tr>
                    <td>NOMBRE:</td>
                    <td><input type="text" name="NOMBRE" id="txt" required></td>
                </tr>
                <tr>
                    <td>CONTRASEÑA:</td>
                    <td><input type="password" name="CONTRASENA" id="txt" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar" id="btn"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>