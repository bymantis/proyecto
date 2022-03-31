<?php
$id = $_POST['ID'];
$rfc = $_POST['RFC'];
$curp = $_POST['CURP'];
$nombre = $_POST['NOMBRE'];
$contrasena = $_POST['CONTRASENA'];

$cnx = mysqli_connect("localhost", "root", "", "retho");
$sql = "UPDATE usuarios set RFC='$rfc', CURP='$curp', NOMBRE='$nombre', CONTRASENA='$contrasena' where ID like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta) {
    echo "No se Inserto!";
}
else {
    header("Location: index.php");
}
?> 