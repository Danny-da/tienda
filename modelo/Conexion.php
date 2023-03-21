<?php
    class Conexion{
        public function Conectar(){
            try{
                //Crear la cadena de conexión
                $bd="bdtienda";
                $user="root";
                $pass="";
                $ruta="mysql:host=localhost;dbname=".$bd;
                $cn=new PDO($ruta,$user,$pass);
                $cn->query("SET NAMES 'utf8'");
                return $cn;
            }
            catch(PDOException $ex){
                echo $ex->getMessage();
            }
        }
    }
?>