<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    
     function promocion()
    {
            $clients = $this->db->get('afiliados')->result_array();
            $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
            $system_email = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;
            foreach($clients as $client) 
            {
                $ci = get_instance();
                $ci->load->library('email');
                $config['protocol'] = "smtp";   
                $config['smtp_host'] = "ssl://smtp.googlemail.com";
                $config['smtp_port'] = "465";
                $config['smtp_user'] = "admin@unlock-source.com"; 
                $config['smtp_pass'] = "Nolose123"; 
                $config['charset'] = "utf-8";
                $config['mailtype'] = "html";
                $config['newline'] = "\r\n";
                $ci->email->initialize($config);
        
        
                $from = $system_email;
                $email_sub = $this->input->post('titulo');
                $name = $system_name;
                $email_msg = $this->input->post('promo');
                $cliente = $client['nombre'];
                $this->email->from($from,$name);
                $data = array(
                    'email_msg' => $email_msg,
                    'cliente' => $cliente
                );
                $this->email->to($client['correo']);
                $this->email->subject($email_sub);
                $body = $this->load->view('backend/mails/promos.php',$data,TRUE);
                $this->email->message($body);   
                $this->email->send();
                //echo $this->email->print_debugger();
            }
    }
    
   
    function verify_account($param1 = '', $param2 = '')
    {
        $email_sub      =   "Verifica tu cuenta";
        $email_msg      =   "Hola <strong>[NAME]</strong>, <br><br><br>";
        $email_msg      .=  "Se ha creado una nueva cuenta con tu dirección de correo en: http://mrcell.pro/ <br><br>";
        $email_msg      .=  "Para poder comenzar a utilizar tu cuenta necesitas verificarla, por favor haz click en el boton verificar.<br/>";

        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $from = "admin@unlock-source.com";
        $name = "MrCell.Pro";
        $CLIENT_NAME  = $this->db->get_where('user_pending', array('user_pending_id' => $param1))->row()->name;
        $CLIENT_EMAIL = $this->db->get_where('user_pending', array('user_pending_id' => $param1))->row()->email;
        $email_msg = str_replace('[NAME]' , $CLIENT_NAME, $email_msg);
        $SYSTEM_URL = base_url().'acceder/verify/'; 
        $URL = $SYSTEM_URL.$param2;
        $this->email->from($from,$name);
        $data = array(
            'email_msg' => $email_msg,
            'email_url' => $URL
        );
        $this->email->to($CLIENT_EMAIL);
        $this->email->subject($email_sub);
        $body = $this->load->view('backend/mails/verify.php',$data,TRUE);
        $this->email->message($body);   
        $this->email->send();
    }

    function contact_us()
    {
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $to = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;
            $name = $this->input->post('nombre');
            $CLIENT_EMAIL = $this->input->post('correo');
            $email_sub = $this->input->post('asunto');
            $email_msg = $this->input->post('mensaje');
            $this->email->from($CLIENT_EMAIL,$name);
            $data = array(
                'email_msg' => $email_msg
            );
            $this->email->to($to);
            $this->email->subject($email_sub);
            $body = $this->load->view('backend/mails/contact.php',$data,TRUE);
            $this->email->message($body);   
            $this->email->send();
    }
    
    function cotizacion()
    {
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $to = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;
            $name = $this->input->post('nombre');
            $CLIENT_EMAIL = $this->input->post('correo');
            $email_sub = "Cotizacion: ". " ". $this->input->post('marca');
            $email_msg = $this->input->post('reparacion')." <br>Celular:".$this->input->post('tel');
            $this->email->from($CLIENT_EMAIL,$name);
            $data = array(
                'email_msg' => $email_msg
            );
            $this->email->to($to);
            $this->email->subject($email_sub);
            $body = $this->load->view('backend/mails/contact.php',$data,TRUE);
            $this->email->message($body);   
            $this->email->send();
    }
    
    function compras($fecha,$cliente,$monto,$metodo)
    {
            $email_sub = "Nueva compra en Mr.Cell";
            $email_msg = "Hola <strong>Admin</strong> se ha realizado una nueva compra en https://mrcell.pro los detalles son los siguientes: <br><br><hr><br>";
            $email_msg .= "<strong>Nombre del cliente:</strong> [CLIENTE] <br>";
            $email_msg .= "<strong>Fecha de compra:</strong> [FECHA] <br>";
            $email_msg .= "<strong>Monto total:</strong> Q.[TOTAL] <br>";
            $email_msg .= "<strong>Metodo de pago:</strong> [METODO] <br>";
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $from = "admin@unlock-source.com";
            $name = "MrCell.Pro";
            $CLIENT_NAME  = $this->db->get_where('user', array('user_id' => $cliente))->row()->name;
            $email_msg = str_replace('[CLIENTE]' , $CLIENT_NAME, $email_msg);
            $email_msg = str_replace('[FECHA]' , $fecha, $email_msg);
            $email_msg = str_replace('[TOTAL]' , $monto, $email_msg);
            $email_msg = str_replace('[METODO]' , ucwords($metodo), $email_msg);
            $this->email->from($from,$name);
            $data = array(
                'email_msg' => $email_msg
            );
            $this->email->to('admin@unlock-source.com');
            $this->email->subject($email_sub);
            $body = $this->load->view('backend/mails/api.php',$data,TRUE);
            $this->email->message($body);   
            $this->email->send();
    }
}