<?php 
    
    session_start();
    if(!$_SESSION['existe_usuario']){
       header('Location: login.php ');
    }
    
    //en el modelo ventas esta la conexion a la base de datos por lo cual 
    //ahi se agregaran todos los datos de cada tema que se relacionan a la base de datos
    include "modelo/modeloVentas.php";
    include "controlador/controladorVistas.php";


    //Aqui se agregan los diferentes controladores
    include "controlador/controladorVentas.php";
    include "controlador/ControladorUsuarios.php";
    include "plantilla.php";
?>

















<!-- 
    echo "hola 2022 sorprendeme". "<br>";

    $variable = 120 . "<br>";

    echo $variable . "<br>";

    $variable= "mensaje en string";

    echo $variable . "<br>";




    $edad = 18;
    if($edad>=18){
        echo "eres mayor de edad";
    }else{
        echo "eres menor de 18 años";
    }
    "<br>";
    $edad = true;
    if($edad==true){
        echo "eres mayor de edad" . "<br>";;
    }else{
        echo "eres menor de 18 años" . "<br>";;
    }

    
   // $numero = 10;
    //for($i=0; $i<=$numero; $i++){
      //  echo $i . "<br>";
    //}

    $arreglo = ["dato1" => 10, "dato2" => 20, "dato3" => 30];
    var_dump($arreglo);
    echo "<br>";
    $edad = 20;
    print_r($edad); -->

<!--//     echo "hola 2022 sorprendeme". "<br>";

//     $variable = 120 . "<br>";

//     echo $variable . "<br>";

//     $variable= "mensaje en string";

//     echo $variable . "<br>";


//     $edad = 18;
//     if($edad>=18){
//         echo "eres mayor de edad";
//     }else{
//         echo "eres menor de 18 años";
//     }
//     "<br>";
//     $edad = true;
//     if($edad==true){
//         echo "eres mayor de edad" . "<br>";;
//     }else{
//         echo "eres menor de 18 años" . "<br>";;
//     }

    
//    // $numero = 10;
//     //for($i=0; $i<=$numero; $i++){
//       //  echo $i . "<br>";
//     //}

//     $arreglo = ["dato1" => 10, "dato2" => 20, "dato3" => 30];
//     var_dump($arreglo);
//     echo "<br>";
//     $edad = 20;
//     print_r($edad);
 
 -->