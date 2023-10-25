<!-- Content Wrapper. Contains page content -->
<div class="page-inner">
                <div class="page-title">
                    <h3>PRINCIPAL</h3>
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
               
            </div>
            <div>
              <a href="<?php echo base_url();?>index.php/venta/reportes" >
              <button type="submit" class="btn btn-success">REPORTES</button>        
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
                       
        
          