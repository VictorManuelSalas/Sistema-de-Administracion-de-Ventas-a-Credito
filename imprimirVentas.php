<?php 

    include 'modelo/config.php';

    $sql = "SELECT * FROM ventas";
    $query = Conexion::conectar()->query($sql);
    //fetch_all(): Obtiene todas las filas a la vez y devuelve un array con todos los datos.
    $array = $query -> fetch_all();

    //var_dump($array);
    /*La función require_once() incluye y evalua el fichero especificado durante 
    la ejecución del script. Se comporta de manera similar a require(), con la única 
    diferencia que si el código ha sido ya incluido, no se volverá a incluir.*/
    require_once('TCPDF-main/tcpdf.php');

    //Parametros para establecer caracteristicas del documento
    $pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
    $pdf->setCreator(PDF_CREATOR);
    $pdf->setAuthor('Admin_Victor');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->setMargins(10,10,10,false);
    $pdf->setAutoPageBreak(true,20);
    $pdf->setFont('Helvetica', '', 10);
    $pdf->AddPage();

    //Preparamos el contenido del documento
    $content = "<h1>Ventas Almacenadas</h1>";
    $content .= "<p>En este archivo se encuntran los datos de las ventas realizadas por parte de la compañia,
                ademas, se mostraran los datos detallados de las ventas como la cantidad, la fecha y esa informacion detallada. </p>";
    
    $content .= ' 
    <table  border= "1">
        <tr align= "center">
            <th>ID</th>
            <th>Articulo</th>
            <th>Cantidad</th>
            <th>Fecha de Venta</th>
            <th>Cliente</th>
            <th>Meses a Pagar</th>
            <th>Total a Pagar</th>
        </tr>
   
    ';

    foreach($array as $row => $item){
        $content .= '
            <tr style=" text-align: center;" >
                <th>'.$item[0].'</th>
                <th>'.$item[1].'</th>
                <th>'.$item[2].'</th>
                <th>'.$item[3].'</th>
                <th>'.$item[4].'</th>
                <th>'.$item[5].'</th>
                <th>'.$item[7].'</th>
                
            </tr>
        ';
    }
    $content .= '</table>';


    //Imprimimos el documento en PDF
    $pdf->writeHTML($content, true, 0, true, 0);
    $pdf->lastPage();

    //Datos del archivo pdf(salida)
    $nombrePDF = 'Reporte Ventas.pdf';
    $pdf->Output($nombrePDF, 'I');
?>