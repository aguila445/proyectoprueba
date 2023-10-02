<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>LISTA DE FRATERNOS</h1>
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
                <h3 class="card-title"> MODIFICAR ACTIVIDAD</h3>
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexlte">
                    <button type="button" class="btn btn-warning">IR HOME</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- /todo depues del body -->
                <?php
                foreach($infActividad->result()as $row)
                {
                    echo form_open_multipart('fraterno/modificaractividaddb')
                ?>
                    <div>
                    <button type="submit" class="btn btn-primary">modificar</button>
                    </div>
                    <input type="hidden" name="idActividad" id=""class="form-control" value="<?php echo $row->idActividad;?>">
                    <input type="text" name="nombre" id="" placeholder="Escriba la actividad" class="form-control" value="<?php echo $row->nombre;?>">
                    <input type="date" name="fecha" id="" placeholder="Escriba fecha" class="form-control" value="<?php echo $row->fecha;?>">
                    <input type="text" name="lugar" id="" placeholder="Escriba el lugar" class="form-control" value="<?php echo $row->lugar;?>">
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