<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct(){
		parent:: __construct();
		//$this->load->helper('url');
	}

	
	public function index()
	{

		
		//$this->load->helper('form');
		$this->load->view('home_page');
	}
}

