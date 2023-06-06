<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->helper('url');
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('contact');
	}
}
