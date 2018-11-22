<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    public function index()
    {        
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'admin/tablero/', 'refresh');

        if ($this->session->userdata('user_login') == 1)
        {
            redirect(base_url(), 'refresh');
        }
		$this->load->view('backend/login');     
    }
   
	function ajax_login()
	{
            $response = array();
   	    $email 		= $_POST["email"];
	    $password 	= $_POST["password"];
	    $response['submitted_data'] = $_POST;		
	    $login_status = $this->validate_login( $email ,  $password );
	    $response['login_status'] = $login_status;
	    if ($login_status == 'success') 
            {
	      $response['redirect_url'] = base_url().'admin/tablero/';
	    }
	    echo json_encode($response);
	}
    
    function validate_login($email	=	'' , $password	 =  '')
    {
		$credential	=	array(	'email' => $email , 'password' => sha1($password) );

        $query = $this->db->get_where('user' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('user_login', '1');
			  $this->session->set_userdata('user_id', $row->user_id);
			  $this->session->set_userdata('login_user_id', $row->user_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'user');
			  return 'success';
		}
		return 'invalid';
    }
  
    function four_zero_four()
    {
        $this->load->view('four_zero_four');
    }
  
    function logout()
    {
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() . 'admincp/', 'refresh');
    }   
}