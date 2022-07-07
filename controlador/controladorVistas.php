<?php 
    class ControladorVistas{
        function secciones(){
            //iset es para preguntar si se definio una variable
            // aqui se esta preguntando si no existe la funcion seccion por el signo de exclamacion
            if(isset($_GET["seccion"])){
                //este es para que si alguien pone una url diferente , este include muestre inicio  esto es por seguridad
                $seccion = $_GET["seccion"];
                $ruta = 'vistas/' .$seccion. '.php';

                if(file_exists($ruta)){
                    include $ruta;
                }else{
                    include 'vistas/inicio.php';
                }
            }else{
                include 'vistas/inicio.php';
            }
        }
    }
?>