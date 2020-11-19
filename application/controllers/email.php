<?php if ( ! defined('BASEPATH')) exit('No direct script access
	allowed');
class Email extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
	}
	public function index() {
		redirect('email/send_email');
	}
	public function send_email() {
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'text';
		$this->email->initialize($config);
		$this->email->from('masumbillah546@gmail.com', 'Your Name');
		$this->email->to('shahintuhinbsl@gmail.com');
		$this->email->subject('This is a text email');
		$this->email->message('And this is some content for
			the text email.');
		$this->email->send();
		echo $this->email->print_debugger();
	}
}