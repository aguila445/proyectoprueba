<!-- Content Wrapper. Contains page content -->
<!-- Page Sidebar -->
            <div class="page-inner">
                <div class="checkout">
                    <a class="checkout__button" href="#">
                        <span class="checkout__text">
                            <svg class="checkout__icon" width="89px" height="89px" viewBox="0 0 35 35">
                                <path fill="#fff" d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
                            </svg>
                        </span>
                    </a>
                    <div class="checkout__order">
                        <div class="checkout__order-inner">
                           <!-- <table class="checkout__summary"> -->
                               <!-- Agrega esta tabla en tu vista 'formulario_venta.php' -->
                            <table id="tabla-productos" class="checkout__summary">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Ropa</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                   
                                </tbody>
                            </table>

                            <a href="<?php echo base_url();?>adminlte/javascript:void(0);" class="btn btn-default checkout__cancel">Continuar compra</a>
                            <a href="<?php echo base_url();?>adminlte/javascript:void(0);" class="btn btn-success">Comprar</a>
                            <a href="<?php echo base_url();?>adminlte/javascript:void(0);" class="checkout__close checkout__cancel"><i class="icon fa fa-times"></i>Cerrar</a>
                        </div>
                    </div>
                </div>
                <div class="page-title">
                    <h3>Shop</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Extra</a></li>
                            <li class="active">Shop</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="cd-gallery">
                                <li>
                                    <span class="cd-sale bg-success"></span>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                        <li class="selected">
        <button class="move-left-button"><i class="fa fa-chevron-left"></i></button>
        <img src="<?php echo base_url();?>adminlte/assets/images/shop/somujer.jpg" alt="Preview image" width="20%">
        <button class="move-right-button"><i class="fa fa-chevron-right"></i></button>
        <br>
        <em class="cd-talla">talla 3</em>
        <em class="cd-price">bs. 40</em>
    </li>
                                            <li class="move-right" data-sale="true" data-price="$22">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/somujer.jpg"  alt="Preview image" width="20%">
                                                <br>
                                                <em class="cd-talla">talla 4</em>
                                                <em class="cd-price">bs. 50</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/somujer.jpg"  alt="Preview image" width="20%">
                                                <br>
                                                <em class="cd-talla">talla 5</em>
                                                <em class="cd-price">bs. 50</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Sombrero de mujer</a></b>
                                        <em class="cd-price">bs. 50</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="cd-sale bg-success"></span>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatomu.jpg" width="20%" ="Preview image">
                                                
                                                <em class="cd-talla">talla 35</em>
                                                <em class="cd-price">bs. 150</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatomu.jpg" width="20%" ="Preview image">
                                                <em class="cd-talla">talla 36</em>
                                                <em class="cd-price">bs. 180</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatomu.jpg" width="20%" ="Preview image">
                                                <em class="cd-talla">talla 37</em>
                                                <em class="cd-price">bs. 200</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatomu.jpg" width="20%" ="Preview image">
                                                <em class="cd-talla">talla 38</em>
                                                <em class="cd-price">bs. 200</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">>Zapato de mujer</a></b>
                                        <em class="cd-price">bs. 200</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/pollera.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla P</em>
                                                <em class="cd-price">bs. 250</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/pollera.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 300</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/pollera.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 300</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/pollera.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla L</em>
                                                <em class="cd-price">bs. 350</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/pollera.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 350</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Pollera</a></b>
                                        <em class="cd-price">bs.250</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en commpra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/juste.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla P</em>
                                                <em class="cd-price">bs. 50</em>
                                            </li>
                                            <li class="move-right" data-sale="true" data-price="$22">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/juste.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 50</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/juste.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/juste.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla L</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/juste.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 100</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Juste</a></b>
                                        <em class="cd-price">bs.50</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/centro.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla P</em>
                                                <em class="cd-price">bs. 40</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/centro.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 50</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/centro.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 70</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/centro.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla L</em>
                                                <em class="cd-price">bs. 70</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/centro.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Centro</a></b>
                                        <em class="cd-price">bs.30</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla 75</em>
                                                <em class="cd-price">bs. 70</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla 80</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla 85</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                        </ul>
                                        <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla 90</em>
                                                <em class="cd-price">bs. 80</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla 100</em>
                                                <em class="cd-price">bs. 100</em>
                                            </li>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Faja de mujer</a></b>
                                        <em class="cd-price">bs.40</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="cd-sale bg-danger"></span>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/camisa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla P</em>
                                                <em class="cd-price">bs. 100</em>
                                            </li>
                                            <li class="move-right" data-sale="true" data-price="$22">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/camisa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 130</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/camisa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 150</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla L</em>
                                                <em class="cd-price">bs. 180</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajamu.jpg" width="18%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 180</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Camisa</a></b>
                                        <em class="cd-price">bs.170</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatova.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla 39</em>
                                                <em class="cd-price">bs. 240</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatova.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla 40</em>
                                                <em class="cd-price">bs. 250</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/zapatova.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla 42</em>
                                                <em class="cd-price">bs. 250</em>
                                            </li>

                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Zapato de varon</a></b>
                                        <em class="cd-price">bs.250</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajava.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 100</em>
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajava.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 100</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/fajava.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 120</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Faja varon</a></b>
                                        <em class="cd-price">bs.120</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/blusa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla P</em>
                                                <em class="cd-price">bs. 150</em>
                                            </li>
                                            <li class="move-right" data-sale="true" data-price="$22">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/blusa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla S</em>
                                                <em class="cd-price">bs. 150</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/blusa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla M</em>
                                                <em class="cd-price">bs. 200</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/blusa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla L</em>
                                                <em class="cd-price">bs. 200</em>
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/blusa.jpg" width="20%" alt="Preview image">
                                                <em class="cd-talla">talla XL</em>
                                                <em class="cd-price">bs. 250</em>
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">blusa</a></b>
                                        <em class="cd-price">bs.200</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Incluir en compra</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Detalles</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/ugmonk-cap-1.jpg" alt="Preview image">
                                            </li>
                                            <li class="move-right">
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/ugmonk-cap-2.jpg" alt="Preview image">
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url();?>adminlte/assets/images/shop/ugmonk-cap-3.jpg" alt="Preview image">
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Baseball Cap</a></b>
                                        <em class="cd-price">$42</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Details</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <ul class="cd-item-wrapper">
                                            <li class="selected">
                                                <img src="assets/images/shop/ugmonk-bag-1.jpg" alt="Preview image">
                                            </li>
                                            <li class="move-right">
                                                <img src="assets/images/shop/ugmonk-bag-2.jpg" alt="Preview image">
                                            </li>
                                            <li>
                                                <img src="assets/images/shop/ugmonk-bag-3.jpg" alt="Preview image">
                                            </li>
                                        </ul>
                                    </a>
                                    <div class="cd-item-info">
                                        <b><a href="#0">Messenger Bag</a></b>
                                        <em class="cd-price">$235</em>
                                    </div>
                                    <div class="cd-item-details">
                                        <a href="#" class="pull-left add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Details</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Row -->
<!-- Agrega este código JavaScript en tu vista 'formulario_venta.php' -->
<script>
    $(document).ready(function() {
        var totalVenta = 0; // Inicializa el total de la venta

        // Función para agregar un producto a la tabla
        function agregarProducto(producto, ropa, precio, cantidad) {
            var subtotal = precio * cantidad;
            totalVenta += subtotal;

            // Crea una nueva fila en la tabla
            var newRow = $("<tr>");
            var cols = "";
            cols += "<td>" + producto + "</td>";
            cols += "<td>" + ropa + "</td>";
            cols += "<td>" + precio + "</td>";
            cols += "<td>" + cantidad + "</td>";
            cols += "<td>" + subtotal + "</td>";
            cols += "<td><button class='btn btn-danger btn-sm eliminar-producto'>Eliminar</button></td>";
            newRow.append(cols);

            // Agrega la fila a la tabla
            $("#tabla-productos tbody").append(newRow);
        }

        // Evento para agregar un producto al hacer clic en "Continuar Compra"
        $("#continuar-compra").click(function(e) {
            e.preventDefault();
            var producto = $("#producto").val();
            var ropa = $("#ropa").val();
            var precio = parseFloat($("#precio").val());
            var cantidad = parseInt($("#cantidad").val());

            agregarProducto(producto, ropa, precio, cantidad);

            // Actualiza el total de la venta en la vista
            $("#total-venta").text(totalVenta);

            // Limpia los campos del formulario de producto
            $("#producto").val("");
            $("#ropa").val("");
            $("#precio").val("");
            $("#cantidad").val("");
        });

        // Evento para eliminar un producto
        $("#tabla-productos").on("click", ".eliminar-producto", function() {
            var row = $(this).closest("tr");
            var subtotal = parseFloat(row.find("td:eq(4)").text());
            totalVenta -= subtotal;
            row.remove();

            // Actualiza el total de la venta en la vista
            $("#total-venta").text(totalVenta);
        });
    });
</script>
<script>
  // Obtén una lista de todos los elementos con la clase "cd-item-wrapper"
  var itemWrappers = document.querySelectorAll('.cd-item-wrapper');

  // Itera a través de los elementos y agrega un evento clic a cada uno
  itemWrappers.forEach(function (itemWrapper) {
    // Encuentra el elemento de detalles dentro de este elemento
    var detailsButton = itemWrapper.querySelector('.details');

    // Agrega un manejador de eventos clic al botón de detalles
    detailsButton.addEventListener('click', function (event) {
      // Evita el comportamiento predeterminado del enlace
      event.preventDefault();

      // Encuentra el elemento de detalles de este artículo
      var itemDetails = itemWrapper.querySelector('.cd-item-details');

      // Alterna la clase "active" en el elemento de detalles para mostrar/ocultar el menú desplegable
      itemDetails.classList.toggle('active');
    });
  });
</script>
