<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">HOME</a></li>
              <li class="breadcrumb-item active">TABLA PRINCIPAL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
              <h4>
              login:<?php echo $this->session->userdata('login');?><br>
            <!--  id:<?php echo $this->session->userdata('idUsuario');?><br>-->
              rol:<?php echo $this->session->userdata('rol');?><br>
            </h4>
            <DIV>
                <br>
                <a href="<?php echo base_url();?>index.php/fraterno/agregar">
                    <button type="button" class="btn btn-primary">CREAR FRATERNO</button>
                </a>
                <a href="<?php echo base_url();?>index.php/fraterno/agregaractividad">
                    <button type="button" class="btn btn-primary">CREAR ACTIVIDAD</button>
                </a>
                <a href="<?php echo base_url();?>index.php/fraterno/agregarproducto">
                    <button type="button" class="btn btn-primary">CREAR PRODUCTO</button>
                </a>
            </DIV>   
            <DIV> 
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexadm">
                  <button type="button" class="btn btn-primary">LISTA DE FRATERNOS</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/deshabilitados">
                  <button type="button" class="btn btn-primary">LISTA DESHABILITADOS</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/actividades">
                  <button type="button" class="btn btn-primary">LISTA ACTIVIDADES</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/productos">
                  <button type="button" class="btn btn-primary">LISTA PRODUCTOS</button>
                </a>

            </DIV>
            <div>
                <BR>
                <a href="<?php echo base_url(); ?>index.php/fraterno/venta">
                  <button type="button" class="btn btn-primary">REALIZAR VENTA</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/actividades">
                  <button type="button" class="btn btn-primary">VER ACTIVIDAD</button>
                </a>
            </DIV>
          
                <br>
                <a href="<?php echo base_url(); ?>index.php/usuario/logout">
                  <button type="button" class="btn btn-warning">CERRAR SESION</button>
                </a>
                </div>
                <div>
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">REPORTE EXCEL</button>        
                </a>
                </div>
                </div>
            <br>




           
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