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
        <div class="btn-group">
            <button type="button" class="btn btn-default" id="btnFraternos">Fraternos</button>
            <button type="button" class="btn btn-default" id="btnProductos">Productos</button>
            <button type="button" class="btn btn-default" id="btnActividades">Actividades</button>
            <button type="button" class="btn btn-default" id="btnVentas">Ventas</button>
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
<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="modalProductosLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalProductosLabel">Informe de Productos</h4>
            </div>
            <div class="modal-body">
                <!-- Contenido del informe de Productos (lista de productos con precio y talla) -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Descargar PDF</button>
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
        // ...

        // Manejar el clic en el botón "Fraternos"
        $("#btnFraternos").click(function() {
            $("#modalFraternos").modal("show");
            // Aquí puedes llenar el contenido del informe de Fraternos en el modal
            // usando AJAX o directamente desde la vista de la base de datos.
        });

        // Manejar el clic en el botón "Productos"
        $("#btnProductos").click(function() {
            $("#modalProductos").modal("show");
            // Llena el contenido del informe de Productos en el modal aquí.
        });

        // Manejar el clic en el botón "Actividades"
        $("#btnActividades").click(function() {
            $("#modalActividades").modal("show");
            // Llena el contenido del informe de Actividades en el modal aquí.
        });

        // Manejar el clic en el botón "Ventas"
        $("#btnVentas").click(function() {
            $("#modalVentas").modal("show");
            // Llena el contenido del informe de Ventas en el modal aquí.
        });

        // ...
    });
</script>

            <!-- /.card-body -->
    


<!-- JavaScript para la funcionalidad del formulario de venta -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Arreglo para almacenar los productos agregados
        var productos = [];
        var totalVenta = 0; // Inicializa el total en 0

        // Manejar el clic en el botón "Agregar Producto"
        $("#agregarProducto").click(function() {
            var nombreProducto = $("#nombreProducto").val();
            var precio = parseFloat($("#precio").val()); // Obten el precio del campo de precio
            var cantidad = parseInt($("#cantidad").val());
            var talla = $("#talla").val();
            var subtotal = precio * cantidad;

            // Agregar el producto a la tabla
            $("#tablaProductos tbody").append(`
                <tr>
                    <td>${nombreProducto}</td>
                    <td>${precio.toFixed(2)}</td>
                    <td>${talla}</td>
                    <td>${cantidad}</td>
                    <td>${subtotal.toFixed(2)}</td>
                </tr>
            `);

            // Agregar el producto al arreglo de productos
            productos.push({
                nombreProducto: nombreProducto,
                precio: precio,
                talla: talla,
                cantidad: cantidad,
                subtotal: subtotal
            });

            // Calcular el total
            totalVenta += subtotal;

            // Actualizar el total en la tabla
            $("#totalVenta").text(totalVenta.toFixed(2));

            // Limpiar los campos
            $("#nombreProducto").val("");
            $("#precio").val(""); // Reiniciar el precio
            $("#talla").val("");
            $("#cantidad").val("");
        });

        // Manejar el clic en el botón "Realizar Venta"
        $("#realizarVenta").click(function() {
            // Obtener el nombre del cliente (fraterno)
            var nombreFraterno = $("#nombreFraterno").val();

            // Validar que se haya ingresado un nombre de cliente (fraterno)
            if (nombreFraterno === "") {
                alert("Ingresa el nombre del cliente (fraterno) antes de realizar la venta.");
                return;
            }

            // Enviar los productos y el nombre del cliente al controlador para procesar la venta
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/fraterno/realizarventa", // Reemplaza con la URL correcta
                type: "POST",
                data: { productos: productos, nombreFraterno: nombreFraterno },
                success: function(response) {
                    // Manejar la respuesta del servidor, por ejemplo, mostrar un mensaje de confirmación
                    alert("Venta realizada con éxito.");
                }
            });
        });

        // Agregar un evento de entrada para el campo de búsqueda de producto
        $('#nombreProducto').on('keyup', function() {
            var producto = $(this).val();
            if (producto.length >= 3) { // Asegura que al menos se ingresen 3 caracteres antes de buscar
                // Realizar una solicitud AJAX para buscar productos a medida que el usuario escribe
                $.ajax({
                    url: 'venta/buscar_producto', // Controlador y función para buscar productos
                    method: 'POST',
                    data: { producto: producto },
                    success: function(data) {
                        // Mostrar los resultados en #productoResultados
                        var resultados = JSON.parse(data);
                        var resultadosHTML = '';
                        for (var i = 0; i < resultados.length; i++) {
                            var resultado = resultados[i];
                            resultadosHTML += '<div class="resultado">' + resultado.nombreProducto + '</div>';
                        }
                        $('#productoResultados').html(resultadosHTML);
                    }
                });
            } else {
                $('#productoResultados').html(''); // Limpia los resultados si hay menos de 3 caracteres
            }
        });

        // Agregar un manejador de clic para los resultados de búsqueda de producto
        $('#productoResultados').on('click', 'div.resultado', function() {
            var productoSeleccionado = $(this).text();

            // Llenar el campo de búsqueda con el producto seleccionado
            $('#nombreProducto').val(productoSeleccionado);

            // Realizar una solicitud AJAX para obtener el precio del producto
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/fraterno/obtener_precio_producto", // Ruta a tu controlador o script para obtener el precio
                method: 'POST',
                data: { producto: productoSeleccionado },
                success: function(data) {
                    // Mostrar el precio en el campo de precio
                    $("#precio").val(data);
                }
            });

            // Limpia los resultados de búsqueda
            $('#productoResultados').html('');
        });

        // Agregar un evento de entrada para el campo de búsqueda de cliente (fraterno)
        $('#nombreFraterno').on('keyup', function() {
            var fraterno = $(this).val();
            if (fraterno.length >= 3) { // Asegura que al menos se ingresen 3 caracteres antes de buscar
                // Realizar una solicitud AJAX para buscar clientes (fraternos) a medida que el usuario escribe
                $.ajax({
                    url: 'venta/buscar_fraterno', // Controlador y función para buscar fraternos
                    method: 'POST',
                    data: { fraterno: fraterno },
                    success: function(data) {
                        // Mostrar los resultados en #fraternoResultados
                        var resultados = JSON.parse(data);
                        var resultadosHTML = '';
                        for (var i = 0; i < resultados.length; i++) {
                            var resultado = resultados[i];
                            resultadosHTML += '<div class="resultado">' + resultado.nombreFraterno + '</div>';
                        }
                        $('#fraternoResultados').html(resultadosHTML);
                    }
                });
            } else {
                $('#fraternoResultados').html(''); // Limpia los resultados si hay menos de 3 caracteres
            }
        });

        // Agregar un manejador de clic para los resultados de búsqueda de cliente (fraterno)
        $('#fraternoResultados').on('click', 'div.resultado', function() {
            var fraternoSeleccionado = $(this).text();

            // Llenar el campo de búsqueda con el cliente (fraterno) seleccionado
            $('#nombreFraterno').val(fraternoSeleccionado);

            // Limpia los resultados de búsqueda
            $('#fraternoResultados').html('');
        });

        // Manejar el clic en el botón "Cancelar Venta"
        $("#cancelarVenta").click(function() {
            // Limpiar el formulario y los arreglos
            $("#nombreFraterno").val("");
            $("#nombreProducto").val("");
            $("#precio").val("");
            $("#talla").val("");
            $("#cantidad").val("");
            productos = [];
            totalVenta = 0;
            $("#tablaProductos tbody").empty();
            $("#totalVenta").text("0.00");
        });
    });
</script>
<!-- Asegúrate de cargar jQuery antes de Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Asegúrate de cargar Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                        </div>
                    </div><!-- Row -->
<!-- Agrega este código JavaScript en tu vista 'formulario_venta.php' -->

