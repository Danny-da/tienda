<?php
   require_once "../modelo/CRUDClientes.php";
   $registro=new Clientes;
   $datos=$registro->consultarClientes();

   $tabla='<table class="table table-hover">
     <thead>
          <tr>
              <th>IDCLIENTE</th>
              <th>TIPO DOC.</th>
              <th>NUM DOC</th>
              <th>CLIENTE</th>
              <th>DIRECCIÓN</th>
              <th>TELÉFONO</th>
              <th>CORREO</th>
              <th>ACTUALIZAR</th>
              <th>ELIMINAR</th>
          </tr>
      </thead>
      <tbody>';
      $registrotabla='';
      foreach($datos as $fila){
        $registrotabla=$registrotabla.'<tr>
             <td>'.$fila['idcliente'].'</td>
             <td>'.$fila['tipodoc'].'</td>
             <td>'.$fila['numdoc'].'</td>
             <td>'.$fila['cliente'].'</td>
             <td>'.$fila['direccion'].'</td>
             <td>'.$fila['telefono'].'</td>
             <td>'.$fila['correo'].'</td>
             <td>
                 <span class="btn btn-light btn-sm" onclick="obtenerRegistro('.$fila['idcliente'].')" data-bs-toggle="modal" data-bs-target="#actualizarModal">
                     <i class="fas fa-edit"></i>
                 </span>
             </td>
             <td>
                 <span class="btn btn-secondary btn-sm" onclick="EliminarCliente('.$fila['idcliente'].')" >
                       <i class="fas fa-trash-alt"></i>
                 </span>
             </td>
              
         </tr>';

      }
                
      echo $tabla.$registrotabla.'<tbody></table>';
   
?>