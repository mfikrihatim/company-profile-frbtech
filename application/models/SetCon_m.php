<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SetCon_m extends CI_Model
{
    private $table = 'setting_contact';
    public $alamat;
    public $no_telp;
    public $email;
	public $instagram;
	public $linkedin;
    public $whatsapp;
    public $status_id;
       
    public function rules()
    {
        return [
            ['field' => 'alamat',  
        	'label' => 'alamat',  
            'rules' => 'required'],

            ['field' => 'no_telp',
    		'label' => 'no_telp',
    	    'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'instagram',
            'label' => 'instagram',
            'rules' => 'required'],

            ['field' => 'linkedin',
            'label' => 'linkedin',
            'rules' => 'required'],

            ['field' => 'whatsapp',
            'label' => 'whatsapp',
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
    }

	public function getByStatusId()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->query("SELECT * FROM $this->table WHERE status_id = 1");
        return $query->result();
    }

    public function save()
    {   
		$post = $this->input->post();
		$this->alamat = $post["alamat"];
		$this->no_telp = $post["no_telp"];
		$this->email = $post["email"];
		$this->instagram = $post["instagram"];
		$this->linkedin = $post["linkedin"];
		$this->whatsapp = $post["whatsapp"];
		$this->status_id = $post["status_id"];
		$this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
		$this->alamat = $post["alamat"];
		$this->no_telp = $post["no_telp"];
		$this->email = $post["email"];
		$this->instagram = $post["instagram"];
		$this->linkedin = $post["linkedin"];
		$this->whatsapp = $post["whatsapp"];
		$this->status_id = $post["status_id"];
		$this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
	}

    
}
?>
