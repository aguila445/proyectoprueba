<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomEmail
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('email');

        // Configuración del correo electrónico (ajusta según tu servidor de correo)
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'tu_servidor_smtp';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'tu_correo_electronico';
        $config['smtp_pass'] = 'tu_contraseña_de_correo';
        $config['mailtype'] = 'html';
        $this->ci->email->initialize($config);
    }

    public function enviarCorreo($destinatario, $asunto, $mensaje)
    {
        $this->ci->email->from('tu_correo_electronico', 'Tu Nombre');
        $this->ci->email->to($destinatario);
        $this->ci->email->subject($asunto);
        $this->ci->email->message($mensaje);

        return $this->ci->email->send();
    }
}
