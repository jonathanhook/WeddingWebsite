<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Our_Wedding_Day extends CI_Controller 
{

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('our_wedding_day_view');
		$this->load->view('footer_view');
	}
}