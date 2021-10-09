<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_m extends CI_Model
{
    private $table = 'client';
    public $nama_client;
    public $logo_client = "default.jpg";
    public $status_id;

       public function rules()
    {
        return [
            ['field' => 'nama_client',  
            'label' => 'nama_client',  
            'rules' => 'trim|required'],

            ['field' => 'status_id',
            'label' => 'status_id',
            'rules' => 'trim|required'],
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
		$this->nama_client = $post["nama_client"];
		$this->logo_client = $this->_uploadLogo();
		$this->status_id = $post["status_id"];

		$this->db->insert($this->table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
		$this->nama_client = $post["nama_client"];
		
		if (!empty($_FILES["logo_client"]["nama_client"])) {
            $this->logo_client = $this->_uploadLogo();
        } else {
            $this->logo_client = $post["logo_lama"];
		}

		$this->status_id = $post["status_id"];
		
		$this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
		$this->_hapusLogo($id);
        return $this->db->delete($this->table, array("id" => $id));
    }

	private function _uploadLogo()
	{
		$config['upload_path']          = './upload/client/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $this->logo_client;
		$config['overwrite']			= true;
		$config['max_size']             = 20480; // 20MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('logo_client')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _hapusLogo($id)
	{
		$client = $this->getById($id);
		if ($client->logo_client != "default.jpg") {
			$filename = explode(".", $client->logo_client)[0];
			return array_map('unlink', glob(FCPATH."upload/client/$filename.*"));
		}
	}
}
