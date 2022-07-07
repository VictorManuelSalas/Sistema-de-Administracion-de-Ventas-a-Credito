<?php
    class Conexion{
        static public function conectar(){
            $con = new mysqli('localhost', 'root', '', 'sistem_credit');
            if($con->connect_errno){
                echo "error";
            }else{
                return $con;
            }
        }
    }
?>
