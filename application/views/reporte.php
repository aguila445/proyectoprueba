<!-- HTML del formulario de REPORTE -->
<div class="page-inner">
    <div class="checkout">
    </div>
    <div class="page-title">
        <h3>REPORTES</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Extra</a></li>
                <li class="active">Shop</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <!-- Agregar un menú y botones para seleccionar el tipo de reporte -->
<div class="row">
    <div class="col-md-12">
        <h4>Seleccionar Tipo de Reporte</h4>
    <!--    <div class="btn-group">
            <button type="button" class="btn btn-default" id="btnFraternos">Fraternos</button>
            <button type="button" class="btn btn-default" id="btnProductos">Productos</button>
            <button type="button" class="btn btn-default" id="btnActividades">Actividades</button>
            <button type="button" class="btn btn-default" id="btnVentas">Ventas</button>
            <button type="button" class="btn btn-default" id="btnVentas">Recibo</button>
        </div>  -->
        <div class="btn-group">
    <a href="reporte_fraternos" class="btn btn-default">Fraternos</a>
    <a href="reporte_productos" class="btn btn-default">Productos</a>
    <a href="reporte_actividades" class="btn btn-default">Actividades</a>
    <a href="reporte_ventas" class="btn btn-default">Ventas</a>
    <a href="<?php echo base_url(); ?>index.php/venta/recibo" class="btn btn-default">Recibo</a>
</div>

    </div>
</div>

<!-- Modal para el reporte de Fraternos -->
<div class="modal fade" id="modalFraternos" tabindex="-1" role="dialog" aria-labelledby="modalFraternosLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalFraternosLabel">Informe de Fraternos</h4>
            </div>
            <div class="modal-body">
                <!-- Contenido del informe de Fraternos (título, nombre completo, teléfono, dirección, email) -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Descargar PDF</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal para el reporte de Productos -->
<!-- Modal para el reporte de Productos -->
<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="modalProductosLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalProductosLabel">Informe de Productos</h4>
            </div>
            <div class="modal-body" id="modalProductosBody">
                <!-- Contenido del informe de Productos se cargará aquí mediante AJAX -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="descargarPDF">Descargar PDF</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para el reporte de Actividades -->
<div class="modal fade" id="modalActividades" tabindex="-1" role="dialog" aria-labelledby="modalActividadesLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalActividadesLabel">Informe de Actividades</h4>
            </div>
            <div class="modal-body">
                <!-- Contenido del informe de Actividades (nombre de actividad, fecha y lista de fraternos inscritos) -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Descargar PDF</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal para el reporte de Ventas -->
<div class="modal fade" id="modalVentas" tabindex="-1" role="dialog" aria-labelledby="modalVentasLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalVentasLabel">Informe de Ventas</h4>
            </div>
            <div class="modal-body">
                <!-- Contenido del informe de Ventas (seleccionadores de fecha, lista de ventas, productos vendidos, cantidad, precio, total, nombre de fraterno y usuario) -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Descargar PDF</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Manejar el clic en el botón "Fraternos"
        $("#btnFraternos").click(function() {
            descargarPDF('reporte_fraternos.php');
        });

        // Manejar el clic en el botón "Productos"
        $("#btnProductos").click(function() {
            descargarPDF('reporte_productos.php');
        });

        // Manejar el clic en el botón "Actividades"
        $("#btnActividades").click(function() {
            descargarPDF('reporte_actividades.php');
        });

        // Manejar el clic en el botón "Ventas"
        $("#btnVentas").click(function() {
            descargarPDF('reporte_ventas.php');
        });

        // Manejar el clic en el botón "Recibo"
        $("#btnRecibo").click(function() {
            descargarPDF('reporte_recibo.php');
        });

        function descargarPDF(url) {
            // Realizar una solicitud AJAX para cargar el contenido del archivo PHP que genera el PDF
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    // Se asume que el servidor devuelve el PDF como una respuesta binaria
                    // y lo almacena en la variable 'data'.

                    // Crear una URL de objeto para el PDF
                    var blob = new Blob([data], { type: 'application/pdf' });
                    var pdfUrl = URL.createObjectURL(blob);

                    // Crear un enlace para descargar el PDF
                    var link = document.createElement('a');
                    link.href = pdfUrl;
                    link.download = 'informe.pdf'; // Puedes cambiar el nombre del archivo
                    link.style.display = 'none';

                    // Agregar el enlace al cuerpo del documento
                    document.body.appendChild(link);

                    // Simular el clic en el enlace para descargar el PDF
                    link.click();

                    // Eliminar el enlace después de la descarga
                    document.body.removeChild(link);
                }
            });
        }
    });
</script>



<!-- Asegúrate de cargar jQuery antes de Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Asegúrate de cargar Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                        </div>
                    </div><!-- Row -->
<!-- Agrega este código JavaScript en tu vista 'formulario_venta.php' -->

