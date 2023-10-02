<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULARIO DE PRODUCTO</h1>
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
                <h3 class="card-title"> FORMULARIO DE CREACION DE PRODUCTO </h3>
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexlte">
                    <button type="button" class="btn btn-warning">IR HOME</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                    echo form_open_multipart('fraterno/agregarproductodb') 
                ?> /
                    <input type="text" name="nombreProducto" id="" placeholder="Escriba el nombre del producto" class="form-control">
                    <input type="text" name="ropa" id="" placeholder="Tipo de ropa(si corresponde)" class="form-control">
                    <input type="text" name="precio" id="" placeholder="Escriba precio del producto" class="form-control">
                    <input type="text" name="talla" id="" placeholder="Escoja la talla" class="form-control">
                    <input type="text" name="cantidad" id="" placeholder="Ingrese la cantidad del producto" class="form-control">
                    
                    <br>
                    <button type="submit" class="btn btn-primary">AGREGAR</button>
                <?php
                echo form_close()
                ?>
                <?php    
                // </form>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->