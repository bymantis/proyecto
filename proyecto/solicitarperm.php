<?php
$id = $_POST['ID'];
$asistencia = $_POST['NUMASIST'];
$fecha = $_POST['FECHA'];
$lugar = "IRAPUATO, GTO";
$departamento = $_POST['DEPARTAMENTO'];
$fechapermiso = $_POST['FECHADELPERM'];
$horasalida = $_POST['HORADESALIDA'];
$regreso = $_POST['REGRESO'];
$tiempoafectivo=$_POST['TIEMPOAFECTIVO'];
$observaciones=$_POST['OBSERVACIONES'];
$tiempoextra = $_POST['TIEMPOEXTRA'];
$horasres = $_POST['HORASRESTANTES'];
$contrasena = $_POST['CONTRASENA'];
$opciones= $_POST['OPCIONES'];
$usuario= "ADMIN";

$cnx = mysqli_connect("localhost", "root", "", "retho");
session_start();
$_SESSION['Usuario'] = "$usuario";

$consulta = "SELECT * FROM USUARIOS WHERE RFC='$usuario' AND CONTRASENA='$contrasena'";

$resultado = mysqli_query($cnx, $consulta);
//Tomaremos los datos, donde el rows sirve para almacenar
$filas = mysqli_num_rows($resultado);

if($filas){
    $sql = "UPDATE permisos set ASISTENCIA='$asistencia', FECHA='$fecha', LUGAR='$lugar', DEPARTAMENTO='$departamento', FECHAPERMISO='$fechapermiso', SALIDA='$horasalida', REGRESO='$regreso', TIEMPOAFECTIVO='$tiempoafectivo', OBSERVACIONES='$observaciones', TIEMPOEXTRA='$tiempoextra', HORASRESTANTES='$horasres', PERMISO='$opciones'where ID like $id";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Inserto!";
    }
    else {
        header("Location: index.php");
    }
} else{
    header("location:permisos.php");
}

?>