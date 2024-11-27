<?php
require('fpdf186\tabal.php');

//Conexion a la base de datos
$host = "localhost";    
$user = "root";
$password = "";
$db = "bd";

$coon = new mysqli($host, $user, $password, $db);
if($coon->connect_error){
    die("Error de conexion: " . $coon->connect_error);
}

//Consulta a la base de datos
$sql = "SELECT * FROM datos";
$result = $coon->query($sql);

//crear el pdf
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

//encabezado de la tabla
$pdf->Cell(20,10,'ID',1,0,'C');
$pdf->Cell(70,10,'Nombre',1,0,'C');
$pdf->Cell(30,10,'Precio',1,0,'C');
$pdf->Cell(30,10,'Stock',1,1,'C');

//datos de la tabla
$pdf->SetFont('Arial','',12);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $pdf->Cell(20,10,$row['id'],1,0,'C');
        $pdf->Cell(70,10,$row['nombre'],1,0,'C');
        $pdf->Cell(30,10,$row['precio'],1,0,'C');
        $pdf->Cell(30,10,$row['stock'],1,1,'C');
    }          
}else{
    $pdf->Cell(0,10,'No hay datos',1,1,'C');
}

//salida del pdf
$pdf->Output();
?>

