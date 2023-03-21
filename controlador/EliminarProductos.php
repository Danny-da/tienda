<?php
 require_once "../modelo/CRUDProductos.php";
 $registro=>$_POST['txtidproducto'],

 
 $datos=new Productos;
 echo $datos->eliminarProductos($registro);
?>