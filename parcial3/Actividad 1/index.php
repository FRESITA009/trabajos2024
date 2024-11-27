<?php

require('fpdf186\fpdf.php');

$pdf = new FPDF(); //Creamos un objeto
$pdf ->AddPage(); //Insertamos una pagina
$pdf ->SetFont('Arial','B',16); //Configuro la tipografia
$pdf ->Cell(40,10,'Hola Mundo!'); //Escribo mensaje


$pdf ->SetFont('Arial','I',14);
$pdf ->Cell(0,10, 'Centro de Estudios Tecnologicos Industriales y de Servicios No.84');
$pdf ->Ln(10);

$pdf ->SetFont('Arial','I',14);
$pdf ->Cell(0,10, 'Gutierrez martinez kimberly');
$pdf ->Ln(10);
?>