<?php
// Incluye la biblioteca TCPDF
require_once('fpdf/fpdf.php'); // Asegúrate de que la ruta sea correcta


// Crea una instancia de TCPDF
$pdf = new FPDF(); // Esto creará una instancia de FPDF

// Establece información del documento (personaliza estos valores)
$pdf->SetCreator('Tu Nombre');
$pdf->SetAuthor('Tu Nombre');
$pdf->SetTitle('Productos Más Vendidos');
$pdf->SetSubject('Reporte de Productos Vendidos');

// Agrega una página
$pdf->AddPage();

// Configura fuentes
$pdf->SetFont('helvetica', '', 12);

// Agrega un logo (reemplaza 'logo.png' con la ruta de tu archivo de logo)
$pdf->Image('logo.png', 10, 10, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Agrega el título
$pdf->Cell(0, 20, 'Productos Más Vendidos', 0, 1, 'C');

// Crea una tabla para mostrar los datos de productos vendidos
$pdf->SetFillColor(255, 255, 255); // Fondo blanco para la tabla
$pdf->Cell(70, 10, 'Nombre del Producto', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Monto Total de Ventas', 1, 0, 'C', 1);
$pdf->Cell(50, 10, 'Cantidad Total Vendida', 1, 1, 'C', 1);

// Debes conectar a tu base de datos y realizar una consulta SQL para obtener los datos de productos más vendidos
// Aquí, como ejemplo, se utiliza un arreglo con datos de muestra.
$sampleData = [
    ['Producto 1', 1500, 30],
    ['Producto 2', 2000, 45],
    ['Producto 3', 1000, 20],
];

foreach ($sampleData as $row) {
    $pdf->Cell(70, 10, $row[0], 1, 0, 'L');
    $pdf->Cell(50, 10, number_format($row[1], 2), 1, 0, 'R');
    $pdf->Cell(50, 10, $row[2], 1, 1, 'C');
}

// Calcular el total de productos vendidos (suma de la tercera columna)
$totalProductosVendidos = array_sum(array_column($sampleData, 2));

// Agregar el total de productos vendidos al PDF
$pdf->Cell(70, 10, 'Total:', 1, 0, 'R');
$pdf->Cell(50, 10, '', 1, 0, 'C');
$pdf->Cell(50, 10, $totalProductosVendidos, 1, 1, 'C');

// Aquí debes generar los datos de la gráfica (etiquetas y valores)
$labels = array_column($sampleData, 0);
$data = array_column($sampleData, 2);

// HTML para la gráfica (utilizando Chart.js)
$html = '<canvas id="productChart" width="200" height="100"></canvas>';
$pdf->writeHTML($html, true, 0, 0, true, 0);

// JavaScript para la gráfica (utilizando Chart.js)
$js = '
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById("productChart").getContext("2d");
        var data = {
            labels: ' . json_encode($labels) . ',
            datasets: [
                {
                    data: ' . json_encode($data) . ',
                    backgroundColor: ["red", "green", "blue"], // Colores de la gráfica
                },
            ],
        };
        var myDoughnutChart = new Chart(ctx, {
            type: "doughnut",
            data: data,
        });
    </script>
';
$pdf->writeHTML($js, true, 0, 0, true, 0);

// Salida del PDF (descarga o visualización)
$pdf->Output('reporte_productos_vendidos.pdf', 'D');

?>
