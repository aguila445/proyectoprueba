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

                </DIV>   
            
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
                                              <th> </th>
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
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/inscribir')
                                ?>
                                    <input type="hidden" name="idActividad" value="<?php echo $row->idActividad;?>">
                                    <!--Se ocupa el rol hidden para ocultar los id en la página-->

                                    <button type="submit" class="btn btn-success">inscribirse</button>
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
  