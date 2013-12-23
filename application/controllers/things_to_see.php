<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Things_To_See extends CI_Controller 
{

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('things_to_see_view');
		$this->load->view('footer_view');
	}
}