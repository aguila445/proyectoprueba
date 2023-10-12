<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>ACTIVIDADES</h3>
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
                <a href="<?php echo base_url(); ?>index.php/fraterno/productos">
                  <button type="button" class="btn btn-primary">LISTA PRODUCTOS</button>
                </a>
</div>
                <div>
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/venta">
                  <button type="button" class="btn btn-primary">REALIZAR VENTA</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/actividades">
                  <button type="button" class="btn btn-primary">VER ACTIVIDAD</button>
                </a>
            </DIV>
            <DIV>
                <br>
                <a href="<?php echo base_url(); ?>index.php/fraterno/indexlte">
                    <button type="button" class="btn btn-warning">IR HOME</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/usuario/logout">
                  <button type="button" class="btn btn-warning">CERRAR SESION</button>
                </a>
                </div>
                <div>
                  <br>
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">REPORTE EXCEL</button>        
                </a>
                </div>
            <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">LISTA DE ACTIVIDADES</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                              <th>n°</th> 
                                              <th>actividad</th>
                                              <th>fecha</th>
                                              <th>lugar </th>
                                              <th>Modificar</th>
                                              <th>Deshabilitar</th>
                                              <th>Eliminar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                    $indice=1;//CONTADOR CORRELATIVO
                        foreach($actividad->result()as $row)
                        { 
                            //Debe coincidir los nombres de la tabla en la BD
                            //El id nunca debe mostrarse  
                    ?>
                        <tr>
                          <td><?php echo $indice;?></td>
                          <td><?php echo $row->nombre;?></td>
                          <td><?php echo $row->fecha;?></td>
                          <td><?php echo $row->lugar;?></td>                       
                         

                         <!-- <td> <!?php echo formatearFecha($row->creado);?></td> -->
                            <td>
                                <?php
                                    echo form_open_multipart('fraterno/modificaractividad')
                                ?>
                                    <input type="hidden" name="idActividad" value="<?php echo $row->idActividad;?>">
                                    <!--Se ocupa el rol hidden para ocultar los id en la página-->

                                    <button type="submit" class="btn btn-primary">modificar</button>
                                <?php
                                    echo form_close()
                                ?> 
                          </td>
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/deshabilitaractividaddb');
                                ?>
                                  <input type="hidden" name="idActividad" value="<?php echo $row->idActividad; ?>">
                                  <button type="submit" class="btn btn-warning">deshabilitar</button>        
                                <?php
                                    echo form_close();
                                ?>  
                                      
                          </td>
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/eliminaractividaddb')
                                ?>
                                    <input type="hidden" name="idActividad" value="<?php echo $row->idActividad;?>">
                                    <!--Se ocupa el rol hidden para ocultar los id en la página-->
                                    <button type="submit" class="btn btn-danger">eliminar</button>
                                <?php
                                    echo form_close()
                                ?> 
                          </td>

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
 
 </div><!-- Row -->
  