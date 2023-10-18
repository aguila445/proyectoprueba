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
        $lista=$this->venta_model->realizarventa();
        $data['fraterno']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('venta_formulario',$data);
        $this ->load->view('inclte/pie');
		
	}
    public function pedido()
	{
        $lista=$this->venta_model->realizarventa();
        $data['fraterno']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral_fraterno');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('pedido_formulario',$data);
        $this ->load->view('inclte/pie');
		
	}

    public function procesarventa() {
        // Obtiene los datos del formulario
        $nombreProducto = $this->input->post('nombreProducto');
        $precio = $this->input->post('precio');
        $cantidad = $this->input->post('cantidad');
        $talla = $this->input->post('talla');

        // Calcula el total
        $total = $precio * $cantidad;

        // Almacena los datos en un arreglo
        $venta_data = array(
            'nombreProducto' => $nombreProducto,
            'precio' => $precio,
            'cantidad' => $cantidad,
            'talla' => $talla,
            'total' => $total,
           
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
    public function obtener_precio_producto() {
        if ($this->input->post('producto')) {
            $producto = $this->input->post('producto');
    
            // Llama al modelo para obtener el precio del producto
            $precio = $this->venta_model->obtener_precio_producto($producto);
    
            if ($precio !== false) {
                echo $precio;
            } else {
                echo 'Precio no disponible';
            }
        }
    }
    public function agregar_venta($venta_data) {
        // Inserta los datos en la tabla 'ventas'
        $this->db->insert('ventas', $venta_data);
    }

    public function buscar_producto() {
        $producto = $this->input->post('producto');
        // Llama a la función del modelo para buscar productos
        $resultados = $this->venta_model->buscar_productos($producto);
        // Devuelve los resultados en formato JSON
        echo json_encode($resultados);
    }
    
    
}
