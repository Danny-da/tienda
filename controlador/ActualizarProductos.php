<?php
require_once "../modelo/CRUDProductos.php";
$registro=array(
   'idproducto'      =>$_POST['txtidCliente'],
   'producto'        =>$_POST['cbotipo'],
   'cantidad'        =>$_POST['txtnumdoc'],
   'precio'          =>$_POST['txtCliente'],
   'fechavenciminto' =>$_POST['txtdireccion'],
   'marca'           =>$_POST['txtfono'],
   'linea'           =>$_POST['txtcorreo']
   'imagen'          =>$_POST['txtcorreo']
 
);
$datos=new Productos;
echo $datos->actualizarProductos($registro);
?>