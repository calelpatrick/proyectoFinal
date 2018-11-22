<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') 
	{
		$CI	=&	get_instance();
		$CI->load->database();
		if($CI->session->userdata('login_type') == 'admin')
		{
			$current_language =	$CI->db->get_where('admin' , array('admin_id' => $CI->session->userdata('login_user_id')))->row()->language_id;
		}
		if($CI->session->userdata('login_type') == 'client')
		{
			$current_language = $CI->db->get_where('clients' , array('client_id' => $CI->session->userdata('login_user_id')))->row()->language_id;
		}
		
		$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

		if($CI->session->userdata('login_type') != 'client' || $CI->session->userdata('login_type') != 'admin')
		{
			if($idioma == 'es')
			{
				$current_language = 'spanish';
			}
			if($idioma == 'en')
			{
				$current_language = 'english';
			}
		}
		
		if($current_language ==	'') 
		{
			$current_language =	'english';
			$CI->session->set_userdata('current_language' , $current_language);
		}

		$query	=	$CI->db->get_where('language' , array('phrase' => $phrase));
		$row   	=	$query->row();	
	
		if (isset($row->$current_language) && $row->$current_language !="")
			return $row->$current_language;
		else 
			return ucwords(str_replace('_',' ',$phrase));
	}
}