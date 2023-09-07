<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller
{
    public function indexlte()
    {
        if($this->session->userdata('login'))
        {
            $lista=$this->estudiante_model->listaestudiante();
            $data['estudiante']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('est_listalte',$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuarios/index','refresh');
        }
        
    }
    public function subirfoto()
    {
        if ($this->session->userdata('login')) {
            $data['idEstudiante'] = $_POST['idEstudiante'];
            $this->load->view('inclte/cabecera');
            $this->load->view('inclte/menusuperior');
            $this->load->view('inclte/menulateral');
            $this->load->view('subirform', $data);
            $this->load->view('inclte/pie');
        } else {
            redirect('usuarios/index/2', 'refresh');
        }
    }
    public function subir()
    {
        if ($this->session->userdata('login')) {
            $idEstudiante = $_POST['idEstudiante'];
            $nombreArchivo = $idEstudiante . ".jpg";

            $config['upload_path'] = './uploads/estudiante/';
            $config['file_name'] = $nombreArchivo;

            $direccion = "./uploads/estudiante/" . $nombreArchivo;
            if (file_exists($direccion)) {
                unlink($direccion);
            }

            $config['allowed_types'] = 'jpg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $data['error'] = $this->upload->display_errors();
            } else {
                $data['foto'] = $nombreArchivo;
                $this->estudiante_model->modificarestudiante($idEstudiante, $data);
                $this->upload->data();
            }
            redirect('estudiante/indexlte', 'refresh');
        } else {
            redirect('usuarios/index/2', 'refresh');
        }
    }
    
    public function agregar()
    {
        //mostrar un formulario(vista) para agregar nuevo estudiante
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
        $data['primerApellido']=$_POST['apellido1'];// el primero es de la db y el segundo del formulario
        $data['segundoApellido']=$_POST['apellido2'];
        $data['nota']=$_POST['nota'];

        $this->estudiante_model->agregarestudiante($data);//invocamos el metodo

        redirect('estudiante/indexlte','refresh');
    }

    public function eliminardb()
    {
        $idEstudiante=$_POST['idEstudiante'];// tal como está en el formulario
        $this->estudiante_model->eliminarestudiante($idEstudiante);
        redirect('estudiante/indexlte','refresh');
    }
   
    public function modificar()
    {
        $idEstudiante=$_POST['idEstudiante'];
        $data['infProducto']=$this->estudiante_model->recuperarestudiante($idEstudiante);

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('est_modificar',$data);
        $this ->load->view('inclte/pie');
    }

    public function modificardb()
    {
        $idEstudiante=$_POST['idEstudiante'];
        // el primero como en base
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['apellido1'];
        $data['segundoApellido']=$_POST['apellido2'];
        $data['nota']=$_POST['nota'];
        $this->estudiante_model->modificarestudiante($idEstudiante,$data);

        redirect('estudiante/indexlte','refresh');
    }
    public function deshabilitarbd()
    {
        $idEstudiante=$_POST['idEstudiante'];
        $data['habilitado']='0';

        $this->estudiante_model->modificarestudiante($idEstudiante,$data);

        redirect('estudiante/indexlte','refresh');

    }
    public function deshabilitados()
	{
        $lista=$this->estudiante_model->listaestudiantedeshabilitado();
        $data['estudiante']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('inclte/menulateral');
		$this->load->view('est_listadeshabilitado',$data);
        $this ->load->view('inclte/pie');
		
	}
    public function habilitarbd()
    {
        $idEstudiante=$_POST['idEstudiante'];
        $data['habilitado']='1';

        $this->estudiante_model->modificarestudiante($idEstudiante,$data);

        redirect('estudiante/deshabilitados','refresh');

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
            redirect('usuarios/index/2', 'refresh');
        }
    }
}
