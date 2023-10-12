<?php
class Venta_model extends CI_Model {
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

    public function listaventas()
    {
        $this->db->select('*');
        $this->db->from('ventas');
       $this->db->where('estado','1');
        return $this->db->get();
    }
    
}
