<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getting_Here extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('getting_here_view');
		$this->load->view('footer_view');
	}
}
