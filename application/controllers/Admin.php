<?php 
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Admin extends CI_Controller
    {    
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
            $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            $this->output->set_header('Pragma: no-cache');
        }
    
        public function index()
        {
            if ($this->session->userdata('admin_login') != 1)
            {
                redirect(base_url(), 'refresh');
            }
            if ($this->session->userdata('admin_login') == 1)
            {
                redirect(base_url() . 'admin/tablero/', 'refresh');
            }
        }

        function tablero()
        {
            if ($this->session->userdata('admin_login') != 1)
            {
                redirect(base_url(), 'refresh');
            }
            $page_data['page_name']  = 'tablero';
            $page_data['page_title'] = "Panel de administración";
            $this->load->view('backend/index', $page_data);
        }

        function medicos($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            if($param1 == 'delete')
            {
                $this->db->where('id', $param2);
                $this->db->delete('medico');
                redirect(base_url() . 'admin/medicos/', 'refresh');
            }
            if($param1 == 'update')
            {
                 $data['nombre'] = $this->input->post('nombre');
                $data['apellido'] = $this->input->post('apellido');
                $data['especialidad'] = $this->input->post('especialidad');
                $data['telefono'] = $this->input->post('telefono');
                $this->db->where('id', $param2);
                $this->db->update('medico', $data);
                redirect(base_url() . 'admin/medicos/', 'refresh');
            }
            if($param1 == 'nuevo')
            {
                $data['nombre'] = $this->input->post('nombre');
                $data['apellido'] = $this->input->post('apellido');
                $data['especialidad'] = $this->input->post('especialidad');
                $data['telefono'] = $this->input->post('telefono');
                $this->db->insert('medico', $data);
                redirect(base_url() . 'admin/medicos/', 'refresh');
            }
            $page_data['page_name']  = 'medicos';
            $page_data['page_title'] =  "Manejar médicos";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }

        function pacientes($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            if($param1 == 'delete')
            {
                $this->db->where('id', $param2);
                $this->db->delete('paciente');
                redirect(base_url() . 'admin/pacientes/', 'refresh');
            }
            if($param1 == 'update')
            {
                $data['nombre'] = $this->input->post('nombre');
                $data['apellido'] = $this->input->post('apellido');
                $data['genero'] = $this->input->post('genero');
                $data['edad'] = $this->input->post('edad');
                $this->db->where('id', $param2);
                $this->db->update('paciente', $data);
                redirect(base_url() . 'admin/pacientes/', 'refresh');
            }
            if($param1 == 'nuevo')
            {
                $data['nombre'] = $this->input->post('nombre');
                $data['apellido'] = $this->input->post('apellido');
                $data['genero'] = $this->input->post('genero');
                $data['edad'] = $this->input->post('edad');
                $this->db->insert('paciente', $data);
                redirect(base_url() . 'admin/pacientes/', 'refresh');
            }
            $page_data['page_name']  = 'pacientes';
            $page_data['page_title'] =  "Manejar pacientes";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }

        function citas($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            if($param1 == 'delete')
            {
                $this->db->where('id', $param2);
                $this->db->delete('cita');
                redirect(base_url() . 'admin/citas/', 'refresh');
            }
            if($param1 == 'nueva')
            {
                $data['id_medico'] = $this->input->post('medico');
                $data['id_paciente'] = $this->input->post('paciente');
                $data['fecha'] = $this->input->post('fecha');
                $data['observaciones'] = $this->input->post('observaciones');
                $this->db->insert('cita', $data);
                redirect(base_url() . 'admin/citas/', 'refresh');
            }
            $page_data['doc']  = $this->input->post('doc');
            $page_data['page_name']  = 'citas';
            $page_data['page_title'] =  "Manejar citas";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }

        function nueva_cita($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            $page_data['page_name']  = 'nueva_cita';
            $page_data['page_title'] =  "Agregar cita";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }

        function nuevo_medico($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            $page_data['page_name']  = 'nuevo_medico';
            $page_data['page_title'] =  "Agregar medico";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }

        function nuevo_paciente($param1 = '', $param2 = '')
        {
            if ($this->session->userdata('admin_login') != 1) 
            {
                $this->session->set_userdata('last_page', current_url());
                redirect(base_url(), 'refresh');
            }
            $page_data['page_name']  = 'nuevo_paciente';
            $page_data['page_title'] =  "Agregar paciente";
            $page_data['business_code']  =  $business_code;
            $this->load->view('backend/index', $page_data);
        }
}