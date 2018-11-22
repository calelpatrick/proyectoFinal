<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
	
	
    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    function contar_productos()
    {
        $result = $this->db->count_all_results('productos');
        return $result;
    }

    function contar_costo()
    {
        $fin = 0; 
        $this->db->where("fecha BETWEEN DATE_ADD(NOW(), INTERVAL -2 MONTH) AND NOW()");
        $total = $this->db->get("productos")->result_array(); 

        foreach($total as $rows)
        { 
          $fin += $rows['costo']*$rows['stock']; 
        } 
        return $fin;
    }

    function contar_venta()
    {
        $fin = 0; 
        $total = $this->db->get('productos')->result_array(); 
        foreach($total as $rows)
        { 
          $fin += $rows['precio']*$rows['stock']; 
        } 
        return $fin;
    }

    function business_upload($code) 
    {
        ini_set("memory_limit","-1");
        $data['business_code'] = $code;
        for ($i = 0; $i < count($_FILES['userfile']['name']); $i++) 
        {
        $data['file_name'] = $_FILES['userfile']['name'][$i];
        if ($data['file_name'] != "") {
            $files = $_FILES['userfile'][$i];
        $this->load->library('upload');
        $config['upload_path']   =  'uploads/business/';
        $config['allowed_types'] =  'gif|jpg|png';
        $_FILES['userfile[]']['name']     = $files['name'][$i];
        $_FILES['userfile[]']['type']     = $files['type'][$i];
        $_FILES['userfile[]']['tmp_name'] = $files['tmp_name'][$i];
        $_FILES['userfile[]']['size']     = $files['size'][$i];
        $this->upload->initialize($config);
        $this->upload->do_upload('userfile');
        $name           = $_FILES['userfile']['name'][$i];
        $data['file_name']   = $name;
        $ext            = end((explode(".", $name)));
        $data['file_type']      = $ext;
        $this->db->insert('business_images', $data);
        move_uploaded_file($_FILES['userfile']['tmp_name'][$i], 'uploads/business/' . $_FILES['userfile']['name'][$i]);
        }
    }
   }
   
   function create_category()
	{
		$data['name']		=	$this->input->post('name');
		$data['category_code']           = substr(md5(rand(100000000, 200000000)), 0, 10);
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/categories/' . $data['category_code'] . '.jpg');
		$this->db->insert('category' , $data);
	}

   function delete_user($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
    }

   function create_user() 
    {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['password'] = sha1($this->input->post('password'));
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $this->db->insert('user', $data);
    }

	 function get_image_url($type = '', $id = '') {
        if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.jpg';
        return $image_url;
    }
}