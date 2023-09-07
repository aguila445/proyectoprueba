<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('usuarios/panel', 'refresh');
        } else {
            $data['msg'] = $this->uri->segment(3);
            $this->load->view('login', $data);
        }
    }
    public function validarusuario()
    {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $consulta = $this->usuario_model->validar($login, $password);

        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $row) {
                $this->session->set_userdata('idUsuario', $row->idUsuario);
                $this->session->set_userdata('login', $row->login);
                $this->session->set_userdata('tipo', $row->tipo);
                redirect('usuarios/panel', 'refresh');
            }
        } else {
            redirect('usuarios/index/1', 'refresh');
        }
    }


    public function panel()
    {
        if ($this->session->userdata('login')) {
            $tipo=$this->session->userdata('tipo');
            if ($tipo=='admi') {
                redirect('estudiante/indexlte', 'refresh');
            }
            else {
                redirect('estudiante/invitadolte', 'refresh');
            }
        } else {
            redirect('usuarios/index/2', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index/3', 'refresh');
    }


    private function generarLoginUnico($nombre)
        {
            // Verificar que $nombre no esté vacío
        if (!empty($nombre)) {
        // Generar un login único a partir del nombre completo
        $nombre = str_replace(' ', '', $nombre); // Eliminar espacios en blanco
        $login = strtolower($nombre); // Convertir a minúsculas
        $login = substr($login, 0, 8); // Tomar los primeros 8 caracteres (ajusta según tus necesidades)

        // Verificar si el login ya existe en la base de datos
        while ($this->usuario_model->loginExiste($login)) {
            // Si el login existe, agrega un número aleatorio al final para hacerlo único
            $login .= rand(0, 9);
        }

        return $login;
        } else {
        // En caso de que $nombre esté vacío, puedes manejar el error de alguna manera
        return 'nombre_invalido'; // O devuelve un valor predeterminado
        }
    }

    private function generarPassword()
    {
        // Genera una contraseña aleatoria segura
        $caracteresPermitidos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $password = substr(str_shuffle($caracteresPermitidos), 0, 12); // Genera una contraseña de 12 caracteres (ajusta según tus necesidades)
        
        return $password;
    }
    


        //libreria email
    public function __construct()
    {
        parent::__construct();
        $this->load->library('customemail'); // Carga la librería personalizada
    }

    public function registrar()
    {
        // Recuperar datos del formulario (nombre completo y correo electrónico)
        $login = $this->input->post('login');
        $email = $this->input->post('email');

        // Validar que el correo electrónico no esté vacío y sea válido
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Maneja el caso en el que el correo electrónico no es válido
        // Puedes mostrar un mensaje de error y redirigir al usuario al formulario de registro nuevamente.
        } else {
        // Generar un login y contraseña únicos
        $login = $this->generarLoginUnico($login);
        $password = $this->generarPassword();

        // Hash de la contraseña (asegúrate de usar un método de hash seguro)
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        // Insertar los datos en la base de datos
        $data = array(
            'login' => $login,
            'password' => $passwordHash,
            'email' => $email
            // Otros campos si es necesario
        );

        $this->load->model('Usuario_model'); // Asegúrate de cargar el modelo
        $this->Usuario_model->registrarNuevoUsuario($data);

        // Enviar correo electrónico con los datos de inicio de sesión
        $this->enviarCredencialesPorCorreo($login, $password, $email);

        // Redirigir a la página de inicio de sesión o mostrar un mensaje de éxito
        // ...
    }
    $this->load->view('registro');
    }




        // Método para enviar correo electrónico con las credenciales de inicio de sesión
        private function enviarCredencialesPorCorreo($login, $password, $email)
        {
         $this->load->library('email');

            // Configuración del correo electrónico (ajusta según tu servidor de correo)
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'tu_servidor_smtp';
            $config['smtp_port'] = 587;
            $config['smtp_user'] = 'tu_correo_electronico';
            $config['smtp_pass'] = 'tu_contraseña_de_correo';
            $config['mailtype'] = 'html';

             $this->email->initialize($config);

            $this->email->from('tu_correo_electronico', 'Tu Nombre');
            $this->email->to($email);

    $this->email->subject('Credenciales de inicio de sesión');
    $message = 'Tu información de inicio de sesión:<br><br>';
    $message .= 'Usuario (Login): ' . $login . '<br>';
    $message .= 'Contraseña: ' . $password . '<br>';
    $this->email->message($message);

    if ($this->email->send()) {
        // Éxito: el correo se envió correctamente
        // Puedes redirigir a una página de éxito o realizar otras acciones
    } else {
        // Error: no se pudo enviar el correo
        // Puedes mostrar un mensaje de error o realizar otras acciones
    }
}
 

public function recuperar_password()
{
    $data['msg'] = $this->uri->segment(3);

    if ($_POST) {
        $email = $this->input->post('email');

        // Verificar si el correo electrónico existe en la base de datos
        $usuario = $this->usuario_model->obtenerUsuarioPorEmail($email);

        if ($usuario) {
            // Generar una nueva contraseña segura
            $nuevaPassword = $this->generarPassword();

            // Actualizar la contraseña en la base de datos
            $this->usuario_model->actualizarPassword($usuario->idUsuario, $nuevaPassword);

            // Enviar la nueva contraseña por correo electrónico
            $this->enviarNuevaPasswordPorCorreo($email, $nuevaPassword);

            // Redirigir con un mensaje de éxito
            redirect('usuarios/index/4', 'refresh');
        } else {
            // El correo electrónico no existe en la base de datos, mostrar un mensaje de error
            $data['msg'] = 'El correo electrónico proporcionado no existe en nuestra base de datos.';
        }
    }

    $this->load->view('recuperar_password', $data);
}
    

private function enviarNuevaPasswordPorCorreo($email, $nuevaPassword)
{
    $this->load->library('email');

    // Configuración del correo electrónico (ajusta según tu servidor de correo)
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'tu_servidor_smtp';
    $config['smtp_port'] = 587;
    $config['smtp_user'] = 'tu_correo_electronico';
    $config['smtp_pass'] = 'tu_contraseña_de_correo';
    $config['mailtype'] = 'html';
    $this->email->initialize($config);

    $this->email->from('tu_correo_electronico', 'Tu Nombre');
    $this->email->to($email);

    $this->email->subject('Recuperación de Contraseña');
    $message = 'Tu contraseña se ha restablecido correctamente.<br><br>';
    $message .= 'Tu nueva contraseña es: ' . $nuevaPassword . '<br>';
    $message .= 'Por favor, cambia tu contraseña después de iniciar sesión.<br><br>';
    $message .= 'Saludos,<br>Tu Equipo de Soporte';
    $this->email->message($message);

    if ($this->email->send()) {
        // Éxito: el correo se envió correctamente
        // Puedes redirigir a una página de éxito o realizar otras acciones
        return true;
    } else {
        // Error: no se pudo enviar el correo
        // Puedes mostrar un mensaje de error o realizar otras acciones
        return false;
    }
}
    



    }