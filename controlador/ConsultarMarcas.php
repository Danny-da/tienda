<?php
   require_once "../modelo/CRUDProductos.php";
   $registro=new Productos;
   $datos=$registro->consultarMarca();
   $listado= '';
   foreach($datos as $fila){
        $listado=$listado.'<option value="'.$fila['idmarca'].'">'.$fila['marca'].'</option>';
    }
    echo  $listado;
                
    
   
?>