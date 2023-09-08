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
        $config['smtp_host'] = 'localhost';
        $config['smtp_port'] = 25;
        $config['smtp_user'] = '';
        $config['smtp_pass'] = '';
        $config['mailtype'] = 'html';
        $this->ci->email->initialize($config);
    }

    public function enviarCorreo($destinatario, $asunto, $mensaje)
    {
        $this->ci->email->from('agandeiby', 'deiby');
        $this->ci->email->to($destinatario);
        $this->ci->email->subject($asunto);
        $this->ci->email->message($mensaje);

        return $this->ci->email->send();
    }
}
