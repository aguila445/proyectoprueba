<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>PRODUCTOS</h3>
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
                <a href="<?php echo base_url();?>index.php/fraterno/agregarproducto">
                    <button type="button" class="btn btn-primary">CREAR PRODUCTO</button>
                </a>
                </DIV>   
                <DIV> 
                <a href="<?php echo base_url(); ?>index.php/fraterno/deshabilitados">
                  <button type="button" class="btn btn-secondary">ver productos deshabilitados</button>
                </a>
                </DIV>
         <!--    <div>
                  <br>
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">REPORTE EXCEL</button>        
                </a>
            </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">LISTA DE PRODUCTOS</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                              <th>n°</th> 
                                              <th>producto</th>
                                              <th>precio </th>
                                              <th>talla</th>
                                              <th>cantidad</th>
                                              <th>Modificar</th>
                                              <th>Deshabilitar</th>
                                              <th>Eliminar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                    $indice=1;//CONTADOR CORRELATIVO
                        foreach($producto->result()as $row)
                        { 
                            //Debe coincidir los nombres de la tabla en la BD
                            //El id nunca debe mostrarse  
                    ?>
                        <tr>
                          <td><?php echo $indice;?></td>
                          <td><?php echo $row->nombreProducto;?></td>
                          <td><?php echo $row->precio;?></td>
                          <td><?php echo $row->talla;?></td>
                          <td><?php echo $row->cantidad;?></td>
                         
                        <!-- <td> <!?php echo formatearFecha($row->creado);?></td> -->
                            <td>
                                <?php
                                    echo form_open_multipart('fraterno/modificarproducto')
                                ?>
                                    <input type="hidden" name="idProducto" value="<?php echo $row->idProducto;?>">
                                    <!--Se ocupa el rol hidden para ocultar los id en la página-->

                                    <button type="submit" class="btn btn-success">modificar</button>
                                <?php
                                    echo form_close()
                                ?> 
                          </td>
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/deshabilitarproductodb');
                                ?>
                                  <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
                                  <button type="submit" class="btn btn-warning">deshabilitar</button>        
                                <?php
                                    echo form_close();
                                ?>  
                                      
                          </td>
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/eliminarproductodb')
                                ?>
                                    <input type="hidden" name="idProducto" value="<?php echo $row->idProducto;?>">
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
    </div><!-- Row -->
</div><!-- Main Wrapper -->