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
                <div>
                <a href="<?php echo base_url(); ?>index.php/venta/pedido" style="float: right;">
                <button type="button" class="btn btn-primary">Solicitar pedido</button>
                </a>
                </div>
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