<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Carga el modelo de ventas
        $this->load->model('venta_model');
    }

    public function formulario_venta() {
        // Carga la vista formulario_venta.php
        $this->load->view('formulario_venta');
    }

    public function procesar_venta() {
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
        $this->venta_model->agregar_venta($venta_data);

        // Puedes realizar otras acciones aquí, como generar un recibo o enviar un correo electrónico al cliente.

        // Redirecciona a la página de confirmación o a donde desees
        redirect('venta/confirmacion_venta');
    }

    public function confirmacion_venta() {
        // Carga la vista de confirmación
        $this->load->view('confirmacion_venta');
    }
}
