<?php
 require_once "../modelo/CRUDProductos.php";
 $imagen=$_FILES['imagen']['tmp_name'];
 $fs=fopen($imagen,'r+b');
 $imgdata=fread($fs,filesize($imagen));
 $registro=array(
    
    'producto'=>$_POST['txtproducto'],
    'cantidad'=>$_POST['txtcantidad'],
    'precio'=>$_POST['txtprecio'],
    'fechavencimiento'=>$_POST['txtfecha'],
    'marca'=>$_POST['cbomarca'],
    'linea'=>$_POST['cbolinea'],
    'imagen'=>$_POST['imagen']
 );
 $datos=new Productos;
 echo $datos->insertarProductos($registro);
?>