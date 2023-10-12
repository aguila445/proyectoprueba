<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LISTA DE PRODUCTOS</h1>
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
                <h3 class="card-title">FORMULARIO DE MODIFICACION PRODUCTO</h3>
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexlte">
                    <button type="button" class="btn btn-warning">IR HOME</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- /todo depues del body -->
                <?php
                foreach($infProducto->result()as $row)
                {
                    echo form_open_multipart('fraterno/modificarproductodb')
                ?>
                    <div>
                    <button type="submit" class="btn btn-primary">modificar</button>
                    </div>
                    <input type="hidden" name="idFraterno" id=""class="form-control" value="<?php echo $row->idFraterno;?>">
                    <input type="text" name="nombreProducto" id="" placeholder="Escriba el nombre nuevo" class="form-control" value="<?php echo $row->nombreProducto;?>">
                    <input type="text" name="precio" id="" placeholder="Escriba el nuevo precio" class="form-control" value="<?php echo $row->precio;?>">
                    <input type="text" name="talla" id="" placeholder="Escriba la talla nueva" class="form-control" value="<?php echo $row->talla;?>">
                    <input type="text" name="cantidad" id="" placeholder="Escriba la cantidad nueva" class="form-control" value="<?php echo $row->cantidad;?>">
                <?php
                  echo form_close();
                }
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