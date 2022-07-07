<?php 

    class ControladorVentas{ //CRUD
    //solicitar al modelo todos los usuarios
        static function getVentas(){
            $tabla = "ventas";
            $array = ModeloVentas::selectAll($tabla);
            foreach ($array as $row => $item){
                echo '
                    <tr class="odd">
                        <td>' .$item[0].'</td>
                        <td class="dtr-control sorting_1" tabindex="0">' .$item[1].'</td>
                        <td>' .$item[2].'</td>
                        <td style="">' .$item[3].'</td>
                        <td style="">' .$item[4]. '</td>
                        <td style="">' .$item[5]. '</td>
                        <td style="">' .$item[7]. '</td>
                        <td style="">' .$item[6]. '</td>
                        <td>
                            
                            <a style=" background: blue; color: white; border-radius: 5px; margin: auto; padding: 5px;" href="index.php?seccion=detallesVenta&id='.$item[0].'">Ver Info</a>
                            <br> <br> <a style=" background: green; color: white; border-radius: 5px; margin: 5px; padding: 5px;" href="index.php?seccion=actualizarVenta&id='.$item[0].'">Editar</a>
                            <br> <br> <a style=" background: red; color: white; border-radius: 5px; margin: auto; padding: 5px;" href="index.php?seccion=ventas&delete=Borrar&id='.$item[0].'">Eliminar</a>
                        
                        </td>
                    </tr>
                  
                ';
            }
        }

        
        //solicite un usuario al modelo 
        static function getVentaById(){
            $tabla = "ventas";
            if (isset($_GET["id"])) {
                $id = $_GET["id"];

                $dataSet = ModeloVentas::selectVenta($tabla, $id);
                return $dataSet;
                

            }
        }
        //recibe datos de usuario desde la vista y los envia al modelo para insertar en la base de datos.
        static function nuevaVenta(){
            if(isset($_POST["guardar"]) && $_POST["guardar"] == "Guardar"){
                $tabla = "ventas";
                $datos = array(
                    'articulo' => $_POST["articulo"],
                    'cantidad' => $_POST["cantidad"],
                    'fecha' => $_POST["fecha"],
                    'cliente' => $_POST["cliente"],
                    'meses' => $_POST["meses"],
                    'total' => $_POST["total"]
                    
                );
                $respuesta = ModeloVentas::newVenta($tabla, $datos);

                if ($respuesta) {
                    echo '
                    <script>
                        alert("Venta Registrada Correctamente");
                        window.location.href="index.php?seccion=ventas";
                    </script>
                    ';
                }
            }
        }

        //envie un ID de usuarios para actualizar
        static function editarVenta(){
            if(isset($_POST["guardar"]) && $_POST["guardar"] == "Actualizar"){
                
                $ruta = "uploads/";
                $img = $_FILES["img_url"]["name"];

                $img_url = $ruta.$img;

                if(move_uploaded_file($_FILES["img_url"]["tmp_name"], $img_url)){
                    $tabla = "ventas";
                    $datos = array(
                    'id' => $_POST["id"],
                    'articulo' => $_POST["articulo"],
                    'cantidad' => $_POST["cantidad"],
                    'fecha' => $_POST["fecha"],
                    'cliente' => $_POST["cliente"],
                    'meses' => $_POST["meses"],
                    'img_url' => $img_url,
                    'total' => $_POST["total"]
                    );

                    $respuesta = ModeloVentas::updateVenta($tabla, $datos);
                    if($respuesta){
                    echo '
                        <script>
                            alert("Venta actualizada correctamente");
                            window.location.href="index.php?seccion=ventas";
                        </script>
                    ';
                    }
                }else{
                    echo "ERROR";
                    }
                
                
            }
        }

        
        //envie un ID de usuario para eliminarlo
        static function eliminarVentas(){
            $tabla = "ventas";
            if (isset($_GET["delete"]) && $_GET["delete"] == "Borrar" && isset($_GET["id"])) {
                $id = $_GET["id"];

                $respuesta = ModeloVentas::deleteVenta($tabla, $id);
                if ($respuesta) {
                    # code...
                    echo '
                        <script>
                            alert("Venta eliminada Correctamente");
                            window.location.href="index.php?seccion=ventas";
                        </script>
                    ';
                }
                

            }
        }
    }
?>