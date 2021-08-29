<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Arsip extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('M_Arsip');
	}

	public function index()
	{
		$data['title'] = 'Arsip Surat';

		if (isset($_POST['cari'])) {
			// code...
			$hasil = $this->M_Arsip->cariArsip($_POST['cari']);
		}
		else {
			$hasil = $this->M_Arsip->getAll();
		}

		$data['arsip'] = $hasil;

		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		// code...
		$data['title'] = 'Unggah Arsip';

		$this->form_validation->set_rules('nomor', 'Nomor Surat', 'required', array('required' => 'Nomor Surat Tidak Boleh Kosong !!'));
		$this->form_validation->set_rules('judul', 'Judul Surat', 'required', array('required' => 'Judul Surat Tidak Boleh Kosong !!'));
		
		if (empty($_FILES['file']['name'])) {
			$this->form_validation->set_rules('file', 'Document', 'required', array('required' => 'Dokumen Tidak Boleh Kosong !!'));
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header', $data);
			$this->load->view('add');
			$this->load->view('footer');
		}
		else {
			$this->M_Arsip->tambahArsip();
			echo "<script>alert('Anda berhasil mengunggah arsip');</script>";
			redirect('c_arsip', 'refresh');
		}
	}

	public function edit($id)
	{
		// code...
		$data['title'] = 'Edit/Ganti File';
		$data['detail'] = $this->M_Arsip->getById($id);

		$this->form_validation->set_rules('nomor', 'Nomor Surat', 'required', array('required' => 'Nomor Surat Tidak Boleh Kosong !!'));
		$this->form_validation->set_rules('judul', 'Judul Surat', 'required', array('required' => 'Judul Surat Tidak Boleh Kosong !!'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header', $data);
			$this->load->view('edit', $data);
			$this->load->view('footer');
		}
		else {
			$this->M_Arsip->editArsip($id);
			echo "<script>alert('Anda berhasil mengubah arsip');</script>";
			redirect('c_arsip', 'refresh');
		}
	}

	public function unduh($id)
	{
		# code...
		$data = $this->db->get_where('surat', ['id'=>$id])->row();
		force_download('upload/'.$data->file,NULL);
	}

	public function delete($id)
	{
		// code...
		$delete = $this->db->delete('surat', array("id" => $id));

		if ($delete) {
			// code...
			echo "<script>alert('Data Arsip Terhapus');</script>";
			redirect('c_arsip', 'refresh');
		}
	}

	public function detail($id)
	{
		// code...
		$data['title'] = 'Lihat';
		$data['detail'] = $this->M_Arsip->getById($id);

		$this->load->view('header', $data);
		$this->load->view('detail', $data);
		$this->load->view('footer');
	}



	public function about()
	{
		// code...
		$data['title'] = 'About Me';

		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}
