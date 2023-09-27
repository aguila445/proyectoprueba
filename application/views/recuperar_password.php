<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>formulario de recuperacion de contraseña</h1>
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
                <h3 class="card-title">  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    <h1>Recuperar Contraseña</h1>

    <?php echo form_open('usuario/enviar_recuperacion'); ?>

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" placeholder="Escriba el correo electrónico" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar Correo de Recuperación</button>
    </div>

    <?php echo form_close(); ?>

    <p><a href="<?php echo site_url('usuario/index'); ?>">Volver al Inicio de Sesión</a></p>
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