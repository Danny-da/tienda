<?php
   require_once "../modelo/CRUDProductos.php";
   $registro=new Productos;
   $datos=$registro->consultarProductos();

   $tabla='<table class="table table-hover">
     <thead>
          <tr>
              <th>CODIGO</th>
              <th>PRODUCTO</th>
              <th>CANTIDAD</th>
              <th>PRECIO</th>
              <th>FECHA VENCI</th>
              <th>MARCA</th>
              <th>LINEA</th>
              <th>IMAGEN</th>
              <th>ACTUALIZAR</th>
              <th>ELIMINAR</th>
          </tr>
      </thead>
      <tbody>';
      $registrotabla='';
      foreach($datos as $fila){
        $registrotabla=$registrotabla.'<tr>
             <td>'.$fila['idproducto'].'</td>
             <td>'.$fila['producto'].'</td>
             <td>'.$fila['cantidad'].'</td>
             <td>'.$fila['precio'].'</td>
             <td>'.$fila['fechavencimiento'].'</td>
             <td>'.$fila['marca'].'</td>
             <td>'.$fila['lineaproducto'].'</td>
             <td><img whidth="60px" heigth="60px"src=data:image/png,base64'.base64_encode($fila['imagen']).'"></td>
             <td>
                 <span class="btn btn-light btn-sm" onclick="obtenerRegistro('.$fila['idproducto'].')" data-bs-toggle="modal" data-bs-target="#actualizarModal">
                     <i class="fas fa-edit"></i>
                 </span>
             </td>
             <td>
                 <span class="btn btn-secondary btn-sm" onclick="EliminarCliente('.$fila['idproducto'].')" >
                       <i class="fas fa-trash-alt"></i>
                 </span>
             </td>
              
         </tr>';

      }
                
      echo $tabla.$registrotabla.'<tbody></table>';
   
?>