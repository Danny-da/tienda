<?php
 require_once "../modelo/CRUDClientes.php";
 $registro=array(
    'tipodoc'=>$_POST['cbotipo'],
    'numdoc'=>$_POST['txtnumdoc'],
    'cliente'=>$_POST['txtcliente'],
    'direccion'=>$_POST['txtdireccion'],
    'telefono'=>$_POST['txtfono'],
    'correo'=>$_POST['txtcorreo']
 );
 $datos=new Clientes;
 echo $datos->insertarClientes($registro);
?>