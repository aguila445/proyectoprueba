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

        public function agregarfraterno($data)
        {
            $this->db->insert('fraterno',$data); //$data es un array relacional, se contruye en agregabd
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

        public function modificarfraterno($idFraterno,$data)
        {
            $this->db->where('idFraterno',$idFraterno);// El primero es de la base de datos, el segundo se recibe del parametro
            $this->db->update('fraterno',$data);
        }

    }