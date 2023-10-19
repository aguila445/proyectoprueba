<?php
class Venta_model extends CI_Model {

    public function listaventas()
    {
        $this->db->select('*');
        $this->db->from('ventas');
       $this->db->where('estado','1');
        return $this->db->get();
    }

    public function realizarventa()
    {
        $this->db->select('*');
        $this->db->from('ventas');
       $this->db->where('estado','1');
        return $this->db->get();
    }

    public function agregar_venta($venta_data) {
        // Inserta los datos en la tabla 'ventas'
        $this->db->insert('ventas', $venta_data);
    }
    public function actualizar_cantidad_producto($producto, $cantidad) {
        // Consulta la cantidad actual del producto
        $this->db->select('cantidad');
        $this->db->where('nombreProducto', $producto);
        $query = $this->db->get('producto');
        $producto_actual = $query->row();
    
        // Calcula la nueva cantidad
        $nueva_cantidad = $producto_actual->cantidad - $cantidad;
    
        // Actualiza la cantidad en la tabla 'producto'
        $this->db->where('nombreProducto', $producto);
        $this->db->update('producto', array('cantidad' => $nueva_cantidad));
    }

        public function buscar_productos($producto) {
        // Realiza la búsqueda de productos en la base de datos
        $this->db->like('nombreProducto', $producto);
        $this->db->select('nombreProducto, precio');
        $query = $this->db->get('producto');
    
        return $query->result();
    }
    
    public function obtener_lista_productos() {
        $this->db->select('nombreProducto, precio, talla');
        $this->db->from('productos');
        $query = $this->db->get();
        return $query->result();
    }
    public function obtener_lista_actividades() {
        $this->db->select('nombreActividad, fechaRealizacion');
        $this->db->from('actividades');
        $query = $this->db->get();
        return $query->result();
    }
    public function obtener_lista_ventas() {
        $this->db->select('nombreProducto, cantidad, precio, totalCobrado, nombreFraterno, usuarioVenta');
        $this->db->from('ventas');
        $query = $this->db->get();
        return $query->result();
    }
            
}
