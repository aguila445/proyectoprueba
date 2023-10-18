<!-- Content Wrapper. Contains page content -->
<!-- Page Sidebar -->
            <div class="page-inner">
                <div class="checkout">
                   
                    
                </div>
                <div class="page-title">
                    <h3>FORMULARIO DE VENTA</h3>
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
                        <div>
                        <a href="<?php echo base_url(); ?>index.php/venta/ventas" style="float: right;">
                        <button type="button" class="btn btn-primary">IR A LISTA DE VENTAS</button>
                        </a>
                        </div>
                        
                        <div class="col-md-12">
                        <div class="panel-body" class="table-responsive" >
                            <?php echo form_open_multipart('fraterno/agregardb'); ?>

                     <label for="nombreFraterno">Fraterno</label>
                     <input type="search" name="nombreFraterno" id="nombreFraterno" placeholder="Escriba el nombre del fraterno" class="form-control" style="width: 700px;">
                      <div id="fraternoResultados"></div>
                <br>
                <label for="nombreProducto">Producto</label>
                <input type="search" name="nombreProducto" id="nombreProducto" placeholder="Escriba el nombre del producto" class="form-control" style="width: 700px;">
                
                <div id="productoResultados"></div>
                </div>

                <div class="form-inline">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <select name="talla" id="talla" class="form-control" required>
                            <option value="S">P</option>
                            <option value="M">S</option>
                            <option value="S">M</option>
                            <option value="M">L</option>
                            <option value="S">XL</option>
                            <!-- Agrega aquí las opciones necesarias -->
                        </select>
                    </div>
</div>

                            <br>
                            <!-- ... Otros campos ... -->
<div>
                            <button type="button" class="btn btn-info" id="agregarProducto">Agregar al pedido</button>
                            <br><br>
</div>
                            <table class="table table-bordered" id="tablaProductos">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Talla</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se agregan los productos de forma dinámica -->

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5" align="right"><strong>Total:</strong></td>
                                    <td id="totalVenta">0.00</td>
                                </tr>
                                </tfoot>
                            </table>

                  

                            <!-- Botón para realizar la venta -->
                           <div>
                            <br>
                            <br>
                            <button type="button" class="btn btn-danger" id="cancelarVenta">Cancelar</button>
                            <button type="button" class="btn btn-success" id="realizarVenta">Realizar Venta</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <!-- /.card-body -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
    $(document).ready(function() {
        // Arreglo para almacenar los productos agregados
        var productos = [];
        var totalVenta = 0; // Inicializa el total en 0

        // Manejar el clic en el botón "Agregar Producto"
        $("#agregarProducto").click(function() {
            var nombreProducto = $("#nombreProducto").val();
            var precio = parseFloat($("#precioProducto").text()); // Obten el precio del campo de precio
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
            $("#precioProducto").text(""); // Reiniciar el precio
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

        // Agregar un manejador de clic para los resultados de búsqueda
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
                    $("#precioProducto").text(data);
                }
            });
            
            // Limpiar los resultados de búsqueda
            $('#productoResultados').html('');
        });
    });
</script>



                                    
                           
                        </div>
                    </div><!-- Row -->
<!-- Agrega este código JavaScript en tu vista 'formulario_venta.php' -->

