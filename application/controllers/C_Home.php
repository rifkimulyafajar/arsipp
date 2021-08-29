<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Arsip Surat';

		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
}
