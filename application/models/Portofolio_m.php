<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio_m extends CI_Model
{
    private $table = 'portofolio';

    public $nama_portofolio;
    public $deskripsi;
    public $foto = "default.jpg";
    public $status_id;
     
    public function rules()
    {
        return [
            ['field' => 'nama_portofolio',  
            'label' => 'nama_portofolio',  
            'rules' => 'trim|required'],

            ['field' => 'deskripsi',
            'label' => 'deskripsi',
            'rules' => 'trim|required'],

			['field' => 'status_id',
            'label' => 'status_id',
            'rules' => 'trim|required']
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
		$post = $this->input->post();
		$this->nama_portofolio = $post["nama_portofolio"];
		$this->deskripsi = $post["deskripsi"];
		$this->foto = $this->_uploadFoto();
		$this->status_id = $post["status_id"];
		$this->db->insert($this->table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
		$this->nama_portofolio = $post["nama_portofolio"];
		$this->deskripsi = $post["deskripsi"];
		
		if (!empty($_FILES["foto"]["nama_portofolio"])) {
            $this->foto = $this->_uploadFoto();
        } else {
            $this->foto = $post["foto_lama"];
		}

		$this->status_id = $post["status_id"];
		$this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
		$this->_hapusFoto($id);
        return $this->db->delete($this->table, array("id" => $id));
    }

	private function _uploadFoto()
	{
		$config['upload_path']          = './upload/portofolio/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $this->foto;
		$config['overwrite']			= true;
		$config['max_size']             = 20480; // 20MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _hapusFoto($id)
	{
		$portofolio = $this->getById($id);
		if ($portofolio->foto != "default.jpg") {
			$filename = explode(".", $portofolio->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/portofolio/$filename.*"));
		}
	}
}
