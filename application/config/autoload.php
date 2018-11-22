<?php  
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$autoload['packages'] = array();	
	$autoload['libraries'] = array('session','pagination', 'xmlrpc' , 'form_validation', 'email','upload','cart');
	$autoload['helper'] = array('url','file','form','security','string','inflector','directory','download','multi_language');
	$autoload['config'] = array();
	$autoload['language'] = array();
	$autoload['model'] = array( 'email_model' , 'crud_model');