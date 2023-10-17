  <!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>LISTA DE VENTAS</h3>
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
                <a href="<?php echo base_url(); ?>index.php/venta/venta">
                  <button type="button" class="btn btn-primary">REALIZAR VENTA</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/venta/ventas">
                  <button type="button" class="btn btn-primary">LISTA DE VENTAS</button>
                </a>
            
            </DIV>
                <div>
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
              
            <br>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                    <h4 class="panel-title">LISTA DE VENTAS</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                              <th>n°</th> 
                                              <th>id del cliente</th>
                                              <th>id del producto</th>
                                              <th>id del sucursal</th>
                                              <th>id del fraterno</th>
                                              <th>id actividad</th>
                                              <th>cantidad de producto</th>
                                              <td>adelanto de pago</td>
                                              <th>total de venta</th>
                                              <th>saldo a pagar</th>
                                              <th>ciudad</th>
                                              <th>estado</th>
                                              <th>fecha de registro</th>
                                              <th>ultima actualizacion</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                            <?php
                    $indice=1;//CONTADOR CORRELATIVO
                        foreach($ventas->result()as $row)
                        { 
                            //Debe coincidir los nombres de la tabla en la BD
                            //El id nunca debe mostrarse  
                         ?>
                        <tr>
                          <td><?php echo $indice;?></td>
                          <td><?php echo $row->idCliente;?></td>
                          <td><?php echo $row->idProducto;?></td>
                          <td><?php echo $row->idSucursal;?></td>
                          <td><?php echo $row->idFraterno;?></td>
                          <td><?php echo $row->idActividad;?></td>
                          <td><?php echo $row->cantidad;?></td>
                          <td><?php echo $row->adelanto;?></td>
                          <td><?php echo $row->total;?></td>
                          <td><?php echo $row->saldo;?></td>
                          <td><?php echo $row->ciudad;?></td>
                          <td><?php echo $row->estado;?></td>
                          <td><?php echo $row->fechaRegistro;?></td>
                          <td><?php echo $row->fechaActualizacion;?></td>

                        </tr>
                    <?php
                    $indice++;
                    }
                    ?>
                      </tbody>
                        </div>
                     </div>
                            </div>  
                        </div>
                     </div>
                </div>
                       
        </div><!-- Row -->