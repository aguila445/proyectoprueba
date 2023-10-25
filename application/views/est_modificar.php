<!-- Page Sidebar -->
<div class="page-inner">
                <div class="checkout">        
                </div>
                <div class="page-title">
                    <h3>MODIFICAR FRATERNO</h3>
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
                foreach($infFraterno->result()as $row)
                {
                    echo form_open_multipart('fraterno/modificardb')
                ?>
                      <div class="mb-3">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Escriba el nombre" class="form-control">
</div>

<div class="mb-3">
    <label for="primerApellido">Primer Apellido:</label>
    <input type="text" name="primerApellido" id="primerApellido" placeholder="Escriba primer apellido" class="form-control">
</div>

<div class="mb-3">
    <label for="segundoApellido">Segundo Apellido:</label>
    <input type="text" name="segundoApellido" id="segundoApellido" placeholder="Escriba segundo apellido" class="form-control">
</div>

<div class="mb-3">
    <div class="d-inline-block col-md-6">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Escriba el email" class="form-control">
    </div>

    <div class="d-inline-block col-md-6">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" placeholder="Escriba el teléfono" class="form-control">
    </div>
</div>

<div class="mb-3">
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" placeholder="Escriba la dirección" class="form-control">
</div>

<div class="mb-3 col-md-6">
    <label for="nota">Nota:</label>
    <input type="text" name="nota" id="nota" placeholder="Escriba si el fraterno 'debe' o 'no debe'" class="form-control">
</div>
<div class="mb-3">
  <br>
    <button type="submit" class="btn btn-primary">Modificar</button>
</div>

                <?php
                  echo form_close();
                }
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
                           
                        </div>
                        <!-- /.card-body -->