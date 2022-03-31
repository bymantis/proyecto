<?php
$id = $_GET['ID'];

$cnx = mysqli_connect("localhost", "root", "", "retho");
$sql = "DELETE FROM usuarios where ID like $id";
$sql2 = "DELETE FROM permisos where ID like $id";
$rta = mysqli_query($cnx, $sql);
$rta2 = mysqli_query($cnx, $sql2);
if (!$rta) {
    echo "No se Elimino!";
}
else {
    header("Location: index.php");
}

if (!$rta2) {
    echo "No se Elimino!";
}
else {
    header("Location: index.php");
}
?> 