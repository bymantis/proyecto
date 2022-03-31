<?php
$rfc = $_POST['RFC'];
$curp = $_POST['CURP'];
$nombre = $_POST['NOMBRE'];
$contrasena = $_POST['CONTRASENA'];

$cnx = mysqli_connect("localhost", "root", "", "retho");
$sql = "INSERT INTO usuarios(RFC, CURP, NOMBRE, CONTRASENA) VALUES('$rfc', '$curp', '$nombre', '$contrasena')";
$sql2 = "INSERT INTO permisos(ASISTENCIA, FECHA, LUGAR, DEPARTAMENTO, FECHAPERMISO, SALIDA, REGRESO, TIEMPOAFECTIVO, OBSERVACIONES, TIEMPOEXTRA, HORASRESTANTES) VALUES('', '', '', '', '', '', '', '', '', '', '')";
$rta = mysqli_query($cnx, $sql);
$rta2 = mysqli_query($cnx, $sql2);
if (!$rta) {
    echo "No se Inserto!";
}
else {
    header("Location: index.php");
}

if (!$rta2) {
    echo "No se Inserto!";
}
else {
    header("Location: index.php");
}
?> 