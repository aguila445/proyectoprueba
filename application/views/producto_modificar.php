<!-- Page Sidebar -->
<div class="page-inner">
                <div class="checkout">        
                </div>
                <div class="page-title">
                    <h3>MODIFICAR PRODUCTO</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Extra</a></li>
                            <li class="active">Shop</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
           
                
              <!-- /.card-header -->
              <div class="card-body">
    <?php
    echo form_open_multipart('fraterno/modificarproductodb') 
    ?> 
    <div class="form-group">
        <label for="nombreProducto">Nombre del Producto:</label>
        <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Escriba el nombre del producto" class="form-control">
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" placeholder="Escriba precio del producto" class="form-control">
    </div>
    <div class="form-group">
        <label for="talla">Talla:</label>
        <input type="text" name="talla" id="talla" placeholder="Escoja la talla" class="form-control">
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad del producto" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">MODIFICAR</button>
    <?php
    echo form_close()
    ?>
</div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
                           
                        </div>
                        <!-- /.card-body -->