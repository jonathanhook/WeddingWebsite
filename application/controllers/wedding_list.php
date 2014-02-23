<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wedding_List extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('wedding_list_view');
		$this->load->view('footer_view');
	}
}