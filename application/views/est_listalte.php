<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de fraterno</h1>
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
    <section class="content">
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
                <br>
                <a href="<?php echo base_url();?>index.php/fraterno/agregar">
                    <button type="button" class="btn btn-primary">CREAR FRATERNO</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/fraterno/deshabilitados">
                  <button type="button" class="btn btn-primary">LISTA DESHABILITADOS</button>
                </a>
                <a href="<?php echo base_url(); ?>index.php/usuario/logout">
                  <button type="button" class="btn btn-warning">CERRAR SESION</button>
                </a>
                </div>
                <div>
                <a href="<?php echo base_url();?>index.php/estdudiantelistaxls2" target="blank">
                <button type="submit" class="btn btn-success">EXCEL</button>        
                </a>
                </div>
            <br>




            <h3 class="card-title"> LISTA DE FRATERNOS </h3>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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

                                    <button type="submit" class="btn btn-primary">modificar</button>
                                <?php
                                    echo form_close()
                                ?> 
                          </td>
                          <td>
                                <?php
                                    echo form_open_multipart('fraterno/deshabilitarbd');
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