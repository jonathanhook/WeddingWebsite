<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venue extends CI_Controller 
{

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('venue_view');
		$this->load->view('footer_view');
	}
}
