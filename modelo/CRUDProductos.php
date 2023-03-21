<?php
    //Llamamos al archivo que contiene la conexión
    require_once "Conexion.php";
    class Productos extends conexion {
    //Creamos las funciones CRUD
        public function insertarProductos($datos){
            try{
                $sql="call insertarProductos(?,?,?,?,?,?,?)";
                $query=Conexion::Conectar()->prepare($sql);
                //Pasamos los valores a cada parámetro del SP
                //La función bindParam pertenece a la clase PDOStatement
                
                $query->bindParam(1,$datos['producto'],PDO::PARAM_STR);
                $query->bindParam(2,$datos['cantidad'],PDO::PARAM_STR);
                $query->bindParam(3,$datos['precio'],PDO::PARAM_STR);
                $query->bindParam(4,$datos['fechavencimiento'],PDO::PARAM_STR);
                $query->bindParam(5,$datos['marca'],PDO::PARAM_INT);
                $query->bindParam(6,$datos['linea'],PDO::PARAM_INT);
                $query->bindParam(7,$datos['imagen'],PDO::PARAM_LOB);

                return $query->execute();
            }
            catch(PDOException $ex){
                echo "Error al registrar los datos ".$ex->getMessage();
            }
            finally{
                $query=null;
            }
        }
        public function actualizarProductos($datos){
            try{
                $sql="call actualizarProductos(?,?,?,?,?,?,?,?)";
                $query=Conexion::Conectar()->prepare($sql);
                //Pasamos los valores a cada parámetro del SP
                //La función bindParam pertenece a la clase PDOStatement
                $query->bindParam(1,$datos['idproducto'],PDO::PARAM_STR);
                $query->bindParam(2,$datos['producto'],PDO::PARAM_STR);
                $query->bindParam(3,$datos['cantidad'],PDO::PARAM_STR);
                $query->bindParam(4,$datos['precio'],PDO::PARAM_STR);
                $query->bindParam(5,$datos['fechavencimiento'],PDO::PARAM_STR);
                $query->bindParam(6,$datos['marca'],PDO::PARAM_INT);
                $query->bindParam(7,$datos['linea'],PDO::PARAM_INT);
                $query->bindParam(8,$datos['imagen'],PDO::PARAM_LOB);

                return $query->execute();
            }
            catch(PDOException $ex){
                echo "Error al actualizar los datos ".$ex->getMessage();
            }
            finally{
                $query=null;
            }
        }
        public function eliminarProductos($datos){
            try{
                $sql="call eliminarProductos(?)";
                $query=Conexion::Conectar()->prepare($sql);
                //Pasamos los valores a cada parámetro del SP
                //La función bindParam pertenece a la clase PDOStatement
                $query->bindParam(1,$datos['idproducto'],PDO::PARAM_STR);

                return $query->execute();
            }
            catch(PDOException $ex){
                echo "Error al eliminar los datos ".$ex->getMessage();
            }
            finally{
                $query=null;
            }
        }
        public function consultarMarcas(){
            try{
                $sql="call consultarMarcas()";
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

        public function consultarLineas(){
            try{
                $sql="call consultarLineasProductos()";
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

        public function consultarProductos(){
            try{
                $sql="call consultarProductos()";
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

        public function buscarProductos($dato){
            try{
                $sql="call buscarProductos(?)";
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
        public function obtenerIdproductos($dato){
            try {
                $sql="call obtenerIdproductos(?)";
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