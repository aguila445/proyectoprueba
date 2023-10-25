<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>USUARIOS</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Responsive Tables</li>
                        </ol>
                    </div>
                </div>
    <div id="main-wrapper">
                <DIV>
                <a href="<?php echo base_url();?>index.php/fraterno/agregar">
                    <button type="button" class="btn btn-primary">CREAR USUARIO</button>
                </a>
                </DIV>   
                <DIV> 
                    <a href="<?php echo base_url(); ?>index.php/fraterno/deshabilitados">
                    <button type="button" class="btn btn-secondary">ver a los deshabilitados</button>
                    </a>  
                </DIV>
           
            <!--
          <DIV>
                <br>
                <a href="<?php echo base_url(); ?>index.php/usuario/logout">
                  <button type="button" class="btn btn-warning">CERRAR SESION</button>
                </a>
               
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">REPORTE EXCEL</button>        
                </a> 
                </div> -->
              
            <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">LISTA DE USUARIOS</h4>
                                </div>
                                <div class="panel-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Actualización</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $indice = 1; // CONTADOR CORRELATIVO
                foreach ($usuario->result() as $row) {
                ?>
                    <tr>
                        <td><?php echo $row->idUsuario; ?></td>
                        <td><?php echo $row->login; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->rol; ?></td>
                        <td><?php echo $row->estado; ?></td>
                        <td><?php echo $row->fechaRegistro; ?></td>
                        <td><?php echo $row->fechaActualizacion; ?></td>
                    </tr>
                <?php
                    $indice++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

                </div>
            </div>
          </div>
       </div>         
</div><!-- Row -->
          