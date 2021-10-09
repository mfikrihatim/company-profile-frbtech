<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_m extends CI_Model
{
    private $table = 'product';
    public $nama;
    public $deskripsi;
    public $foto = "default.jpg";
    public $link;
    public $status_id;
       
    public function rules()
    {
        return [
            ['field' => 'nama',  
        	'label' => 'nama',  
            'rules' => 'required'],

            ['field' => 'deskripsi',
    		'label' => 'deskripsi',
    	    'rules' => 'required'],

            ['field' => 'link',
            'label' => 'link',
            'rules' => 'required'],

            ['field' => 'status_id',
            'label' => 'status_id',
            'rules' => 'required']
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

		return $this->db->get($this->table)->result();
    }

    public function save()
    {   
		$post = $this->input->post();
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->foto = $this->_uploadFoto();
		$this->link = $post["link"];
		$this->status_id = $post["status_id"];
		$this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		
		if (!empty($_FILES["foto"]["nama"])) {
            $this->foto = $this->_uploadFoto();
        } else {
            $this->foto = $post["foto_lama"];
		}

		$this->link = $post["link"];
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
		$config['upload_path']          = './upload/product/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['file_name']            = $this->nama;
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
		$product = $this->getById($id);
		if ($product->foto != "default.jpg") {
			$filename = explode(".", $product->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
		}
	}

    
}
