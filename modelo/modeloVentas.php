<?php 
    include 'Config.php';


    class ModeloUsuarios{
        static function selectAll($tabla){
            $sql = "SELECT * FROM $tabla;";
            $query = Conexion::conectar()->query($sql);
            $array = $query->fetch_all();
            return $array;
        }

        static function selectUser($tabla, $id){
            $sql = "SELECT * FROM $tabla WHERE id = $id;";
            $query = Conexion::conectar()->query($sql);
            $row = $query->fetch_all();
            if ($row > 0) {
                return $row;    # code...
            }else {
                return false;
            }
            
        }

        static function newUser($tabla, $datos){
            $sql = "INSERT INTO $tabla (id_registro,id, nombre, ap_pat, ap_mat, edad, sexo, telefono, email, tipo_usuario) 
                                  VALUES (null, '$datos[id]',
                                                '$datos[nombre]',
                                                '$datos[apellido_p]',
                                                '$datos[apellido_m]',
                                                '$datos[edad]',
                                                '$datos[sexo]',
                                                '$datos[telefono]',
                                                '$datos[email]',
                                                '$datos[tipo_usuario]');";
            $query = Conexion::conectar()->query($sql);
            if($query){
                return true;
            }
        }

        static function updateUser($tabla, $datos){
            $sql = "UPDATE $tabla  SET  nombre = '$datos[nombre]',
                                        ap_pat = '$datos[apellido_p]',
                                        ap_mat = '$datos[apellido_m]',
                                        edad = '$datos[edad]',
                                        sexo = '$datos[sexo]',
                                        telefono = '$datos[telefono]',
                                        tipo_usuario = '$datos[tipo_usuario]',
                                        img_url = '$datos[img_url]' WHERE id = $datos[id];";
            
            $query = Conexion::conectar()->query($sql);
            if ($query > 0) {
                # code...
                return true;
            }else{
                return false;
            }
        }

        static function deleteUser($tabla, $id){
            $sql = "DELETE FROM $tabla WHERE id = $id;";
            $query = Conexion::conectar()->query($sql);
            
            if ($query > 0) {
                return true;    # code...
            }else {
                return false;
            }
            
        }

        static function  loginModelo($id, $email){
            $sql = "SELECT * FROM usuarios WHERE id = '$id' AND email = '$email';";
            $datos = Conexion::conectar()->query($sql);
            $row = $datos->fetch_assoc();
            if($row>0){
                return $row;
            }else{
                return false;
            }

            $datos->close();
        }
    }



    class ModeloVentas{
        static function selectAll($tabla){
            $sql = "SELECT * FROM $tabla;";
            $query = Conexion::conectar()->query($sql);
            $array = $query->fetch_all();
            return $array;
        }

        static function selectVenta($tabla, $id){
            $sql = "SELECT * FROM $tabla WHERE id = $id;";
            $query = Conexion::conectar()->query($sql);
            $row = $query->fetch_all();
            if ($row > 0) {
                return $row;    # code...
            }else {
                return false;
            }
            
        }

        static function newVenta($tabla, $datos){
            $sql = "INSERT INTO $tabla (`ID`, `Articulo`, `Cantidad`, `Fecha de Venta`, `Cliente`, `A Cuantos Meses`, `total`) 
                                  VALUES (null, '$datos[articulo]',
                                                '$datos[cantidad]',
                                                '$datos[fecha]',
                                                '$datos[cliente]',
                                                '$datos[meses]',
                                                '$datos[total]'
                                                );";
            $query = Conexion::conectar()->query($sql);
            if($query){
                return true;
            }
        }

           static function updateVenta($tabla, $datos){
            $sql = "UPDATE $tabla  SET  Articulo = '$datos[articulo]',
                                        Cantidad = '$datos[cantidad]',
                                        `Fecha de Venta` = '$datos[fecha]',
                                        Cliente = '$datos[cliente]',
                                        `A Cuantos Meses` = '$datos[meses]',
                                        total = '$datos[total]',
                                        img_url = '$datos[img_url]' WHERE ID = $datos[id];";
            
            $query = Conexion::conectar()->query($sql);
            if ($query > 0) {
                # code...
                return true;
            }else{
                return false;
            }
        }

         static function deleteVenta($tabla, $id){
            $sql = "DELETE FROM $tabla WHERE id = $id;";
            $query = Conexion::conectar()->query($sql);
            
            if ($query > 0) {
                return true;    # code...
            }else {
                return false;
            }
            
        }


    }

?>                                                                                                                                                                                                                                