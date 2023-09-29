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

        public function listaproductos()
        {
            $this->db->select('*');
            $this->db->from('producto');
           $this->db->where('estado','1');
            return $this->db->get();
        }

        public function realizarventa()
        {
            $this->db->select('*');
            $this->db->from('producto');
           $this->db->where('estado','1');
            return $this->db->get();
        }

        //crud fraterno
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

        //crud actividad
        public function agregaractividad($data)
        {
            $this->db->insert('fraterno',$data); //$data es un array relacional, se contruye en agregabd
        }
        public function modificaractividad($idFraterno,$data)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('fraterno',$data);
        }
        public function eliminaractividad($idFraterno)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos
            $this->db->delete('fraterno');
            //$data es un array relacional, se contruye en agregabd
        }
        public function recuperaractividad($idFraterno)
        {
            $this->db->select('*');
            $this->db->from('fraterno');
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            return $this->db->get();
        }

        //crud de producto
        public function agregarproducto($data)
        {
            $this->db->insert('fraterno',$data); //$data es un array relacional, se contruye en agregabd
        }
        public function modificarproducto($idFraterno,$data)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('fraterno',$data);
        }
        public function eliminarproducto($idFraterno)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos
            $this->db->delete('fraterno');
            //$data es un array relacional, se contruye en agregabd
        }
        public function recuperarproductos($idFraterno)
        {
            $this->db->select('*');
            $this->db->from('fraterno');
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            return $this->db->get();
        }

    }