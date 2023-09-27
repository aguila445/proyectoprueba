<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de fraterno</h1>
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
                <h3 class="card-title"> Crear fraterno </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                    echo form_open_multipart('fraterno/agregardb')
                ?>
                    <input type="text" name="nombre" id="" placeholder="Escriba el nombre" class="form-control">
                    <input type="text" name="apellido1" id="" placeholder="Escriba primer apellido" class="form-control">
                    <input type="text" name="apellido2" id="" placeholder="Escriba segundo apellido" class="form-control">
                    <input type="text" name="nota" id="" placeholder="Escriba el numero de movil" class="form-control">
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