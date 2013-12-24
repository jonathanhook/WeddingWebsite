<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getting_Here extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('getting_here_view');
		$this->load->view('footer_view');
	}

	public function trains()
	{
		$date = $this->input->post('date');
		$hour = $this->input->post('hour');
		$minute = $this->input->post('minute');

		if($date != '' && $hour != '' && $minute != '')
		{
			$date = str_replace('/', '.', $date);

			$query = 'http://www.cd.cz/spojeni/conn.aspx?_s_icmp=smvs&f=Prague&date=' . $date . '&t=Bysice&time=' . $hour . '%3a' . $minute . '&v=&option=10&byarr=false&cmd=cmdSearch';
			header('Location: ' . $query) ;
		}
		else
		{
			$this->index();
		}
			
	}
}
