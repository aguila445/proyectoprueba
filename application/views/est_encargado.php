<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>PRINCIPAL DEL ENCARGADO</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Responsive Tables</li>
                        </ol>
                    </div>
                </div>
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
            </DIV>   
            <DIV> 
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexadm">
                  <button type="button" class="btn btn-primary">LISTA DE FRATERNOS</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/actividades">
                  <button type="button" class="btn btn-primary">LISTA ACTIVIDADES</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/productos">
                  <button type="button" class="btn btn-primary">LISTA PRODUCTOS</button>
                </a>
                <br>
            </div>
            
            <div>
                <BR>
                <a href="<?php echo base_url(); ?>index.php/venta/ventas">
                  <button type="button" class="btn btn-primary">LISTA DE VENTAS</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/actividades">
                  <button type="button" class="btn btn-primary">VER ACTIVIDADES</button>
                </a>
            </DIV>
                <div>
                <br>
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">REPORTE EXCEL</button>        
                </a>
                </div>
              
            <br>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            </div>  
                        </div>
                     </div>
                </div>
                       
        <!-- Row -->
          