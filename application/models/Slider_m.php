<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider_m extends CI_Model
{
    private $table = 'slider';
	
    public $foto = "default.jpg";
    public $judul;
    public $deskripsi;
    public $status_id;
     
    public function rules()
    {
        return [
            ['field' => 'judul',  
            'label' => 'judul',  
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
		$this->foto = $this->_uploadFoto();
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
		$this->status_id = $post["status_id"];
		$this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadFoto();
        } else {
			$this->foto = $post["foto_lama"];
		}
		
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
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
		$config['upload_path']          = '././upload/slider/';
		$config['allowed_types']        = 'pdf|doc|docx|jpg|jpeg|png|gif|JPG';
		$config['file_name']            = $this->judul;
		// $config['overwrite']			= true;
		// $config['max_size']             = 20480; // 20MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _hapusFoto($id)
	{
		$slider = $this->getById($id);
		if ($slider->foto != "default.jpg") {
			$filename = explode(".", $slider->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/slider/$filename.*"));
		}
	}
}
