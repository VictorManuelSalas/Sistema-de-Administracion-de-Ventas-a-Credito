<?php 

    class ControladorUsuarios{ //CRUD
         //solicitar al modelo todos los usuarios
        static function getUsers(){
            $tabla = "usuarios";
            $array = ModeloUsuarios::selectAll($tabla);
            foreach ($array as $row => $item){
                echo '
                    <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0">' .$item[1].'</td>
                        <td>' .$item[2]. " " .$item[3]. " " .$item[4].'</td>
                        <td style="">' .$item[5]. '</td>
                        <td style="">' .$item[6]. '</td>
                        <td style="">' .$item[7]. '</td>
                        <td style="">' .$item[9]. '</td>
                        <td style="">' .$item[10]. '</td>
                        <td>
                            
                            <a style=" background: blue; color: white; border-radius: 5px; margin: auto; padding: 5px;" href="index.php?seccion=detalleUsuario&id='.$item[1].'">Ver Info</a>
                            <br> <br> <a style=" background: green; color: white; border-radius: 5px; margin: 5px; padding: 5px;" href="index.php?seccion=actualizarUsuario&id='.$item[1].'">Editar</a>
                            <br> <br> <a style=" background: red; color: white; border-radius: 5px; margin: auto; padding: 5px;" href="index.php?seccion=listaUsuarios&delete=Borrar&id='.$item[1].'">Eliminar</a>
                        
                        </td>
                    </tr>
                  
                ';
            }
        }

        //solicite un usuario al modelo 
        static function getUserById(){
            $tabla = "usuarios";
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
    
                $dataSet = ModeloUsuarios::selectUser($tabla, $id);
                return $dataSet;
                
        
            }
        }
        //recibe datos de usuario desde la vista y los envia al modelo para insertar en la base de datos.
        static function nuevoUsuario(){
            if(isset($_POST["guardar"]) && $_POST["guardar"] == "Guardar"){
                $tabla = "usuarios";
                $datos = array(
                    'id' => $_POST["id"],
                    'nombre' => $_POST["nombre"],
                    'apellido_p' => $_POST["apellido_p"],
                    'apellido_m' => $_POST["apellido_m"],
                    'edad' => $_POST["edad"],
                    'sexo' => $_POST["sexo"],
                    'email' => $_POST["email"],
                    'tipo_usuario' => $_POST["tipo_usuario"], 
                    'telefono' => $_POST["telefono"]
                );
                $respuesta = ModeloUsuarios::newUser($tabla, $datos);

                if ($respuesta) {
                    echo '
                    <script>
                        alert("Usuario Registrado Correctamente");
                        window.location.href="index.php?seccion=listaUsuarios";
                    </script>
                    ';
                }
            }
        }
        //envie un ID de usuarios para actualizar
        static function editarUsuario(){
            if(isset($_POST["guardar"]) && $_POST["guardar"] == "Actualizar"){
                
                $ruta = "uploads/";
                $img = $_FILES["img_url"]["name"];

                $img_url = $ruta.$img;

                //var_dump($img_url);
                
                if(move_uploaded_file($_FILES["img_url"]["tmp_name"], $img_url)){
                    $tabla = "usuarios";
                    $datos = array(
                    'id' => $_POST["id"],
                    'nombre' => $_POST["nombre"],
                    'apellido_p' => $_POST["apellido_p"],
                    'apellido_m' => $_POST["apellido_m"],
                    'edad' => $_POST["edad"],
                    'sexo' => $_POST["sexo"],
                    'telefono' => $_POST["telefono"],
                    'tipo_usuario' => $_POST["tipo_usuario"],
                    'img_url' => $img_url
                    );

                    $respuesta = ModeloUsuarios::updateUser($tabla, $datos);
                    if($respuesta){
                        echo '
                        <script>
                            alert("Usuario actualizado correctamente");
                            window.location.href="index.php?seccion=listaUsuarios";
                        </script>
                        '; 
                    }
                } else{
                    echo "ERROR";
                    }
             
                
            }
        } 

        //envie un ID de usuario para eliminarlo
        static function eliminarUsuario(){
            $tabla = "usuarios";
            if (isset($_GET["delete"]) && $_GET["delete"] == "Borrar" && isset($_GET["id"])) {
                $id = $_GET["id"];

                $respuesta = ModeloUsuarios::deleteUser($tabla, $id);
                if ($respuesta) {
                    # code...
                    echo '
                        <script>
                            alert("Usuario eliminado Correctamente");
                            window.location.href="index.php?seccion=listaUsuarios";
                        </script>
                    ';
                }
                

            }
        }

        //FUNCION DE LOGIN TEMPORAL 
        static function login(){
            if(isset($_GET["login"]) && $_GET["login"] == "Entrar" && isset($_GET["id"]) && isset ($_GET["email"])){

                $id = $_GET["id"];
                $email = $_GET["email"];

                $respuesta = ModeloUsuarios::loginModelo($id, $email);

                if($respuesta["id"] == $id && $respuesta["email"] == $email){
                    session_start();

                    $_SESSION['existe_usuario'] = TRUE;
                    $_SESSION['nombre'] = $respuesta["nombre"];
                    $_SESSION['id'] = $respuesta["id"];
                    $_SESSION['email'] = $respuesta["email"];
                    $_SESSION['tipo_usuario'] = $respuesta["tipo_usuario"];
                    $_SESSION['img_url']  = $respuesta["img_url"];


                    header('Location: index.php?seccion=inicio');
                    
                }else{
                    echo'
                    <script>
                        alert("Los datos ingresados son incorrectos!");
                    </script>
                    ';
                }
            }
        }
    }
    

?>