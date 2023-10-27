
<?php
require('fpdf/fpdf.php');
// Asegúrate de tener la librería FPDF en la misma carpeta

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo de la empresa
        $this->Image('adminlte/assets/images/bandera.jpg', 10, 10, 30);

        // Número de recibo autogenerado
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Recibo No: 00001', 0, 1, 'R');
        $this->Ln(10);

        // Título del recibo
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'Recibo de Ventas', 0, 1, 'C');
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Total en Bs de la venta
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Total en Bs: 100.00', 0, 1, 'L');

        // Total en Bs de la venta en forma literal
        $this->Cell(0, 10, 'Cien 00/100 Bolivianos', 0, 1, 'L');

        // Usuario
        $this->Cell(0, 10, 'Usuario: Juan Pérez', 0, 0, 'L');

        // Fecha actual
        $this->Cell(0, 10, 'Fecha: ' . date('Y-m-d H:i:s'), 0, 0, 'R');
    }

    // Cuerpo del recibo
    function Body()
    {
        // NIT o C.I. del fraterno
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'NIT o C.I.: 123456', 0, 1, 'L');
        $this->Ln(10);

        // Nombre del fraterno
        $this->Cell(0, 10, 'Nombre del Fraterno: Juan Pérez', 0, 1, 'L');
        $this->Ln(10);

        // Crear tabla con los detalles de la venta
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(30, 10, 'Cantidad', 1);
        $this->Cell(70, 10, 'Descripción', 1);
        $this->Cell(30, 10, 'Precio Unitario', 1);
        $this->Cell(30, 10, 'Importe en Bs', 1);
        $this->Ln();

        // Agregar filas de productos, estos son datos de ejemplo
        $productos = array(
            array(2, 'Producto 1', 25.00, 50.00),
            array(3, 'Producto 2', 15.00, 45.00)
        );

        $this->SetFont('Arial', '', 12);
        foreach ($productos as $producto) {
            $this->Cell(30, 10, $producto[0], 1);
            $this->Cell(70, 10, $producto[1], 1);
            $this->Cell(30, 10, number_format($producto[2], 2), 1);
            $this->Cell(30, 10, number_format($producto[3], 2), 1);
            $this->Ln();
        }
    }
}

// Crear un nuevo objeto PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->Body();

// Salida del PDF
$pdf->Output();
?>
// 'reporte_ventas.pdf','D'