<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Fraterno extends CI_Controller
{
    public function indexlte()
    {
        if($this->session->userdata('login'))
        {
            $lista=$this->fraterno_model->listafraterno();
            $data['fraterno']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('est_listalte',$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuario/index','refresh');
        }
        
    }

    public function deshabilitados()
	{
        $lista=$this->fraterno_model->listafraternodeshabilitado();
        $data['fraterno']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('est_listadeshabilitado',$data);
        $this ->load->view('inclte/pie');
		
	}
    

    public function subirfoto()
    {
        if ($this->session->userdata('login')) {
            $data['idFraterno'] = $_POST['idFraterno'];
            $this->load->view('inclte/cabecera');
            $this->load->view('inclte/menusuperior');
            $this->load->view('inclte/menulateral');
            $this->load->view('subirform', $data);
            $this->load->view('inclte/pie');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }
    public function subir()
    {
        if ($this->session->userdata('login')) {
            $idFraterno = $_POST['idFraterno'];
            $nombreArchivo = $idFraterno . ".png";

            $config['upload_path'] = './uploads/fraterno/';
            $config['file_name'] = $nombreArchivo;

            $direccion = "./uploads/fraterno/" . $nombreArchivo;
            if (file_exists($direccion)) {
                unlink($direccion);
            }

            $config['allowed_types'] = 'png';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $data['foto'] = $nombreArchivo;
                $this->fraterno_model->modificarfraterno($idFraterno, $data);
                $this->upload->data();
            }
            redirect('fraterno/indexlte', 'refresh');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }
    
    public function agregar()
    {
        //mostrar un formulario(vista) para agregar nuevo fraterno
        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('est_formulario');
        $this ->load->view('inclte/pie');
    }
    public function agregardb()// se construye $data
    {
        //$data es un array relacional
        // atrib. DB       Y   FORMULARIO
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['primerApellido'];// el primero es de la db y el segundo del formulario
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['nota']=$_POST['nota'];

        $this->fraterno_model->agregarfraterno($data);//invocamos el metodo

        redirect('fraterno/indexlte','refresh');
    }

    public function eliminardb()
    {
        $idFraterno=$_POST['idFraterno'];// tal como está en el formulario
        $this->fraterno_model->eliminarfraterno($idFraterno);
        redirect('fraterno/indexlte','refresh');
    }
   
    public function modificar()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['infProducto']=$this->fraterno_model->recuperarfraterno($idFraterno);

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('est_modificar',$data);
        $this ->load->view('inclte/pie');
    }

    public function modificardb()
    {
        $idFraterno=$_POST['idFraterno'];
        // el primero como en base
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['apellido1'];
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['nota']=$_POST['nota'];
        $this->fraterno_model->modificarfraterno($idFraterno,$data);

        redirect('fraterno/indexlte','refresh');
    }
    public function deshabilitarbd()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['estado']='0';

        $this->fraterno_model->modificarfraterno($idFraterno,$data);

        redirect('fraterno/indexlte','refresh');

    }
    

    public function habilitarbd()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['estado']='1';

        $this->fraterno_model->modificarfraterno($idFraterno,$data);

        redirect('fraterno/deshabilitados','refresh');

    }
    public function invitadolte()
    {
        if ($this->session->userdata('login')) {
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('inclte/menulateral');
            $this->load->view('est_invitado');
            $this->load->view('inclte/pie');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }

    public function encargadolte()
    {
        if ($this->session->userdata('login')) {
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('inclte/menulateral');
            $this->load->view('est_encargado');
            $this->load->view('inclte/pie');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }
}
