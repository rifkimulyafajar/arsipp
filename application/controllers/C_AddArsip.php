<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_AddArsip extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Unggah Arsip';

		$this->load->view('header', $data);
		$this->load->view('add_arsip');
		$this->load->view('footer');
	}
}
