<?php 

    include 'modelo/config.php';

    $sql = "SELECT * FROM usuarios";
    $query = Conexion::conectar()->query($sql);
    $array = $query -> fetch_all();

    //var_dump($array);

    require_once('TCPDF-main/tcpdf.php');

    //Parametros para establecer caracteristicas del documento
    $pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
    $pdf->setCreator(PDF_CREATOR);
    $pdf->setAuthor('ITI-8A');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->setMargins(10,10,10,false);
    $pdf->setAutoPageBreak(true,20);
    $pdf->setFont('Helvetica', '', 10);
    $pdf->AddPage();

    //Preparamos el contenido del documento
    $content = "<h1 style='align:center;'>Lista de Usuarios</h1>";
    $content .= "";
    $content .= ' 
    <table  border= "1">
        <tr align= "center">
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
   
    ';

    foreach($array as $row => $item){
        $content .= '
            <tr align= "center" >
                <th>'.$item[1].'</th>
                <th>'.$item[2]. " " .$item[3]. " " .$item[4].'</th>
                <th>'.$item[5].'</th>
                <th>'.$item[6].'</th>
                <th>'.$item[7].'</th>
                <th>'.$item[9].'</th>
            </tr>
        ';
    }
    $content .= '</table>';


    //Imprimimos el documento en PDF
    $pdf->writeHTML($content, true, 0, true, 0);
    $pdf->lastPage();

    //Datos del archivo pdf(salida)
    $nombrePDF = 'mi_nombre_reporte.pdf';
    $pdf->Output($nombrePDF, 'I');
?>