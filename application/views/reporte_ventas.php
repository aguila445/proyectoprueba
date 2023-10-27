<?php
// Incluye la biblioteca TCPDF
require('fpdf/fpdf.php');

// Crea una instancia de TCPDF
//$pdf = new FPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Establece información del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu Nombre');
$pdf->SetTitle('Reporte General de Ventas');
$pdf->SetSubject('Reporte de Ventas');

// Agrega una página
$pdf->AddPage();

// Configura fuentes
$pdf->SetFont('helvetica', '', 12);

// Agrega un logo (reemplaza 'logo.png' con la ruta de tu archivo de logo)
$pdf->Image('logo.png', 10, 10, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Agrega el título
$pdf->Cell(0, 20, 'Reporte General de Ventas', 0, 1, 'C');

// Agrega los campos de "desde" y "hasta"
$pdf->Cell(0, 10, 'Desde: Fecha_Desde  Hasta: Fecha_Hasta', 0, 1, 'C');

// Crear una tabla para mostrar los datos de ventas
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(30, 10, 'Número', 1, 0, 'C', 1);
$pdf->Cell(40, 10, 'Fecha', 1, 0, 'C', 1);
$pdf->Cell(70, 10, 'Fraterno', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Total', 1, 1, 'C', 1);

// Conecta a tu base de datos y obtén los datos de ventas
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de ventas
$sql = "SELECT numero, fecha, fraterno, total FROM ventas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Agrega los datos de ventas a la tabla
        $pdf->Cell(30, 10, $row["numero"], 1, 0, 'C');
        $pdf->Cell(40, 10, $row["fecha"], 1, 0, 'C');
        $pdf->Cell(70, 10, $row["fraterno"], 1, 0, 'C');
        $pdf->Cell(50, 10, number_format($row["total"], 2), 1, 1, 'C');
    }
} else {
    echo "No se encontraron datos de ventas";
}

// Calcula el total de ventas (suma de la columna "total")
$sql = "SELECT SUM(total) AS total_ventas FROM ventas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalVentas = $row["total_ventas"];
} else {
    $totalVentas = 0; // Si no hay datos, establece el total en 0.
}

// Cierra la conexión a la base de datos
$conn->close();

// Convierte el total de ventas en letras (puedes usar la función que proporcionaste)
$totalEnLetras = convertirMontoEnLetras($totalVentas);

// Agrega el total de ventas al PDF
$pdf->Cell(140, 10, 'Total:', 1, 0, 'R');
$pdf->Cell(50, 10, number_format($totalVentas, 2), 1, 1, 'C');
$pdf->Cell(190, 10, $totalEnLetras . ' 00/100 Bolivianos', 'T', 1, 'C');

// Salida del PDF (descarga o visualización)
$pdf->Output('reporte_ventas.pdf', 'D');

// Función para convertir el monto en letras (reemplaza esto con tu lógica)
function convertirMontoEnLetras($monto)
{
    // Implementa la lógica para convertir el monto en letras aquí
    return 'Monto en letras'; // Reemplaza con la conversión real.
}
