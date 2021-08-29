<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class M_Arsip extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('surat');
        return $query->result_array();
    }

    public function getById($id)
    {
        // code...
        return $this->db->get_where('surat', array('id' =>  $id))->row_array();
    }

    public function cariArsip($key)
    {
        // code...
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->like('judul', $key);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function tambahArsip()
    {
        // code...
        $this->id = uniqid();
        $data = [
            "nomor_surat" => $this->input->post('nomor', true),
            "kategori" => $this->input->post('kategori', true),
            "judul" => $this->input->post('judul', true),
            "file" => $this->uploadFile(),
            "waktu" => $this->input->post('waktu', true)
        ];

        $this->db->insert('surat', $data);
    }

    public function editArsip($id)
    {
        // code...
        $post = $this->input->post();

        $this->id = $id;
        $this->nomor_surat = $post['nomor'];
        $this->kategori = $post['kategori'];
        $this->judul = $post['judul'];

        if (!empty($_FILES["file"]["name"])) {
            $this->file = $this->uploadFile();
        } else {
            $this->file = $post["before"];
        }

        $this->waktu = $post['waktu'];

        $this->db->update('surat', $this, array('id' => $id));
    }

    public function uploadFile()
    {
        # code...
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'pdf';
        $config['filename'] = $this->id;
        $config['overwrite'] = true;

        $this->upload->initialize($config);

        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
    }

    public function hapusArsip($id)
    {
        # code...
        return $this->db->delete('surat', array("id" => $id));
    }
}
