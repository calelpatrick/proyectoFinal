<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Admincp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('crud_model');
        $this->load->database();
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    public function index()
    {
        if ($this->session->userdata('admin_login') == 1)
        {
            redirect(base_url() . 'admin/tablero/', 'refresh');
        }
        else if ($this->session->userdata('mayoristas_login') == 1)
        {
            redirect(base_url() . 'mayoristas/ordenes/', 'refresh');
        }
        else if ($this->session->userdata('mayoristas_login') != 1)
        {
           redirect(base_url() . 'admincp/login', 'refresh');
        }
        else if ($this->session->userdata('admin_login') != 1)
        {
           redirect(base_url() . 'admincp/login', 'refresh');
        }
    }

    function login($param1 = '')
    {
        $this->load->view('backend/auth/login');
    }

    function ajax_login()
    {
        $response  = array();
        $username  = $_POST["username"];
        $password  = $_POST["password"]; 
        $response['submitted_data'] = $_POST;       
        $login_status = $this->validate_login( $username ,  $password );
        $response['login_status'] = $login_status;
        if ($login_status == 'success') 
        {
            if ($this->session->userdata('admin_login') == 1)
            {
                $response['redirect_url'] = base_url() . 'admin/tablero/';
            }
            if ($this->session->userdata('mayoristas_login') == 1)
            {
                $response['redirect_url'] = base_url() . 'mayoristas/ordenes/';
            }
        }
        echo json_encode($response);
    }

    function validate_login($username	=	'' , $password	 =  '')
    {
		$credential =   array('user' => $username , 'password' => sha1($password) );
		 
        $query = $this->db->get_where('admin' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('admin_login', '1');
			  $this->session->set_userdata('login_user_id', $row->admin_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'admin');
			  return 'success';
		}
		return 'invalid';
    }
}