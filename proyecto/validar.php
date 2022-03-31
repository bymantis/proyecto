<?php 

//Conectamos a la base de datos 
$conectar = mysqli_connect("localhost","root","","retho");

//se llaman las variables a validar en la BD
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

session_start();
$_SESSION['Usuario'] = $usuario;

//Se hace un consulta para ver si los datos ingresados estan la BD
$consulta = "SELECT * FROM USUARIOS WHERE RFC='$usuario' AND CONTRASENA='$contrasena'";

$resultado = mysqli_query($conectar, $consulta);
//Tomaremos los datos, donde el rows sirve para almacenar
$filas = mysqli_num_rows($resultado);

//Se hace la valiadcion de los datos
 if($filas){
    header("location:index.php");
} else{
   ?>
    <?php
    include("login.html");
    ?>
     <h3>ERROR EN LOS DATOS</h3>    <?php
}
 mysqli_free_result($resultado);
 mysqli_close($conectar);