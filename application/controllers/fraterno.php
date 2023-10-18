<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Fraterno extends CI_Controller
{
    //para las vistas de roles
    public function indexlte()
    {
        if($this->session->userdata('login'))
        {
          //  $lista=$this->fraterno_model->listafraterno();
           // $data['fraterno']=$lista;
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('est_listalte');//,$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuario/index','refresh');
        }   
    }
    public function indexadm()
    {
        if($this->session->userdata('login'))
        {
           $lista=$this->fraterno_model->listafraterno();
           $data['fraterno']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('fraternos_listalte',$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuario/index','refresh');
        }  
    }

    public function encargadolte()
    {
        if ($this->session->userdata('login')) {
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('inclte/menulateral_encargado');
            $this->load->view('est_encargado');
            $this->load->view('inclte/pie');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }
    public function encargadolista()
    {
        if($this->session->userdata('login'))
        {
           $lista=$this->fraterno_model->listafraterno();
           $data['fraterno']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_encargado');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('fraternos_listalte',$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuario/index','refresh');
        }
    }

    public function invitadolte()
    {
        if ($this->session->userdata('login')) {
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('inclte/menulateral_fraterno');
            $this->load->view('est_invitado');
            $this->load->view('inclte/pie');
        } else {
            redirect('usuario/index/2', 'refresh');
        }
    }
    public function invitadolista()
    {
        if($this->session->userdata('login'))
        {
           $lista=$this->fraterno_model->listafraternototal();
           $data['fraterno']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_fraterno');
            $this ->load->view('inclte/menusuperior');
            $this ->load->view('fraternos_lista',$data);
            $this ->load->view('inclte/pie');
        }
        else
        {
            redirect('usuario/index','refresh');
        }
    }
       
    //vista de fraternos deshabiliatos
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

        //vista de actividades de adm, encargado y fraterno
        public function actividades()
        {
            $lista=$this->fraterno_model->listaactividades();
            $data['actividad']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('actividades_listalte',$data);
            $this ->load->view('inclte/pie');
            
        }
        public function actividadesencargado()
        {
            $lista=$this->fraterno_model->listaactividades();
            $data['actividad']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_encargado');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('actividades_listalte',$data);
            $this ->load->view('inclte/pie');
            
        }
        public function actividadesfraterno()
        {
            $lista=$this->fraterno_model->listaactividadestotal();
            $data['actividad']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_fraterno');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('actividades_lista',$data);
            $this ->load->view('inclte/pie');
            
        }
         //vista de actividades deshabiliatadas
    public function actividadesdeshabilitadas()
	{
        $lista=$this->fraterno_model->listaactividaddeshabilitada();
        $data['actividad']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('act_listadeshabilitado',$data);
        $this ->load->view('inclte/pie');
		
	}

        //vista de productos adm, encargado y fraterno
        public function productos()
        {
            $lista=$this->fraterno_model->listaproductos();
            $data['producto']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('productos_listalte',$data);
            $this ->load->view('inclte/pie');
            
        }
        public function productosencargado()
        {
            $lista=$this->fraterno_model->listaproductos();
            $data['producto']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_encargado');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('productos_listalte',$data);
            $this ->load->view('inclte/pie');
            
        }
        public function productosfraterno()
        {
            $lista=$this->fraterno_model->listaproductostotal();
            $data['producto']=$lista;
    
            $this ->load->view('inclte/cabecera');
            $this ->load->view('inclte/menulateral_fraterno');
            $this ->load->view('inclte/menusuperior');
            $this->load->view('productos_lista',$data);
            $this ->load->view('inclte/pie');
            
        }
         //vista de productos deshabiliatos
    public function productosdeshabilitados()
	{
        $lista=$this->fraterno_model->listaproductodeshabilitado();
        $data['producto']=$lista;

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
		$this->load->view('prod_listadeshabilitado',$data);
        $this ->load->view('inclte/pie');
		
	}
    
    // para crud fraternos
    public function agregar()
    {
        //mostrar un formulario(vista) para agregar nuevo fraterno
        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
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
        redirect('fraterno/indexadm','refresh');
    }
    public function modificar()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['infFraterno']=$this->fraterno_model->recuperarfraterno($idFraterno);

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('est_modificar',$data);
        $this ->load->view('inclte/pie');
    }
    public function modificardb()
    {
        $idFraterno=$_POST['idFraterno'];
        // el primero como en base
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['primerApellido'];
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['nota']=$_POST['nota'];

        $this->fraterno_model->modificarfraterno($idFraterno,$data);
        redirect('fraterno/indexadm','refresh');
    }
    public function deshabilitardb()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['estado']='0';
        $this->fraterno_model->modificarfraterno($idFraterno,$data);
        redirect('fraterno/indexadm','refresh');
    }
    public function habilitardb()
    {
        $idFraterno=$_POST['idFraterno'];
        $data['estado']='1';
        $this->fraterno_model->modificarfraterno($idFraterno,$data);
        redirect('fraterno/indexadm','refresh');
    }
    public function eliminardb()
    {
        $idFraterno=$_POST['idFraterno'];// tal como está en el formulario
        $this->fraterno_model->eliminarfraterno($idFraterno);
        redirect('fraterno/indexadm','refresh');
    }

    //para crud producto
    public function agregarproducto()
    {
        //mostrar un formulario(vista) para agregar nuevo fraterno
        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('producto_formulario');
        $this ->load->view('inclte/pie');
    }
    public function agregarproductodb()
    {
        $data['nombreProducto'] = $_POST['nombreProducto'];
        $data['ropa'] = $_POST['ropa'];
        $data['precio'] = $_POST['precio'];
        $data['talla'] = $_POST['talla'];
        $data['cantidad'] = $_POST['cantidad'];
    
        // Verificar si ya existe un producto con la misma ropa y talla
        $existingProduct = $this->fraterno_model->getProductByRopaAndTalla($data['ropa'], $data['talla']);
    
        if ($existingProduct) {
            // Si existe, actualiza la cantidad sumando la cantidad actual
            $data['cantidad'] += $existingProduct->cantidad;
            $this->fraterno_model->actualizarProducto($existingProduct->idProducto, $data);
        } else {
            // Si no existe, inserta un nuevo producto
            $this->fraterno_model->agregarproducto($data);
        }
    
        redirect('fraterno/indexlte', 'refresh');
    }
    
    public function modificarproducto()
    {
        $idProducto=$_POST['idProducto'];
        $data['infProducto']=$this->fraterno_model->recuperarproducto($idProducto);

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('producto_modificar',$data);
        $this ->load->view('inclte/pie');
    }
    public function modificarproductodb()
    {
        $idProducto=$_POST['idProducto'];
        // el primero como en base
        $data['nombreProducto']=$_POST['nombreProducto'];
        $data['ropa']=$_POST['ropa'];
        $data['precio']=$_POST['precio'];
        $data['talla']=$_POST['talla'];
        $data['cantidad']=$_POST['cantidad'];
        $this->fraterno_model->modificarproducto($idProducto,$data);

        redirect('fraterno/indexlte','refresh');
    }
    public function deshabilitarproductobd()
    {
        $idProducto=$_POST['idProducto'];
        $data['estado']='0';

        $this->fraterno_model->modificarproductodb($idProducto,$data);

        redirect('fraterno/productos','refresh');

    } 
    public function habilitarproductobd()
    {
        $idProducto=$_POST['idProducto'];
        $data['estado']='1';

        $this->fraterno_model->modificarproducto($idProducto,$data);
        redirect('fraterno/productosdeshabilitados','refresh');

    }
    
    public function eliminarproductodb()
    {
        $idProducto=$_POST['idProducto'];// tal como está en el formulario
        $this->fraterno_model->eliminarproducto($idProducto);
        redirect('fraterno/productos','refresh');
    }

    //para crud actividad
    public function agregaractividad()
    {
        //mostrar un formulario(vista) para agregar nuevo fraterno
        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('actividad_formulario');
        $this ->load->view('inclte/pie');
    }
    public function agregaractividaddb()// se construye $data
    {
        //$data es un array relacional
        // atrib. DB       Y   FORMULARIO
        $data['nombre']=$_POST['nombre'];
        $data['fecha']=$_POST['fecha'];// el primero es de la db y el segundo del formulario
        $data['lugar']=$_POST['lugar'];
        //$data['nota']=$_POST['nota'];

        $this->fraterno_model->agregaractividad($data);//invocamos el metodo
        redirect('fraterno/actividades','refresh');
    }

    public function modificaractividad()
    {
        $idActividad=$_POST['idActividad'];
        $data['infActividad']=$this->fraterno_model->recuperaractividad($idActividad);

        $this ->load->view('inclte/cabecera');
        $this ->load->view('inclte/menulateral');
        $this ->load->view('inclte/menusuperior');
        $this ->load->view('actividad_modificar',$data);
        $this ->load->view('inclte/pie');
    }

    public function modificaractividaddb()
    {
        $idActividad=$_POST['idActividad'];
        // el primero como en base
        $data['nombre']=$_POST['nombre'];
        $data['fecha']=$_POST['fecha'];
        $data['lugar']=$_POST['lugar'];
        

        $this->fraterno_model->modificaractividad($idActividad,$data);
        redirect('fraterno/actividades','refresh');
    }
    public function deshabilitaractividadbd()
    {
        $idActividad=$_POST['idActividad'];
        $data['estado']='0';

        $this->fraterno_model->modificaractividaddb($idActividad,$data);
        redirect('fraterno/actividades','refresh');
    }
    public function habilitaractividadbd()
    {
        $idActividad=$_POST['idActividad'];
        $data['estado']='1';

        $this->fraterno_model->modificaractividad($idActividad,$data);
        redirect('fraterno/actividades','refresh');
    }

    public function eliminaractividaddb()
    {
        $idActividad=$_POST['idActividad'];// tal como está en el formulario
        $this->fraterno_model->eliminaractividad($idActividad);
        redirect('fraterno/actividades','refresh');
    }
   


    public function subirfoto()
    {
        if ($this->session->userdata('login')) {
            $data['idFraterno'] = $_POST['idFraterno'];
            $this->load->view('inclte/cabecera');
            $this->load->view('inclte/menulateral');
            $this ->load->view('inclte/menusuperior');
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
}
