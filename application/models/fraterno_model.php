<?php
    class Fraterno_model extends CI_Model{
        public function listafraterno()
        {
            $this->db->select('*');
            $this->db->from('fraterno');
            $this->db->where('estado','1');
            return $this->db->get();
        }

        public function listafraternodeshabilitado()
        {
            $this->db->select('*');
            $this->db->from('fraterno');
           $this->db->where('estado','0');
            return $this->db->get();
        }


        public function listaactividades()
        {
            $this->db->select('*');
            $this->db->from('actividad');
           $this->db->where('estado','1');
            return $this->db->get();
        }
        public function listaactividaddeshabilitada()
        {
            $this->db->select('*');
            $this->db->from('actividad');
           $this->db->where('estado','0');
            return $this->db->get();
        }

        public function listaproductos()
        {
            $this->db->select('*');
            $this->db->from('producto');
           $this->db->where('estado','1');
            return $this->db->get();
        }
        public function listaproductodeshabilitado()
        {
            $this->db->select('*');
            $this->db->from('producto');
           $this->db->where('estado','0');
            return $this->db->get();
        }


        //crud fraterno ---------------
        public function agregarfraterno($data)
        {
            $this->db->insert('fraterno',$data); //$data es un array relacional, se contruye en agregabd
        }
        public function modificarfraterno($idFraterno,$data)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('fraterno',$data);
        }
        public function eliminarfraterno($idFraterno)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos
            $this->db->delete('fraterno');
            //$data es un array relacional, se contruye en agregabd
        }
        public function recuperarfraterno($idFraterno)
        {
            $this->db->select('*');
            $this->db->from('fraterno');
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            return $this->db->get();
        }

        //crud actividad ------------------
        public function agregaractividad($data)
        {
            $this->db->insert('actividad',$data); //$data es un array relacional, se contruye en agregabd
        }
        public function modificaractividad($idActividad,$data)
        {
            $this->db->where('idActividad',$idActividad);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('actividad',$data);
        }
        public function eliminaractividad($idActividad)
        {
            $this->db->where('idActividad',$idActividad);// El primero es de la base de datos
            $this->db->delete('actividad');
            //$data es un array relacional, se contruye en agregabd
        }
        public function recuperaractividad($idActividad)
        {
            $this->db->select('*');
            $this->db->from('actividad');
            $this->db->where('idActividad',$idActividad);// El primero es de la base de datos, el segundo se recibe del parametro
            return $this->db->get();
        }

        //crud de producto -----------------------
        public function agregarproducto($data)
        {
            $this->db->insert('producto',$data); //$data es un array relacional, se contruye en agregabd
        }
        public function modificarproducto($idProducto,$data)
        {
            $this->db->where('idProducto',$idProducto);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('producto',$data);
        }
        public function eliminarproducto($idProducto)
        {
            $this->db->where('idProducto',$idProducto);// El primero es de la base de datos
            $this->db->delete('producto');
            //$data es un array relacional, se contruye en agregabd
        }
        public function recuperarproducto($idProducto)
        {
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->where('idProducto',$idProducto);// El primero es de la base de datos, el segundo se recibe del parametro
            return $this->db->get();
        }

        public function getProductByRopaAndTalla($ropa, $talla)
        {
         return $this->db->get_where('producto', array('ropa' => $ropa, 'talla' => $talla))->row();
        }

        public function actualizarProducto($idProducto, $data)
        {
             $this->db->where('idProducto', $idProducto);
             $this->db->update('producto', $data);
        }

        

    }