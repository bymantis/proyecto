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
    <form action="">
    <div id="main-container">
        
    <a class="boton" href="nuevo.php">Agregar</a>
    <br>
    <a class="boton" href="permisos.php">Solicitar permiso de salida</a>
    <br><br>

    
        <table>
            <tr>
                <td>ID</td>
                <td>RFC</td>
                <td>CURP</td>
                <td>NOMBRE</td>
                <td>CONTRASEÑA</td>
                <td>OPCIONES</td>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost", "root", "", "retho");
                $sql = "SELECT ID, RFC, CURP, NOMBRE, CONTRASENA FROM usuarios order by ID";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr id="marcar">
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td>
                        <a class="boton"href="editar.php?
                        ID=<?php echo $mostrar['0'] ?> &
                        RFC=<?php echo $mostrar['1'] ?> &
                        CURP=<?php echo $mostrar['2'] ?> &
                        NOMBRE=<?php echo $mostrar['3'] ?> &
                        CONTRASENA=<?php echo $mostrar['4'] ?> 
                        ">Editar</a>
                        <a class="boton" href="sp_eliminar.php? ID=<?php echo $mostrar['0'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
        </table>
        </div>
    </form>
</body>
</html>