<?php

include('conexion.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta = "SELECT* FROM personal where usuario = '$USUARIO' and password ='$PASSWORD'";
$resultado= mysqli_query($conexion, $consulta);
$filas= mysqli_num_rows($resultado);

if($filas){
    header("location:../vista/Clientes.php");
}else{
    include("index.html");
    include("one.php");
    ?>
    <h1>ERROR DE AUTOIDENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado)
mysqli_close($conexion)
?>