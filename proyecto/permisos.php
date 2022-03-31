<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="permisos.css">
</head>
<body>

    
<section class="form-register">
<form action="solicitarperm.php" method="post" id="formulario">

    <h1>Hospital Materno Infantil</h1>
    <div>
    <br>    
    <input class="controls" type="number" name="ID" id="" min="2" placeholder="ID del trabajador" required>
    <br><br>
    </div>

    <input class="controls" type="number" name="NUMASIST" id="" placeholder="Numero de asistencia" required>
    <br><br>

    <label for="">Fecha</label>
    <input class="controls" type="date" name="FECHA" id="" required>
    <br><br>

    <label for="">Lugar</label>
    <input class="controls" type="text" name="LUGAR" id="" value="IRAPUATO, GTO" disabled>
    <br><br>

    <input class="controls" type="text" name="DEPARTAMENTO" id="" placeholder="Departamento" required>
    <br><br>

    <label for="">Fecha del permiso</label>
    <input class="controls" type="date" name="FECHADELPERM" id="">
    <br><br>

    <label for="">Hora de salida</label>
    <input class="controls" type="time" name="HORADESALIDA" id="">
    <br><br>

    <input class="controls"type="text" name="REGRESO" id="" placeholder="Regreso" required>
    <br><br>

    <input class="controls"type="number" name="TIEMPOAFECTIVO" id="" placeholder="Tiempo afectivo(horas)" required>
    <br><br>

    <textarea name="OBSERVACIONES" id="" cols="20" rows="5" placeholder="Observaciones"></textarea>
    <br><br>

    <label for="">Tiempo extra(horas)</label>
    <input class="controls" type="number" name="TIEMPOEXTRA" id="" placeholder="Tiempo extra(horas)">

    <label for="">HORAS RESTANTES</label>
    <input class="controls" type="text" name="HORASRESTANTES" id="" value="0" disabled>
    <br><br>

    <header>CONFIRMACION</header>
        <br>
        <label for="">USUARIO</label>
        <br>
        <input class="controls" type="text" name="" id="" value="ADMIN" disabled>
        <br><br>
        <input class="controls" type="password" name="CONTRASENA" placeholder="CONTRASEÑA">
        <br>
        <label for="">Permiso otorgado:</label>
        <select name="OPCIONES" id="">
            <option value="Autorizado">Autorizado</option>
            <option value="Denegado">Denegado</option>
        </select>
        <br>
    <input class="botons" type="submit" value="solicitar permiso" id="btn">
</form>
</section>
</body>
</html>