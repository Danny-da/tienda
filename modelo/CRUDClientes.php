<?php
    //Llamamos al archivo que contiene la conexión
    require_once "Conexion.php";
    class clientes extends conexion {
      //Creamos las funciones CRUD
       public function insertarClientes($datos){
        try{
            $sql="call insertarClientes(?,?,?,?,?,?)";
            $query=Conexion::Conectar()->prepare($sql);
            //Pasamos los valores a cada parámetro del SP
            //La función bindParam pertenece a la clase PDOStatement
            $query->bindParam(1,$datos['tipodoc'],PDO::PARAM_STR);
            $query->bindParam(2,$datos['numdoc'],PDO::PARAM_STR);
            $query->bindParam(3,$datos['cliente'],PDO::PARAM_STR);
            $query->bindParam(4,$datos['direccion'],PDO::PARAM_STR);
            $query->bindParam(5,$datos['telefono'],PDO::PARAM_STR);
            $query->bindParam(6,$datos['correo'],PDO::PARAM_STR);

            return $query->execute();
        }
        catch(PDOException $ex){
            echo "Error al registrar los datos ".$ex->getMessage();
        }
        finally{
            $query=null;
        }
       }
       
      public function actualizarClientes($datos){
        try{
            $sql="call actualizarClientes(?,?,?,?,?,?,?)";
            $query=Conexion::Conectar()->prepare($sql);
            //Pasamos los valores a cada parámetro del SP
            //La función bindParam pertenece a la clase PDOStatement
            $query->bindParam(1,$datos['idcliente'],PDO::PARAM_INT);
            $query->bindParam(2,$datos['tipodoc'],PDO::PARAM_STR);
            $query->bindParam(3,$datos['numdoc'],PDO::PARAM_STR);
            $query->bindParam(4,$datos['cliente'],PDO::PARAM_STR);
            $query->bindParam(5,$datos['direccion'],PDO::PARAM_STR);
            $query->bindParam(6,$datos['telefono'],PDO::PARAM_STR);
            $query->bindParam(7,$datos['correo'],PDO::PARAM_STR);

            return $query->execute();
        }
        catch(PDOException $ex){
            echo "Error al actualizar los datos ".$ex->getMessage();
        }
        finally{
            $query=null;
        }
      }

      public function eliminarClientes($datos){
        try{
            $sql="call eliminarClientes(?)";
            $query=Conexion::Conectar()->prepare($sql);
            //Pasamos los valores a cada parámetro del SP
            //La función bindParam pertenece a la clase PDOStatement
            $query->bindParam(1,$datos,PDO::PARAM_INT);

            return $query->execute();
        }
        catch(PDOException $ex){
            echo "Error al eliminar los datos ".$ex->getMessage();
        }
        finally{
            $query=null;
        }
      }

       public function consultarClientes(){
        try{
            $sql="call consultarClientes()";
            $query=Conexion::Conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        catch(PDOException $ex){
            echo "Error al consultar los datos ".$ex->getMessage();
        }
        finally{
            $query=null;
        }
      } 

      public function buscarClientes($dato){
        try{
            $sql="call buscarClientes(?)";
            $query=Conexion::Conectar()->prepare($sql);
            $query->bindParam(1,$dato,PDO::PARAM_STR);

            $query->execute();
            $registros=array();

            foreach ($query as $fila){
                $registros[]=$fila;
            }
            //Retornamos el arreglo convertido a notación JSON
            return json_encode($registros);
        }
        catch(PDOException $ex){
            echo "Error al buscar los datos ".$ex->getMessage();
        }
        finally{
            $query=null;
        }
       }
       public function obtenerIdCliente($dato){
        try {
            $sql="call obtenerIdCliente(?)";
            $query=Conexion::Conectar()->prepare($sql);

            $query->bindParam(1,$dato,PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();//Para obtener Registros

        } 
        catch (PDOException $ex) {
            echo "Error al obtener el dato ". $ex->getMessage();
        }
        finally{
            $query=null;
        }
       }
    }
?>