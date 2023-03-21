<?php
 require_once "../modelo/CRUDClientes.php";
 $registro=$_POST['id'];

 
 $datos=new Clientes;
 echo $datos->eliminarClientes($registro);
?>