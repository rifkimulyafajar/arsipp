<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_About extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'About Me';

		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}
