<?php
require_once "../modelo/CRUDClientes.php";
$registro=array(
    'idecliente'=>$_POST['txtidClientea'],
   'tipodoc'=>$_POST['cbotipoa'],
   'numdoc'=>$_POST['txtnumdoca'],
   'cliente'=>$_POST['txtClientea'],
   'direccion'=>$_POST['txtdirecciona'],
   'telefono'=>$_POST['txtfonoa'],
   'correo'=>$_POST['txtcorreoa']

);
$datos=new Clientes;
echo $datos->actualizarClientes($registro);
?>