<!-- Page Sidebar -->
<div class="page-inner">
                <div class="checkout">        
                </div>
                <div class="page-title">
                    <h3>AGREGAR PRODUCTO NUEVO</h3>
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
                    echo form_open_multipart('fraterno/agregarproductodb') 
                ?> 
                    <input type="text" name="nombreProducto" id="" placeholder="Escriba el nombre del producto" class="form-control">
                    <br>
                    <input type="text" name="precio" id="" placeholder="Escriba precio del producto" class="form-control">
                    <br>
                    <input type="text" name="talla" id="" placeholder="Escoja la talla" class="form-control">
                    <br>
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
                           
                        </div>
                        <!-- /.card-body -->