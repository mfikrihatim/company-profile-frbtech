<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excellence_m extends CI_Model
{
    private $table = 'excellence';

    public $judul;
    public $deskripsi;
    public $icon = "default.jpg";
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
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
		$this->icon = $this->_uploadFoto();
		$this->status_id = $post["status_id"];

		$this->db->insert($this->table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
		$this->judul = $post["judul"];
		$this->deskripsi = $post["deskripsi"];
		
		if (!empty($_FILES["icon"]["judul"])) {
            $this->icon = $this->_uploadFoto();
        } else {
            $this->icon = $post["icon_lama"];
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
		$config['upload_path']          = './upload/excellence/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $this->icon;
		$config['overwrite']			= true;
		$config['max_size']             = 20480; // 20MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('icon')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _hapusFoto($id)
	{
		$excellence = $this->getById($id);
		if ($excellence->icon != "default.jpg") {
			$filename = explode(".", $excellence->icon)[0];
			return array_map('unlink', glob(FCPATH."upload/excellence/$filename.*"));
		}
	}
}
