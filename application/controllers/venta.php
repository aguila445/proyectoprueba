<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Carga el modelo de ventas
        $this->load->model('venta_model');
    }
    public function ventas()
    {
        $lista=$this->venta_model->listaventas();
        $data['ventas']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
        $this->load->view('venta_listalte',$data);
        $this ->load->view('inclte/pie');
        
    }

    public function ventaformulario() {
        // Carga la vista formulario_venta.php
        $this->load->view('venta_formulario');
    }
    public function venta()
	{
        $lista=$this->fraterno_model->realizarventa();
        $data['fraterno']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('venta_formulario copy',$data);
        $this ->load->view('inclte/pie');
		
	}

    public function procesarventa() {
        // Obtiene los datos del formulario
        $producto = $this->input->post('producto');
        $ropa = $this->input->post('ropa');
        $precio = $this->input->post('precio');
        $cantidad = $this->input->post('cantidad');
        $talla = $this->input->post('talla');
        $sucursal = $this->input->post('sucursal');

        // Calcula el total
        $total = $precio * $cantidad;

        // Almacena los datos en un arreglo
        $venta_data = array(
            'producto' => $producto,
            'ropa' => $ropa,
            'precio' => $precio,
            'cantidad' => $cantidad,
            'talla' => $talla,
            'total' => $total,
            'sucursal' => $sucursal
        );

        // Llama al modelo para agregar la venta a la base de datos
        $this->venta_model->agregarventa($venta_data);

        // Puedes realizar otras acciones aquí, como generar un recibo o enviar un correo electrónico al cliente.

        // Redirecciona a la página de confirmación o a donde desees
        redirect('venta/confirmacionventa');
    }

    public function confirmacionventa() {
        // Carga la vista de confirmación
        $this->load->view('confirmacionventa');
    }
    
}
