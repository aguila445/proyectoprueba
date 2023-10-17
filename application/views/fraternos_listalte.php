<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>FRATERNOS</h3>
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
                    <button type="button" class="btn btn-primary">CREAR FRATERNO</button>
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
                                    <h4 class="panel-title">LISTA DE FRATERNOS</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                              <th>n°</th> 
                                              <th>nombre</th>
                                              <th>primer ap.</th>
                                              <th>segundo ap. </th>
                                              <th>nota</th>
                                              <th>foto</th>
                                              <th>Modificar</th>
                                              <th>Deshabilitar</th>
                                              <th>Eliminar</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                            <?php
                    $indice=1;//CONTADOR CORRELATIVO
                        foreach($fraterno->result()as $row)
                        { 
                            //Debe coincidir los nombres de la tabla en la BD
                            //El id nunca debe mostrarse  
                         ?>
                        <tr>
                          <td><?php echo $indice;?></td>
                          <td><?php echo $row->nombre;?></td>
                          <td><?php echo $row->primerApellido;?></td>
                          <td><?php echo $row->segundoApellido;?></td>
                          <td><?php echo $row->nota;?></td>
     
                          <!--Se ocupa subir fotos-->
                            <td>
                                    <?php
                                    $foto = $row->foto;
                                    if ($foto == "") {
                                    ?>
                                        <img width="50" src="<?php echo base_url(); ?>uploads/fraternos/mod.png">
                                    <?php
                                    } else {
                                    ?>
                                        <img width="50" src="<?php echo base_url(); ?>uploads/fraternos/<?php echo $foto; ?>">
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    echo form_open_multipart('fraterno/subirfoto');
                                    ?>
                                    <input type="hidden" name="idFraterno" value="<?php echo $row->idFraterno; ?>">
                                    <button type="submit" class="btn btn-warning">
                                        Subir
                                    </button>
                                    <?php
                                    echo form_close();
                                    ?>
                            </td>
                                <!--final para fotos-->

                         <!-- <td> <!?php echo formatearFecha($row->creado);?></td> -->
                            <td>
                                <?php
                                    echo form_open_multipart('fraterno/modificar')
                                ?>
                                    <input type="hidden" name="idFraterno" value="<?php echo $row->idFraterno;?>">
                                    <!--Se ocupa el rol hidden para ocultar los id en la página-->

                                    <button type="submit" class="btn btn-success">modificar</button>
                                <?php
                                    echo form_close()
                                ?> 
                            </td>
                            <td>
                                <?php
                                    echo form_open_multipart('fraterno/deshabilitardb');
                                ?>
                                  <input type="hidden" name="idFraterno" value="<?php echo $row->idFraterno; ?>">
                                  <button type="submit" class="btn btn-warning">deshabilitar</button>        
                                <?php
                                    echo form_close();
                                ?>             
                            </td>
                            <td>
                                <?php
                                    echo form_open_multipart('fraterno/eliminardb')
                                ?>
                                    <input type="hidden" name="idFraterno" value="<?php echo $row->idFraterno;?>">
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
          