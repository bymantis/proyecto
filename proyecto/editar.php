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
<?php
$id =$_GET['ID'];
$rfc = $_GET['RFC'];
$curp = $_GET['CURP'];
$nombre = $_GET['NOMBRE'];
$contrasena = $_GET['CONTRASENA'];
?>
    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar Datos:</td>
                    <td><input type="text" name="ID" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>RFC:</td>
                    <td><input type="text" name="RFC" id="" value="<?=$rfc?>"></td>
                </tr>
                <tr>
                    <td>CURP:</td>
                    <td><input type="text" name="CURP" id="" value="<?=$curp?>"></td>
                </tr>
                <tr>
                    <td>NOMBRE:</td>
                    <td><input type="text" name="NOMBRE" id="" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>CONTRASENA:</td>
                    <td><input type="password" name="CONTRASENA" id="" value="<?=$contrasena?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td> <a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>