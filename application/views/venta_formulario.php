<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FORMULARIO DE VENTA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> FORMULARIO DE VENTAS </h3>
                            <br>
                            <a href="<?php echo base_url(); ?>index.php/fraterno/indexlte">
                                <button type="button" class="btn btn-warning">IR HOME</button>
                            </a>
                        </div>
                        <br>
                        <!-- /.card-header -->
                        <div class="panel-body" class="table-responsive" >
                            <?php echo form_open_multipart('fraterno/agregardb'); ?>
                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <input type="text" name="nombreProducto" id="" placeholder="Escriba el nombre del producto" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ropa">Ropa</label>
                                <select name="ropa" id="" class="form-control" required>
                                    <option value="Camiseta">sombrero varon</option>
                                    <option value="Pantalón">sombrero mujer</option>
                                    <option value="Camiseta">blusa</option>
                                    <option value="Pantalón">pollera</option>
                                    <option value="Camiseta">juste</option>
                                    <option value="Pantalón">centro</option>
                                    <option value="Camiseta">faja</option>
                                    <option value="Pantalón">camisa</option>
                                    <option value="Camiseta">zapatos varon</option>
                                    <option value="Pantalón">zapatos mujer</option>
                                    <option value="Camiseta">chaleco</option>
                                    <option value="Pantalón">tullma</option>
                                    <option value="Camiseta">otro</option>
                                    <!-- Agrega aquí las opciones necesarias -->
                                </select>
                            </div>
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
                            <!-- ... Otros campos ... -->

                            <button type="button" class="btn btn-primary" id="agregarProducto">Agregar Producto</button>
                            <br><br>

                            <table class="table table-bordered" id="tablaProductos">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Ropa</th>
                                        <th>Precio</th>
                                        <th>Talla</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se agregan los productos de forma dinámica -->
                                </tbody>
                            </table>

                            <div class="form-group">
                                <label for="sucursal">Sucursal</label>
                                <select name="sucursal" id="sucursal" class="form-control">
                                    <option value="Central">CENTRAL</option>
                                    <option value="Sucursal A">USA</option>
                                    <option value="Sucursal B">SANTA CRUZ</option>
                                    <option value="Sucursal A">LA PAZ</option>
                                    <option value="Sucursal B">ORURO</option>
                                    <option value="Sucursal A">POTOSI</option>
                                    <option value="Sucursal B">UYUNI</option>
                                    <option value="Sucursal A">SUCRE</option>
                                    <option value="Sucursal B">JULIACA</option>
                                    <option value="Sucursal A">ARGENTINA</option>
                                    <option value="Sucursal B">IQUIQUE</option>
                                    <option value="Sucursal A">CALAMA</option>
                                    <option value="Sucursal B">ARICA</option>
                                    <option value="Sucursal A">SANTIAGO</option>
                                    <option value="Sucursal B">GRANADA</option>
                                    <option value="Sucursal A">MURCIA</option>
                                    <option value="Sucursal B">BARCELONA</option>
                                    <option value="Sucursal A">SAN JULIAN</option>
                                    <option value="Sucursal B">BRASIL</option>
                                    <!-- Agrega aquí las opciones necesarias -->
                                </select>
                            </div>

                            <!-- Botón para realizar la venta -->
                            <button type="button" class="btn btn-success" id="realizarVenta">Realizar Venta</button>

                            <?php echo form_close(); ?>
                        </div>
                        <!-- /.card-body -->
<script>
    $(document).ready(function() {
        // Arreglo para almacenar los productos agregados
        var productos = [];

        // Manejar el clic en el botón "Agregar Producto"
        $("#agregarProducto").click(function() {
            var producto = $("#producto").val();
            var ropa = $("#ropa").val();
            var precio = parseFloat($("#precio").val());
            var cantidad = parseInt($("#cantidad").val());
            var talla = $("#talla").val();
            var subtotal = precio * cantidad;

            // Agregar el producto a la tabla
            $("#tablaProductos tbody").append(`
                <tr>
                    <td>${producto}</td>
                    <td>${ropa}</td>
                    <td>${precio.toFixed(2)}</td>
                    <td>${talla}</td>
                    <td>${cantidad}</td>
                    <td>${subtotal.toFixed(2)}</td>
                </tr>
            `);

            // Agregar el producto al arreglo de productos
            productos.push({
                producto: producto,
                ropa: ropa,
                precio: precio,
                talla: talla,
                cantidad: cantidad,
                subtotal: subtotal
            });

            // Limpiar los campos
            $("#producto").val("");
            $("#ropa").val("");
            $("#precio").val("");
            $("#talla").val("");
            $("#cantidad").val("");
        });

        // Manejar el clic en el botón "Realizar Venta"
        $("#realizarVenta").click(function() {
            // Obtener el valor de la sucursal
            var sucursal = $("#sucursal").val();

            // Validar que se haya seleccionado una sucursal
            if (sucursal === "") {
                alert("Selecciona una sucursal antes de realizar la venta.");
                return;
            }

            // Enviar los productos al controlador para procesar la venta
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/fraterno/realizarventa", // Reemplaza con la URL correcta
                type: "POST",
                data: { productos: productos, sucursal: sucursal },
                success: function(response) {
                    // Manejar la respuesta del servidor, por ejemplo, mostrar un mensaje de confirmación
                    alert("Venta realizada con éxito.");
                }
            });
        });
    });
</script>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


        