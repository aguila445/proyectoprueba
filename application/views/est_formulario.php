<!-- Page Sidebar -->
<div class="page-inner">
                <div class="checkout">        
                </div>
                <div class="page-title">
                    <h3>AGREGAR FRATERNO NUEVO</h3>
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
                    echo form_open_multipart('fraterno/agregardb')
                ?>
                  
                    <div>
                      <br>
                    <input type="text" name="nombre" id="" placeholder="Escriba el nombre" class="form-control">
                  <BR>  
                  </div>
                   <div>
                   <input type="text" name="primerApellido" id="" placeholder="Escriba primer apellido" class="form-control">
                  <BR> 
                  </div>
                   <div>
                   <input type="text" name="segundoApellido" id="" placeholder="Escriba segundo apellido" class="form-control">
                  <BR> 
                  </div> 
                   <div>
                   <input type="text" name="nota" id="" placeholder="Escriba si el fraterno 'debe' o 'no debe'" class="form-control">
                   </div>
                   <DIV >
                   <br>
                    <button type="submit" class="btn btn-primary">AGREGAR</button>
                   </DIV> 
                   
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