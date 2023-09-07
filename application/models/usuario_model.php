<?php
    class Usuario_model extends CI_Model{

        public function validar($login,$password)
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('login',$login);
            $this->db->where('password',$password);
            return $this->db->get();
        }
        
        public function registrarNuevoUsuario($data)
        {
            $this->db->insert('usuarios', $data);
        }
        
        public function obtenerUsuarioPorEmail($email)
        {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        return $this->db->get()->row();
        }

        public function actualizarPassword($idUsuario, $nuevaPassword)
         {
        $data = array('password' => $nuevaPassword);

        $this->db->where('idUsuario', $idUsuario);
        $this->db->update('usuarios', $data);
        }
    }