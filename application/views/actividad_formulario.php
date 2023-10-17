<!-- Page Sidebar -->
<div class="page-inner">
                <div class="checkout">        
                </div>
                <div class="page-title">
                    <h3>AGREGAR ACTIVIDAD NUEVA</h3>
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
                    echo form_open_multipart('fraterno/agregaractividaddb') 
                ?> 
                    <input type="text" name="nombre" id="" placeholder="Escriba la actividad" class="form-control">
                    <br>
                    <input type="date" name="fecha" id="" placeholder="Escriba la fecha" class="form-control">
                    <br>
                    <input type="text" name="lugar" id="" placeholder="Escriba el lugar del evento" class="form-control">
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
                           
                        </div>
                        <!-- /.card-body -->